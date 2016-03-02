<?php
// $Source$
// $Id$

$ACCESS_LEVEL_REQUIRED = array(1, 2, 3, 4, 10);
$ACCESS_DENIED_LEVELS = array(50, 100);

define('SITE_SECTION', 'admin');
include_once './init.php';

$pageTitle = 'Customer Satisfaction Survey';


$FORMrating = array();
foreach ($SURVEY_LINES as $sLine) {
    $FORMrating[$sLine[0]] = 0;
}



if (isset($_POST['FORMsubmit'])) {
    
    $FORMcomment = trim($_POST['FORMcomment']);

    foreach ($SURVEY_LINES as $sLine) {
        $key = $sLine[0];
        if (array_key_exists($key, $_POST['FORMrating'])) {
            $FORMrating[$key] = trim(stripslashes($_POST['FORMrating'][$key]));
        }
    }

    // "index_no";"date_time";"name";"company";
    // "product_knowledge";"professionalism";"commitment";"resourcefulness";
    // "responsiveness";"cleanliness";"rejects";"satisfaction";
    // "comment"

    $sql = "
        INSERT INTO " . TABLE_SURVEY . "
        SET date_time = NOW(),
            user_id = '" . $currentLogin->info['user_id'] . "',
            name = '" . $currentLogin->info['user_fullname'] . "',
            company = '" . $currentLogin->info['company'] . "',
            product_knowledge = '" . $FORMrating['product_knowledge'] . "',
            professionalism = '" . $FORMrating['professionalism'] . "',
            commitment = '" . $FORMrating['commitment'] . "',
            resourcefulness = '" . $FORMrating['resourcefulness'] . "',
            responsiveness = '" . $FORMrating['responsiveness'] . "',
            cleanliness = '" . $FORMrating['cleanliness'] . "',
            rejects = '" . $FORMrating['rejects'] . "',
            satisfaction = '" . $FORMrating['satisfaction'] . "',
            comment = '" . $FORMcomment . "'
    ";
    $query = mysql_query($sql);
    if (!$query) {
        $errorMsg->addMsg(mysql_error());
    } else {
        $successMsg->addMsg('Survey had been recorded.');
        $successMsg->addMsg('Thank you for your feedback.');
    }
}
?>

<?php include_once PATH_TEMPLATE_ADMIN . '/header.php'; ?>
<div id="main-wide">
<?php include_once PATH_TEMPLATE_ADMIN . '/message.php'; ?>

<form onsubmit="return checkSurvey(<?php echo sizeof($SURVEY_LINES); ?>);" name="FORMgrid" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<table width="100%" cellpadding="4" cellspacing="2" border="0">
<tr>
<td width="500">
<div class="dataGridContainer" style="width:470px; margin:auto;"> 
    <p style="text-align:justify;">How would you rate our services provided to you based on<br />the following attributes?</p>
    <div class="dataGridContent">
        <table width="100%" cellpadding="4" cellspacing="2" border="0">
        <tr class="dataGridTableHeader">
            <td nowrap width="20" class="dataGridTableHeaderColumn alignCenter alignTop">No</td>
            <td nowrap width="200" class="dataGridTableHeaderColumn alignCenter alignTop">Criteria</td>
            <td nowrap width="250" class="dataGridTableHeaderColumn alignCenter alignTop">Rating</td>
        </tr>
        <?php $SN = 1; $rowCount = 0; foreach ($SURVEY_LINES as $sLine) : ?>
            
            <?php
            $rowClass = (($rowCount % 2) == 0) ? "dataGridRowOdd" : "dataGridRowEven";
            $rowID = 'gridRow_' . $SN;
            $ratingID = 'FORMrating_' . $SN;
            ?>
            <tr class="<?=$rowClass?>"
                id="<?=$rowID?>"
                >
                <td nowrap class="alignCenter alignTop"><?=$SN?>&nbsp;</td>
                <td class="alignLeft alignTop" nowrap><?php echo $sLine[1]; ?>&nbsp;</td>
                <td class="alignLeft alignTop rating" nowrap>  
                    <input type="hidden" id="<?=$ratingID?>" name="FORMrating[<?=$sLine[0]?>]" value="0" />
                    <ul class="star-rating">
                        <li><a id="<?=$rowID?>_1" onclick="document.getElementById('<?=$ratingID?>').value=1; rateThis('<?=$rowID?>', 1); return false;" href="#" title="1 star out of 5" class="one-star">1</a></li>
                        <li><a id="<?=$rowID?>_2" onclick="document.getElementById('<?=$ratingID?>').value=2; rateThis('<?=$rowID?>', 2); return false;" href="#" title="2 stars out of 5" class="two-stars">2</a></li>
                        <li><a id="<?=$rowID?>_3" onclick="document.getElementById('<?=$ratingID?>').value=3; rateThis('<?=$rowID?>', 3); return false;" href="#" title="3 stars out of 5" class="three-stars">3</a></li>
                        <li><a id="<?=$rowID?>_4" onclick="document.getElementById('<?=$ratingID?>').value=4; rateThis('<?=$rowID?>', 4); return false;" href="#" title="4 stars out of 5" class="four-stars">4</a></li>
                        <li><a id="<?=$rowID?>_5" onclick="document.getElementById('<?=$ratingID?>').value=5; rateThis('<?=$rowID?>', 5); return false;" href="#" title="5 stars out of 5" class="five-stars">5</a></li>
                    </ul> 
                </td>
            </tr>
            
        <?php $SN++; $rowCount++; endforeach; ?>
        </table>
    </div>
</div>

</td>
<td style="vertical-align:bottom;">
    <p style="text-align:justify;">How could we improve our services?</p>
    <textarea name="FORMcomment" cols="60" rows="20"></textarea>
    <br />
        <input type="submit" class="submit-button" 
            name="FORMsubmit" value=" Submit " 
            style="height:50px; width:100px;" />
</td>
</tr>
</table>
</form>



</div>
<?php include_once PATH_TEMPLATE_ADMIN . '/footer.php'; ?>
