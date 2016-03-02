<?php
// $Source$
// $Id$

$ACCESS_LEVEL_REQUIRED = array(1, 2);
$ACCESS_DENIED_LEVELS = array(3, 4, 10, 50, 100);

define('SITE_SECTION', 'admin');
include_once './init.php';

$pageTitle = 'Survey Result';

$SURVEY_LINES_HEADER = array(
    array('Product Knowledge', 'PK'),
    array('Professionalism', 'PRO'),
    array('Commitment', 'CMT'),
    array('Resourcefulness', 'RSC'),
    array('Responsiveness', 'RSP'),
    array('Cleanliness of Product', 'CLN'),
    array('No of Rejects / Non - Conforming Items', 'RJT'),
    array('Overal Satisfaction Level', 'OVL'),
);



//  delete submitted item
if (isset($_GET['dID'])) {
    
    $deleteID = trim(stripslashes($_GET['dID']));
    if ($deleteID >= 0) {        
        $sql = "
            DELETE FROM " . TABLE_SURVEY . "
            WHERE index_no = '" . $deleteID . "'
        ";      
        $delete = @mysql_query($sql);
        if (!$delete) {
            $errorMsg->addMsg(mysql_error());   
        } else {    
            $successMsg->addMsg('Record deleted.');
        }
    }
}




$FORMds = '';
$FORMde = '';
$fromSQL = '';
$toSQL = '';
if (isset($_GET['ds'])) {
    $FORMds = trim(stripslashes($_GET['ds']));
    if ($FORMds != '') $fromSQL = " AND date_time >= '" . SQLUtils::FormatValue($FORMds) . "' ";
}
if (isset($_GET['de'])) {
    $FORMde = trim(stripslashes($_GET['de']));
    if ($FORMde != '') $toSQL = " AND date_time <= '" . SQLUtils::FormatValue($FORMde) . "' ";
}


