<?php
// $Source$
// $Id$

session_start();
ini_set("error_reporting", E_ALL);
ini_set("display_startup_errors", true);
ini_set("display_errors", true);

define('PATH_ROOT', './');
if(!defined('PATH_MAIN')) define('PATH_MAIN', PATH_ROOT);


if(!file_exists(PATH_MAIN . 'etc/config.php')) {
    die('config file not found');
}
include_once PATH_MAIN . 'etc/config.php';
include_once PATH_MAIN . 'etc/lib.php';
ini_set('include_path',ini_get('include_path').':' . PATH_LIB . '/PEAR:');


$mysqlConnection = mysql_connect($dbInfo['host'], $dbInfo['user'], $dbInfo['pass'])
	or die("Could not connect to database server");

@mysql_select_db($dbInfo['dbname']) or die("Could not select the database");

//echo '<h1>Database: ' . $dbInfo['dbname'] . '</h1>';

$errorMsg = new MessageHandler();
$successMsg = new MessageHandler();


$currentLogin = false;

if (defined('AUTO_LOGIN')) {
    $currentLogin = new UserLogin(5);   
    
} else if(!isset($_POST['FORMloginname'])) {
    

    // echo "invoking session";
    include_once PATH_MAIN . 'embed/session.php';
}


        
// fix some server variables that dont exist
if(!array_key_exists('REMOTE_ADDR', $_SERVER))          $_SERVER['REMOTE_ADDR'] = '';
if(!array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) $_SERVER['HTTP_X_FORWARDED_FOR'] = '';
if(!array_key_exists('HTTP_USER_AGENT', $_SERVER))      $_SERVER['HTTP_USER_AGENT'] = '';
if(!array_key_exists('HTTP_REFERER', $_SERVER))         $_SERVER['HTTP_REFERER'] = '';


// start breadcrumb
$breadCrumb = new BreadCrumb();
$breadCrumb->addMember('Home', PATH_SITEROOT);

//var_dump($currentLogin);

?>
