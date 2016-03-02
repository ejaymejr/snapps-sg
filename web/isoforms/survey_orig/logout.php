<?php
// $Source$
// $Id$

define('SITE_TITLE', 'Logout');
$pageTitle = 'Logout';
include_once './init.php';

if($currentLogin->ID) {
    LogService::LogUserAction($currentLogin->ID, "LOGOUT (" . $currentLogin->info['username'] . ")");
    
    $_SESSION[SITE_USER_SESSION_VAR] = 0;
    $_SESSION[SITE_HASH_SESSION_VAR] = '';
    
    unset($_SESSION[SITE_USER_SESSION_VAR]);
    unset($_SESSION[SITE_HASH_SESSION_VAR]);
    
    $query = @mysql_query("
                UPDATE " . TABLE_USERS_LOGIN_INFO . "
                SET session_hash_string = ''
                WHERE user_id = '" . $currentLogin->ID . "'");
}
header("Location: " . PATH_MAIN . 'index.php');
?>