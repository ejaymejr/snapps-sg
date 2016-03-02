<?php
// $Source$
// $Id$

if(!isset($FORMloginname) || $FORMloginname == '') {
    $FORMloginname = 'username';
}
$FORMloginname = HTMLForm::FormatFormValue($FORMloginname);

if(!isset($loginAttemptFrom) || $loginAttemptFrom == '') {
    $loginAttemptFrom = $_SERVER["REQUEST_URI"];
}
$loginAttemptFrom =  HTMLFORM::FormatFormValue($loginAttemptFrom);
?>

<?php include_once PATH_TEMPLATE . '/header.php'; ?>
<div id="main-wide-2">
<?php include_once PATH_TEMPLATE . '/message.php'; ?>
<div id="login-screen">
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
		</form>
</div>
</div>
<?php include_once PATH_TEMPLATE . '/footer.php'; ?>
