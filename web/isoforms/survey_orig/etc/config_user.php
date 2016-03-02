<?php
// $Source$
// $Id$

define('ACCESS_SA', 1);
define('ACCESS_ADMIN', 2);
define('ACCESS_USER', 4);
define('ACCESS_CUSTOMER', 10);
define('ACCESS_PARTNER', 20);
define('ACCESS_GUEST', 50);
define('ACCESS_ANONYMOUS', 100);

define('USER_ENABLED', 1);
define('USER_DISABLED', 0);

$SALUTATION_OPTIONS = array(
    array('Mr', 'Mr'),
    array('Mrs', 'Mrs'),
    array('Ms', 'Ms')
);

$GENDER_OPTIONS = array("M" => "Male",
                       "F" => "Female",
                       "Unknown" => "Unspecified"
                       );
// user access strings
$ACCESS_STRING[ACCESS_SA]           = 'Super Admin';
$ACCESS_STRING[ACCESS_ADMIN]        = 'Administrator';
$ACCESS_STRING[ACCESS_CUSTOMER]     = 'Customer';
$ACCESS_STRING[ACCESS_PARTNER]      = 'Partner';
$ACCESS_STRING[ACCESS_USER]         = 'Member';
$ACCESS_STRING[ACCESS_GUEST]        = 'Guest';
$ACCESS_STRING[ACCESS_ANONYMOUS]    = 'Anonymous';

// user status string
$USER_STATUS_STRING[0]    = '<span class="negative">Disabled</span>';
$USER_STATUS_STRING[1]    = '<span class="positive">Enabled</span>';

?>