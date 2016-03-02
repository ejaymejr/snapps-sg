<?php
// $Source$
// $Id$

$errorMsg = $sf_request->getErrorMsg();
$successMsg = $sf_request->getSuccessMsg();
$warningMsg = $sf_request->getWarningMsg();


$flashError = $sf_flash->get('errorMsg', false);
$flashSuccess = $sf_flash->get('successMsg', false);
$flashWarning = $sf_flash->get('warningMsg', false);

if ($flashError) $errorMsg->addMsg($flashError);
if ($flashSuccess) $successMsg->addMsg($flashSuccess);
if ($flashWarning) $warningMsg->addWarning($flashWarning);

if(isset($errorMsg) && sizeof($errorMsg->msg)) {
    ?>
    
<div class="sfTMessageContainer sfTAlert"> 
  <?php echo image_tag('icons/cancel48', 
                array('alt' => 'page not found', 'class' => 'sfTMessageIcon')); ?>
  <div class="sfTMessageWrap">
    <h1>Error encountered.</h1>
    <h5>Could not continue.</h5>
        
  </div>
  <?php $errorMsg->printMsg(); ?>
</div>
    <?php
}
if(isset($successMsg) && sizeof($successMsg->msg)) {
    ?>
<div class="sfTMessageContainer sfTSuccess"> 
  <?php echo image_tag('icons/ok48', 
                array('alt' => 'action ok', 'class' => 'sfTMessageIcon')); ?>
  <div class="sfTMessageWrap">
    <h1>Successful Tasks.</h1>           
  </div>
    <?php $successMsg->printMsg(); ?> 
</div>
    <?php
}
if(isset($warningMsg) && sizeof($warningMsg->msg)) {
    ?>
<div class="sfTMessageContainer sfTWarning"> 
  <?php echo image_tag('icons/warning48', 
                array('alt' => 'action ok', 'class' => 'sfTMessageIcon')); ?>
  <div class="sfTMessageWrap">
    <h1>Warning.</h1>           
  </div>
    <?php $warningMsg->printMsg(); ?> 
</div>
    <?php
}
?>
