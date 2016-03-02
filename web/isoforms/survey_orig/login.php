<?php
// $Source$
// $Id$

define('SITE_TITLE', 'Login');
$pageTitle = 'Please Login';
include_once './init.php';


// var_dump($_POST);
// var_dump($_SESSION);
if(isset($_SESSION[SITE_USER_SESSION_VAR]) && $_SESSION[SITE_USER_SESSION_VAR] < 1) {
    $_SESSION[SITE_USER_SESSION_VAR] = 0;
    unset($_SESSION[SITE_USER_SESSION_VAR]);
}
if(isset($_SESSION[SITE_HASH_SESSION_VAR]) && strlen($_SESSION[SITE_HASH_SESSION_VAR]) < 1) {
    $_SESSION[SITE_HASH_SESSION_VAR] = '';
    unset($_SESSION[SITE_HASH_SESSION_VAR]);
}

//echo $_SERVER['REQUEST_URI'];
$loginSuccess = false;

if(isset($_POST['loginAttemptFrom'])) {
    $loginAttemptFrom = trim(stripslashes($_POST['loginAttemptFrom']));
} else {
    $loginAttemptFrom = PATH_MAIN;
}
if(strpos($loginAttemptFrom, '../') === 0) {
    $loginAttemptFrom = PATH_MAIN;
}

// dont proceed if already logged in
if(isset($_SESSION[SITE_USER_SESSION_VAR]) && isset($_SESSION[SITE_HASH_SESSION_VAR])) {
    header("Location: $loginAttemptFrom");
    exit();
}


if(!isset($_SESSION['failLoginAttempts'])) {
    $_SESSION['failLoginAttempts'] = array();
}

// var_dump($_POST);
if(isset($_POST["FORMsubmit"]) || isset($_POST["FORMsubmit_x"])) {
    // echo 'isset($_POST["FORMsubmitlogin"])<br />';

    $FORMloginname = trim(stripslashes($_POST['FORMloginname']));
    $FORMloginpasswd = trim(stripslashes($_POST['FORMloginpasswd']));

    $loginAttemptID = UserAccount::GetID($FORMloginname);

    if(!array_key_exists($FORMloginname, $_SESSION['failLoginAttempts'])) {
        $_SESSION['failLoginAttempts'][$FORMloginname] = 0;
    }

    
    // check for nonexistent username
    if(!$loginAttemptID) {
        // $errorMsg->addMsg("Account '$FORMloginname' does not exist.");
    } 
    // check if user is disabled
    else if(UserAccount::IsDisabled($loginAttemptID)) {
        $errorMsg->addMsg("Account is either non-active or disabled.");
    } 
    // proceed with login validation
    else {
        $loginID = UserAccount::MatchLogin($FORMloginname, $FORMloginpasswd);
        if($loginID) {
            LogService::LogUserAction($loginID, "LOGIN (" . $FORMloginname . ")");
            $loginSuccess = true;
        }
    }

        
    if($loginSuccess) {
        
        $currentLogin = new UserLogin($loginID);
        $currentLogin->updateLoginInfo();

        // var_dump($currentLogin);

        // clear failed attempts record
        $_SESSION['failLoginAttempts'][$FORMloginname] = 0;

        // set proper session identifier
        $_SESSION[SITE_USER_SESSION_VAR] = $currentLogin->ID;
        $_SESSION[SITE_HASH_SESSION_VAR] = $currentLogin->info['user_hash_string'];
                
        // initialize
        // redirect to redirection page
        header("Location: $loginAttemptFrom");
        exit();
    }
    // when a login attempt fails:
    else {
        $_SESSION['failLoginAttempts'][$FORMloginname]++;
        $errorMsg->addMsg('Login failed');
        LogService::LogUserAction($loginAttemptID, "Failed Login ($FORMloginname)");
    }



}

// var_dump($_SESSION);
// var_dump($currentLogin);
 //echo session_id();
?>
<?php include PATH_TEMPLATE . '/login_screen.php';?>
