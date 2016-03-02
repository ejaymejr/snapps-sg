<?php
// $Source$
// $Id$





if(isset($currentLogin) && $currentLogin->ID) {

    
    $displayLink = $currentLogin->info['user_firstname'] . ' ' . $currentLogin->info['user_lastname'];


    $logoutLink = '<a href="' . PATH_MAIN . 'logout.php">Logout</a>';
    
    echo '<div id="login-info">';
    echo $displayLink . '<br />' . $logoutLink;
    echo "<br /><br />";
    echo '</div>';

} else {

    if(!isset($FORMloginname) || $FORMloginname == '') {
        $FORMloginname = 'username';
    }
    $FORMloginname = HTMLForm::FormatFormValue($FORMloginname);
        
    if(!isset($loginAttemptFrom) || $loginAttemptFrom == '') {
        $loginAttemptFrom = $_SERVER["REQUEST_URI"];
    }
    // $loginAttemptFrom =  HTMLFORM::FormatFormValue($loginAttemptFrom);

    ?>
    
    <p align="left">
    Dear Valued Customers,
    <br />
    Please login in order to proceed with our survey.
    <br />
    <br />
    </p>
    <form name="mainloginform" action="<?php echo PATH_MAIN; ?>login.php" method="post">
    
    <input name="loginAttemptFrom" type="hidden"
        value="<?=$loginAttemptFrom?>" />

    <input type="text" size="24" value="<?=$FORMloginname?>"
        name="FORMloginname"
        id="formUsername"
        onFocus="usernamefieldFocus('formUsername');"
        onBlur="usernamefieldBlur('formUsername');"
        ><br>
    <input type="password" size="24" value="password"
        name="FORMloginpasswd"
        id="formPassword"
        onFocus="passwordfieldFocus('formPassword');"
        onBlur="passwordfieldBlur('formPassword');"
        ><br>
    <input type="submit" class="submit-button" 
        name="FORMsubmit" value=" Login " />
    <!-- <input type="submit" class="button" value="Login"> -->
    </form>

    <?php
}
?>