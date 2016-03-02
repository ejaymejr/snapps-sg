<?php
// $Source$
// $Id$

// define path root, this constant will only be used if PATH_MAIN is not set.
// despite so, please please set PATH_MAIN using path.set.php in each directory
if(!defined('PATH_ROOT')) define('PATH_ROOT', '/');



// ###########################################################################
// 
//      generally you dont need to modify any of the subsequent lines
// 
// ---------------------------------------------------------------------------

if(!defined('PATH_MAIN')) define('PATH_MAIN', PATH_ROOT);
include_once PATH_MAIN . 'etc/config_path.php';

include_once PATH_ETC . 'config_db.php';
include_once PATH_ETC . 'config_dbtable.php';

include_once PATH_ETC . 'config_general.php';
include_once PATH_ETC . 'config_email.php';

include_once PATH_ETC . 'config_user.php';
?>
