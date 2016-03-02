<?php
// $Source$
// $Id$

define('SITE_TITLE', 'Micronclean Customer Satisfaction Survey');

if (defined('ACCESS_REQUIRED_OVERRIDE')) {
    define('ACCESS_REQUIRED', ACCESS_REQUIRED_OVERRIDE);
}

if (!defined('SITE_SECTION')) define('SITE_SECTION', 'admin');
define('PATH_MAIN', './');
include_once PATH_MAIN . 'etc/init.php';
include_once PATH_ADMIN . 'etc/config_path.php';
include_once PATH_ADMIN . 'etc/config_general.php';

unset ($breadCrumb);
?>
