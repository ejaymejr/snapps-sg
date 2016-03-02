<?php
// $Source$
// $Id$

define('SITE_USER_SESSION_VAR', 'microncleansurvey_gwvti');
define('SITE_HASH_SESSION_VAR', 'microncleansurvey_gwvtihsh');

if (!defined('SITE_TITLE')) define('SITE_TITLE', 'Micronclean Customer Satisfaction Survey');

define('SORT_ORDER_DUMMY', 999999999);

define('HOUR_OFFSET', 8);
define('MINUTE_OFFSET', 0);


if (!defined('GRID_ROWS_PER_PAGE')) define("GRID_ROWS_PER_PAGE", 10);
define("DOUBLE_PAGING_MINIMUM", 10); 




$SURVEY_LINES = array(
    array('product_knowledge', 'Product Knowledge'),
    array('professionalism', 'Professionalism'),
    array('commitment', 'Commitment'), 
    array('resourcefulness', 'Resourcefulness'), 
    array('responsiveness', 'Responsiveness'), 
    array('cleanliness', 'Cleanliness of Product'), 
    array('rejects', 'No. of Rejects/Non - conforming Items'), 	
    array('satisfaction', 'Overall Satisfaction Level')
);

$SURVEY_OPTIONS = array(
    1 => 'Very Poor',
    2 => 'Poor',
    3 => 'Satisfactory',
    4 => 'Good',
    5 => 'Excellent'
)
?>
