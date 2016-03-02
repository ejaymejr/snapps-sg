<?php
$menuMicronclean = array(
'MICRONCLEAN', array(

array('Seagate Garment IV', url_for('') . 'sgiv/', false),
array('Seagate Garment IV (Fresh)', 'http://dev.micronclean/amk/sgiv/', false),
array('Seagate Garment IV (Chip)', 'http://dev.micronclean/yishun/sgiv/', false),  
array('Seagate Hanger', 'http://orion.micronclean/admiralty/hgas/', false),
array('Numonyx Hanger', 'http://orion.micronclean/numonyx/hgas/', false),
array('PVA Washer', 'https://www.microncleansingapore.com/sym/pva/washlog/search', true),
array('Janitorial Log', 'https://www.microncleansingapore.com/sym/maintenance/janitorial/mcs', true),
array('Pest Control Inspection', 'https://www.microncleansingapore.com/sym/maintenance/pest/add', true),
array('Sales (MCS)', 'http://sales.micronclean/', false), 
array('Quality Record (MCS)', 'https://www.microncleansingapore.com/qualityRecord/singapore/micronclean', true),
array('Customer Management (MCS)', 'http://sales.micronclean/customer/', false),
));



$menuACRO = array(
'ACRO SOLUTIONS / NANOCLEAN', array(
array('Quality Records (Seagate)', 'https://www.microncleansingapore.com/qualityRecord2/qualityRecord/', true),  
array('Seagate Cassette Inventory', 'https://www.microncleansingapore.com/sym/cassette/fallout/search', true),    
array('Seagate Conveyors', 'https://www.microncleansingapore.com/orion/conveyor/', true),    
array('Seagate Slot Valve', 'https://www.microncleansingapore.com/sym/slotvalve/batch/search', true),    
array('Janitorial Log', 'https://www.microncleansingapore.com/sym/maintenance/janitorial/acro', true),
array('Sales (ACRO)', 'http://acro.micronclean/sales/', false), 
array('Customer Management (ACRO)', 'http://acro.micronclean/customer/', false)
));


$menuFinance = array(
'FINANCE', array(
array('Purchasing', 'https://www.microncleansingapore.com/sym/purchasing/', true), 
array('Expenditure', url_for('') . 'finance/', false), 


array('Vendor Management', 'https://www.microncleansingapore.com/sym/vendor/', true), 
array('Forecasts', 'http://orion.micronclean/cityhall/account/', false)
));

$menuAdministration = array(
'ADMINISTRATION', array(
array('Snapps User Management', 'https://www.microncleansingapore.com/sym/user/', true)
));

$menuHR = array(
'HUMAN RESOURCE', array(
array('Human Resource', 'http://orion.micronclean/cityhall/hr/', false)
));

$menuISO = array(
'QUALITY ASSURANCE', array(
array('ISO 9000 Documents',     'https://www.microncleansingapore.com/sym/isodoc/wi/Micronclean', true),
array('Quality Records',         'https://www.microncleansingapore.com/qualityRecord/singapore', true),
array('Malaysia Plant', 'https://www.microncleansingapore.com/my/qualityRecord', true)
));
?>

<table id="cpanelmenuContainer" width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
    <td rowspan="3" width="10%">&nbsp;</td>
    <td height="10"><?php include_partial('group', array('group' => $menuMicronclean)); ?></td>
    <td><?php include_partial('group', array('group' => $menuACRO)); ?></td>
    <td width="30%" rowspan="3" class="bookmarks"><?php include_partial('group', array('group' => $menuISO)); ?></td>
    <td rowspan="3" width="10%">&nbsp;</td>
</tr>
<tr>
    <td rowspan="2"><?php include_partial('group', array('group' => $menuFinance)); ?></td>
    <td><?php include_partial('group', array('group' => $menuHR)); ?></td>
</tr>
<tr>
    <td><?php include_partial('group', array('group' => $menuAdministration)); ?></td>
</tr>
</table>