$selectedData = array();
if (isset($_GET['go'])) {
    $sql = "
        SELECT *,
            DATE_FORMAT(date_time, \"%e %b %Y\") as date_time_nice
        FROM " . TABLE_SURVEY . "
        WHERE 1 $fromSQL $toSQL
        ORDER BY date_time DESC      
    ";
    $query = @mysql_query($sql);
    if (!$query) {
        $errorMsg->addMsg(mysql_error());
    } else {
        while ($row = mysql_fetch_assoc($query)) {
            $selectedData[] = $row;
        }
    }
    
    if (sizeof($selectedData) == 0) {
        $errorMsg->addMsg('No record found.');
    }
}


$totals = array();
$avgs = array();
foreach ($SURVEY_LINES as $line) {
    $totals[$line[0]] = 0;
    $avgs[$line[0]] = 0;
}

foreach ($selectedData as $row) {    
    foreach ($SURVEY_LINES as $line) {
        $totals[$line[0]] += $row[$line[0]];
    }
}

foreach ($totals as $key => $t) {
    $avgs[$key] = round(($t/sizeof($selectedData)), 2);
}


$browseURL = $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING'];
?>

<?php include_once PATH_TEMPLATE_ADMIN . '/header.php'; ?>
<div id="main-wide">
<?php include_once PATH_TEMPLATE_ADMIN . '/message.php'; ?>

<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        From: <input type="text" name="ds" size="16"
            id="formDateFrom"
            value="<?php echo $FORMds; ?>">
            
            <img 
                    src="/_repo/images/cal2.gif" 
                    width="16" height="16" border="0"
                    alt="Pick up date..." 
                    id="f_trigger_c" style="cursor: pointer;" 
                    title="Date selector"/>

            <script type="text/javascript">
                Calendar.setup({
                    inputField     :    "formDateFrom",     // id of the input field
                    ifFormat       :    "%Y-%m-%d",      // format of the input field
                    button         :    "f_trigger_c",  // trigger for the calendar (button ID)
                    singleClick    :    true,  
                    weekNumbers    :    false
                });
            </script>

        &nbsp;
        To:
        <input type="text" name="de" size="16"
            id="formDateTo"
            value="<?php echo $FORMde; ?>">
            <img 
                    src="/_repo/images/cal2.gif" 
                    width="16" height="16" border="0"
                    alt="Pick up date..." 
                    id="f_trigger_c2" style="cursor: pointer;" 
                    title="Date selector"/>

            <script type="text/javascript">
                Calendar.setup({
                    inputField     :    "formDateTo",     // id of the input field
                    ifFormat       :    "%Y-%m-%d",      // format of the input field
                    button         :    "f_trigger_c2",  // trigger for the calendar (button ID)
                    singleClick    :    true,  
                    weekNumbers    :    false
                });
            </script>
        &nbsp; &nbsp; 
        <input class="submit-button" type="submit" name="go" value=" Go " />
</form>


<?php if (sizeof($selectedData) > 0) : ?>
    <ul style="margin-top:30px; margin-left:40px;">
    <?php foreach ($SURVEY_LINES_HEADER as $line) : ?>
    <li><b><?php echo $line[1]; ?></b> : <?php echo $line[0]; ?></li>
    <?php endforeach; ?>
    </ul>
    <form name="FORMgrid" method="post" action="<?php echo $browseURL; ?>">
    <div class="dataGridContent">
        <table width="100%" cellpadding="4" cellspacing="2" border="0">
        <tr class="dataGridTableHeader">
            <td nowrap width="20" class="dataGridTableHeaderColumn alignCenter alignMiddle">&nbsp;</td>
            <td nowrap width="20" class="dataGridTableHeaderColumn alignCenter alignMiddle">No</td>
            <td nowrap width="50" class="dataGridTableHeaderColumn alignCenter alignMiddle">Date</td>
            <td nowrap width="200" class="dataGridTableHeaderColumn alignCenter alignMiddle">Customer</td>
            <?php foreach ($SURVEY_LINES_HEADER as $line) : ?>
            <td width="20" class="dataGridTableHeaderColumn alignCenter alignMiddle"><?php echo $line[1]; ?></td>
            <?php endforeach; ?>
            <td nowrap width="300" class="dataGridTableHeaderColumn alignCenter alignMiddle">Comment</td>
            <td class="dataGridTableHeaderColumn alignCenter">&nbsp;</td>
            
        </tr>
        
        <tr class="dataGridTableHeader">
            <td nowrap class="dataGridTableHeaderColumn alignRight alignMiddle" colspan="4">Average</td>
            <?php foreach ($SURVEY_LINES as $line) : ?>
            <td width="20" class="dataGridTableHeaderColumn alignCenter alignMiddle"><?php echo $avgs[$line[0]]; ?></td>
            <?php endforeach; ?>
            <td class="dataGridTableHeaderColumn alignCenter" colspan="2">&nbsp;</td>
            
        </tr>

        <?php
        $SN = 1;
        $rowCount = 0;
        foreach($selectedData as $row) {
                     

            $deleteLink = '<a href="' . $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING'] . '&' . 'dID=' . $row['index_no'] . '"
                onClick="return confirm(\'Sure to delete this record?\');" 
                >Delete</a>';
            $editLink = '<a href="edit_air_particle_acro_g.php?id=' . $row['index_no'] . '">Edit</a>';
            
            
            $rowClass = (($rowCount % 2) == 0) ? "dataGridRowOdd" : "dataGridRowEven";
            $rowID = 'gridRow_' . $row['index_no'];
            $checkBoxID = 'gridCheckBox_' . $row['index_no'];
            
            ?>
            <tr class="<?=$rowClass?>"
                id="<?=$rowID?>"
                onMouseOver="rowHovered('<?=$rowID?>');"
                onMouseOut="rowUnhovered('<?=$rowID?>');"
                onMouseDown="rowClicked('<?=$rowID?>', '');"
                >
                <td class="alignCenter alignTop" nowrap>
                    <?php echo $deleteLink; ?>
                    &nbsp;
                    </td>
                <td nowrap class="alignCenter alignTop"><?=$SN?>&nbsp;</td>
                <td nowrap class="alignTop alignCenter" nowrap>       
                     <?php echo $row['date_time_nice']; ?>            
                    </td>
                <td class="alignLeft alignTop">
                    <b><?php echo $row['name']; ?></b>
                    <br />
                    <i><?php echo $row['company']; ?></i>
                
                    </td>
                <?php foreach ($SURVEY_LINES as $line) : ?>
                <td nowrap class="alignCenter alignTop"><?php echo $row[$line[0]]; ?></td>
                <?php endforeach; ?>

                <td class="alignLeft alignTop"><?php echo nl2br($row['comment']); ?></td>
                <td class="alignLeft alignTop" nowrap>&nbsp;</td>

            </tr>
            <?php
            $SN++;
            $rowCount++;
        }
        ?>
        
        <tr class="dataGridTableHeader">
            <td nowrap class="dataGridTableHeaderColumn alignRight alignMiddle" colspan="4">Average</td>
            <?php foreach ($SURVEY_LINES as $line) : ?>
            <td width="20" class="dataGridTableHeaderColumn alignCenter alignMiddle"><?php echo $avgs[$line[0]]; ?></td>
            <?php endforeach; ?>
            <td class="dataGridTableHeaderColumn alignCenter" colspan="2">&nbsp;</td>
            
        </tr>

        </table>
    </div>

    </form>

<?php endif; // if (sizeof($selectedData) > 0) ?>

<?php include_once PATH_TEMPLATE_ADMIN . '/footer.php'; ?>
