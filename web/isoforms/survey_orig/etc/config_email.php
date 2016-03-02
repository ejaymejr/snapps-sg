<?php
// $Source$
// $Id$


define('SITE_URL', 'http://micronclean.no-ip.com/survey/');
define('EMAIL_FROM_DEFAULT', 'Micronclean Singapore');
define('EMAIL_FROM_ADDRESS_DEFAULT', 'nyoman@micronclean.com.sg');

define('EMAIL_SMTP_MODE', false);
// these fields are required for SMTP mode
define('SMTP_SERVER', 'smtp.gmail.com');
define('SMTP_USERNAME', 'pkwebportal@gmail.com');
define('SMTP_PASSWORD', '20pkweb05');
define('SMTP_PORT', 465);

// CC (actually, an email by itself rather than CC) all outgoing emails to admins' addresses
// For mass-email, only one copy will be sent to each admin's address 
define('EMAIL_ALWAYS_CC_ADMIN', true);

// redirect all outgoing emails to test address
define('EMAIL_TEST_MODE', false);
$EMAIL_TEST_ADDRESSES = array('guido@kejadian.or.id', 'test.address@yahoo.com');

// CC (actually, an email by itself rather than CC) all outgoing emails to specified address
// For mass-email, only one copy will be sent to each address 
define('EMAIL_ALWAYS_CC', true);
$EMAIL_CC_ADDRESSES = array('development.address@hotmail.com', 'development.address@gmail.com');
?>