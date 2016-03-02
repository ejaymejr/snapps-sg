<?php
// $Source$
// $Id$

$ACCESS_LEVEL_REQUIRED = array(1, 2);
$ACCESS_DENIED_LEVELS = array(3, 4, 10, 50, 100);

define('SITE_SECTION', 'admin');
include_once './init.php';

$pageTitle = 'Send Invitation Emails';


$FORMrating = array();
foreach ($SURVEY_LINES as $sLine) {
    $FORMrating[$sLine[0]] = 0;
}


$userList = array();
$sql = "SELECT * FROM " . TABLE_USERS . " ORDER BY user_fullname";
$query = mysql_query($sql);
while ($row = mysql_fetch_assoc($query)) { 

    $row['total'] = 0;

    $sql2 = "   SELECT COUNT(*) as total 
                FROM " . TABLE_SURVEY . "
                WHERE user_id = '" . $row['user_id'] . "'
                    AND date_time >= '2007-11-13 00:00:00' ";
    $query2 = mysql_query($sql2);
    if ($query2) {
        $row2 = mysql_fetch_assoc($query2);
        $row['total'] = $row2['total'];
    }
    $key = $row['user_id'];
    $userList["$key"] = $row;
}


$FORMfrom = 'Lee Yong Kian <yongkian@micronclean.com.sg>';
$FORMcc = '';
$FORMsubject = 'Micronclean: Customer Satisfaction Survey';

$salute = 'Dear Clients,';

$FORMcontent = 
$salute . '

In order for us to improve our services for you, your feedbacks are very
important to us. Please take some time to complete the short survey in the
above URL. I thank you for your valuable time.

To participate in the survey, please visit the following web address:

http://micronclean.no-ip.com/survey/v2/

Username: $USERNAME
Password: $PASSWORD


Kindly contact us if you are having difficulties to log onto the website.

Kind Regards,

Lee Yong Kian

Micronclean Singapore Pte Ltd

Tel: (65)67582119
Fax: (65)67532978
mobile: (65)98796151
Email: <yongkian@micronclean.com.sg>
Website: www.micronclean.com.sg
';


$isSend = false;

if (isset($_POST['FORMsubmit'])) {
    $sendList = array();
    if (isset($_POST['FORMselectUser']) && sizeof($_POST['FORMselectUser']) > 0) {
        foreach ($_POST['FORMselectUser'] as $tmpID) {
            
            if (array_key_exists($tmpID, $userList)) {
                $sendList[] = $userList["$tmpID"];
            }
        }
    }
    if (sizeof($sendList) < 1) {
        $errorMsg->addMsg('No user was selected.');
    }
    

    $FORMfrom = trim(stripslashes($_POST['FORMfrom']));
    if ($FORMfrom == '') {
        $errorMsg->addMsg('<b>Sender Address</b> empty.');       
    } else {
        $from = EmailUtils::ParseEmailName($FORMfrom);
        if (!Validation::IsValidEmailFormat($from['address'])) {
            $errorMsg->addMsg('Invalid <b>Sender Address</b>.');              
        }
    }    
    $FORMsubject = trim(stripslashes($_POST['FORMsubject']));
    if ($FORMsubject == '') {
        $errorMsg->addMsg('<b>Email Subject</b> empty.');       
    }
    $FORMcontent = trim(stripslashes($_POST['FORMcontent']));
    if ($FORMcontent == '') {
        $errorMsg->addMsg('<b>Email Content</b> empty.');       
    }
    
    $FORMccList = array();
    $FORMcc = trim(stripslashes($_POST['FORMcc']));
    if ($FORMcc != '') {
        
        $tmp = explode("\n", $FORMcc);
        $FORMcc = '';
        foreach ($tmp as $tmpAdd) {
            
            $tmpAdd = trim($tmpAdd);
            $recipient = EmailUtils::ParseEmailName($tmpAdd);
            $FORMccList[] = $recipient;
            $FORMcc .= $recipient['string'] . "\n";
            
            if (!Validation::IsValidEmailFormat($recipient['address'])) {
                $errorMsg->addMsg('Invalid Address: <b>' . $recipient['address'] . '</b>.'); 
                
            } 
        }
    }

    
    if (sizeof($errorMsg->msg) == 0) {
        $isSend = true;
    } 


}



