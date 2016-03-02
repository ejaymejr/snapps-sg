<?php
// $Source$
// $Id$

// var_dump($_SESSION);
// var_dump($currentLogin);
// echo session_id();

if(isset($_SESSION[SITE_USER_SESSION_VAR]) && $_SESSION[SITE_USER_SESSION_VAR] < 1) {
    unset($_SESSION[SITE_USER_SESSION_VAR]);
}
if(isset($_SESSION[SITE_HASH_SESSION_VAR]) && strlen($_SESSION[SITE_HASH_SESSION_VAR]) < 1) {
    unset($_SESSION[SITE_HASH_SESSION_VAR]);
}


if(isset($_SESSION[SITE_USER_SESSION_VAR]) && $_SESSION[SITE_USER_SESSION_VAR] > 0 
        && isset($_SESSION[SITE_HASH_SESSION_VAR]) && strlen($_SESSION[SITE_HASH_SESSION_VAR]) > 0) {

    $loginID = SQLUtils::FormatValue(stripslashes($_SESSION[SITE_USER_SESSION_VAR]));
    $hashString = SQLUtils::FormatValue(stripslashes($_SESSION[SITE_HASH_SESSION_VAR]));

    $query = @mysql_query("SELECT * FROM " . TABLE_USERS_LOGIN_INFO . "
                            WHERE user_id = '$loginID'
                                AND user_hash_string = '$hashString'
                            ;");
    if(!$query) echo mysql_error();
    else if( mysql_num_rows($query) < 1){
        unset($_SESSION[SITE_USER_SESSION_VAR]);
        unset($_SESSION[SITE_HASH_SESSION_VAR]);
        unset($currentLogin);
    }
    else {
        $row = mysql_fetch_array($query);
        
        // check if the session still belongs to this user
        if($row['user_current_session_id'] == session_id() ) {
            $currentLogin = new UserLogin($loginID);
            $currentLogin->updateHashString();
    
            // renew the session variable
            $_SESSION[SITE_USER_SESSION_VAR] = $currentLogin->ID;
            $_SESSION[SITE_HASH_SESSION_VAR] = $currentLogin->info['user_hash_string'];

        } else {
            $errorMsg->addMsg('There is another session associated with your account');
            unset($_SESSION[SITE_USER_SESSION_VAR]);
            unset($_SESSION[SITE_HASH_SESSION_VAR]);
            unset($currentLogin);
        }
    }

} else {
    unset($currentLogin);
}

if(!isset($currentLogin) || !$currentLogin->info['user_level']) {

}


// var_dump($_SESSION);
if(!isset($currentLogin)) {
    $currentLogin = new UserLogin(0);
    $currentLogin->ID = 0;
    $currentLogin->info = array();
    $currentLogin->info['user_id'] = 0;
    $currentLogin->info['user_level'] = ACCESS_ANONYMOUS;
}

// var_dump($currentLogin);
// echo session_id();
if (isset($currentLogin) && isset($ACCESS_LEVEL_REQUIRED) && sizeof($ACCESS_LEVEL_REQUIRED) > 0) {

    if (!in_array($currentLogin->info['user_level'], $ACCESS_LEVEL_REQUIRED)) {
        // $errorMsg->addMsg("Denied by access ACCESS_LEVEL REQUIRED array");
        include_once PATH_TEMPLATE . 'access_denied.php';
        exit();    
    }
} else if (defined('ACCESS_REQUIRED') && ACCESS_REQUIRED) {
    
    if(!isset($_SESSION[SITE_USER_SESSION_VAR]) || !isset($_SESSION[SITE_HASH_SESSION_VAR])) {
        
        // $errorMsg->addMsg("Denied by session var");
        include_once PATH_TEMPLATE . 'access_denied.php';
        exit();
    } else if($currentLogin->info['user_level'] > ACCESS_REQUIRED) {
        // $errorMsg->addMsg("Denied by ACCESS_REQUIRED");
        include_once PATH_TEMPLATE . 'access_denied.php';
        exit();
    } else if (isset($ACCESS_DENIED_LEVELS) && sizeof($ACCESS_DENIED_LEVELS) > 0
            && in_array($currentLogin->info['user_level'], $ACCESS_DENIED_LEVELS)) {
                
        // $errorMsg->addMsg("Denied by ACCESS_DENIED_LEVELS");
        include_once PATH_TEMPLATE . 'access_denied.php';
        exit();                
    }
}

// var_dump($currentLogin);
// var_dump($_SESSION);
?>