if ($isSend) {
    
    $email = new phpmailer();
    
    
    $email = new phpmailer();
    
    $email->IsHTML(false);
    $email->IsMail(true);
    $email->Host = "localhost";
    $email->From = $from['address'];
    $email->FromName = $from['name'];
    $email->Subject = $FORMsubject;
    $email->Body = $FORMcontent;
    
        
    $count = 0;
    $sentAddresses = array();
    
    foreach ($sendList as $user) {
        $email->ClearAddresses();
        $email->AddAddress(trim($user['user_email'])); 
        
        $tmptmp = explode('@', $user['user_email']);
        $password = strtolower($tmptmp[0]);

        $FORMcontent2 = str_replace('$USERNAME', $user['username'], $FORMcontent);
        $FORMcontent2 = str_replace('$PASSWORD', $password, $FORMcontent2);

        $email->Body = $FORMcontent2;

        $send = $email->Send();
        $send = true;
        if (!$send) {
            $errorMsg->addMsg('Failed to send email to ' . $user['user_email']);
            $errorMsg->addMsg($email->ErrorInfo);
        } else {
            $successMsg->addMsg('Email sent to ' . $user['user_email']);
            
            $sentAddresses[] = $user['user_email'];
            $count++;
        }        
    }
    
    if (sizeof($sentAddresses) > 0 && sizeof($FORMccList) > 0) {
        
        $sentList = implode("\n", $sentAddresses);
        $email->Body = 'Invitation was sent to the following email addresses: ' . 
                        "\n" . $sentList . 
                        "\n\n" . 
                        $FORMcontent;
        
        
        foreach ($FORMccList as $cc) {
            $email->ClearAddresses();
            $email->AddAddress($cc['address'], $cc['name']);   
            $send = $email->Send();
            if ($send) {
                $successMsg->addMsg('Email copy sent to ' . $cc['address']);
                $count++;
            }   
        }
    }
}




?>

<?php include_once PATH_TEMPLATE_ADMIN . '/header.php'; ?>
<div id="main-wide">
<?php include_once PATH_TEMPLATE_ADMIN . '/message.php'; ?>

<form name="FORMgrid" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<div class="dataGridContainer" style="width:700px; margin:auto;"> 

    <div style="padding:10px; text-align:left;">
        <a href="#" onclick="selectAllGridSelectionEngine('FORMgrid', 'FORMselectUser', true); return false;">Select ALL</a> |
        <a href="#" onclick="selectAllGridSelectionEngine('FORMgrid', 'FORMselectUser', false); return false;">Select None</a>
    </div>
    <div class="dataGridContent">
        <table cellpadding="4" cellspacing="2" border="0">
        <tr class="dataGridTableHeader">
            <td nowrap width="20" class="dataGridTableHeaderColumn alignCenter alignMiddle">&nbsp;</td>
            <td nowrap width="20" class="dataGridTableHeaderColumn alignCenter alignTop">No</td>
            <td nowrap width="100" class="dataGridTableHeaderColumn alignCenter alignTop">Name</td>
            <td nowrap width="150" class="dataGridTableHeaderColumn alignCenter alignTop">Email</td>
            <td nowrap width="150" class="dataGridTableHeaderColumn alignCenter alignTop">Company</td>
            <td nowrap width="50" class="dataGridTableHeaderColumn alignCenter alignTop">Total</td>
        </tr>
        <?php $SN = 1; $rowCount = 0; foreach ($userList as $row) : ?>
            
            <?php
            $rowClass = (($rowCount % 2) == 0) ? "dataGridRowOdd" : "dataGridRowEven";
            $rowID = 'gridRow_' . $row['user_id'];
            $checkBoxID = 'gridCheckBox_' . $row['user_id'];
            ?>
            <tr class="<?=$rowClass?>"
                id="<?=$rowID?>"
                onMouseOver="rowHovered('<?=$rowID?>');"
                onMouseOut="rowUnhovered('<?=$rowID?>');"
                onMouseDown="rowClicked('<?=$rowID?>', '<?=$checkBoxID?>');"
                >
                <td nowrap class="littleBox alignCenter">
                <input class="checkbox"
                        id="<?=$checkBoxID?>"
                        type="checkbox" 
                        name="FORMselectUser[<?=$row['user_id']?>]" 
                        value="<?=$row['user_id']?>"
                        onClick="return false;" />
                        </td>
                <td nowrap class="alignCenter alignTop"><?=$SN?>&nbsp;</td>
                <td class="alignLeft alignTop" nowrap><?php echo $row['user_fullname']; ?>&nbsp;</td>
                <td class="alignLeft alignTop" nowrap><?php echo $row['user_email']; ?>&nbsp;</td>
                <td class="alignLeft alignTop" nowrap><?php echo $row['company']; ?>&nbsp;</td>
                <td class="alignLeft alignTop" nowrap><?php echo HTMLText::FormatCellNumber($row['total']); ?>&nbsp;</td>
            </tr>
            
        <?php $SN++; $rowCount++; endforeach; ?>
        </table>
    </div>
    <div style="padding:10px; text-align:left;">
        <a href="#" onclick="selectAllGridSelectionEngine('FORMgrid', 'FORMselectUser', true); return false;">Select ALL</a> |
        <a href="#" onclick="selectAllGridSelectionEngine('FORMgrid', 'FORMselectUser', false); return false;">Select None</a>
    </div>

    <div style="padding:10px; text-align:left;">

        <div class="tableWrapper" style="width:750px;">
        <table width="750" class="FORMtable" border="0" cellpadding="4" cellspacing="0">
        <tbody>
        <tr>
            <td class="FORMcell-left" width="100">From:</td>
            <td class="FORMcell-right" width="300">
                <input type="text" name="FORMfrom" size="50"
                    class="generalTextInput"
                    id="regEmailFrom"
                    onFocus="textfieldFocus('regEmailFrom');"
                    onBlur="textfieldBlur('regEmailFrom');"
                    value="<?php echo $FORMfrom; ?>">
                    <span class="negative">*</span>            
                    </td>
                    
            <td class="FORMcell-left" width="100" rowspan="2">CC:</td>
            <td class="FORMcell-right" rowspan="2">
                <textarea cols="35" rows="5" 
                name="FORMcc"
                ><?php echo HTMLForm::FormatFormValue($FORMcc); ?></textarea>
                         
                    </td>
                    
        </tr>
        <tr>
            <td class="FORMcell-left alignTop" width="100">To:</td>
            <td class="FORMcell-right" width="300">(From Selection)</td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td class="FORMcell-left" width="100">Subject:</td>
            <td class="FORMcell-right" colspan="3">
                <input type="text" name="FORMsubject" size="90"
                    class="generalTextInput"
                    id="formSubject"
                    onFocus="textfieldFocus('formSubject');"
                    onBlur="textfieldBlur('formSubject');"
                    value="<?php echo $FORMsubject; ?>">
                    <span class="negative">*</span>            
                    </td>
        </tr>
        <tr>
            <td class="FORMcell-left" width="100">Content:</td>
            <td class="FORMcell-right" colspan="3">
                <textarea cols="90" rows="20" 
                name="FORMcontent"
                ><?php echo HTMLForm::FormatFormValue($FORMcontent); ?></textarea>
                         
                    </td>
        </tr>

        </tbody>
        <tr>
            <td class="FORMcell-left">&nbsp;</td>
            <td class="FORMcell-right" colspan="3">                
                <input type="submit" 
                    name="FORMsubmit"
                    value=" Send "
                    class="submit-button"
                    ></td>
        </tr>

        </table>
        </div>

    </div>
</div>
</form>



</div>
<?php include_once PATH_TEMPLATE_ADMIN . '/footer.php'; ?>
