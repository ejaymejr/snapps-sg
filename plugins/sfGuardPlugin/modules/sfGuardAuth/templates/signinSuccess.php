<?php use_helper('Javascript', 'Validation', 'I18N') ?>

<div id="sf_guard_auth_form">

<p id="signinQuote"><?php echo image_tag('signin-iam.jpg'); ?></p>

<?php echo form_tag('@sf_guard_signin') ?>
  <table cellspacing="0" cellpadding="0" border="0">
  <tr class="form-row" id="sf_guard_auth_username">
    <td class="left"><?php echo label_for('username', __('Username: ')); ?></td>
    <td class="right">
        <?php echo form_error('username'); ?>
        <?php echo input_tag('username', $sf_data->get('sf_params')->get('username')); ?>
    </td>
    </tr>

    <tr class="form-row" id="sf_guard_auth_password">
    <td class="left"><?php echo label_for('password', __('Password: ')); ?></td>
    <td class="right">
        <?php echo form_error('password'); ?>
        <?php echo input_password_tag('password'); ?>
    </td>
    </tr>
    
    <!--
    <tr class="form-row" id="sf_guard_auth_remember">
    <td class="left">&nbsp;</td>
    <td class="right">
        <?php echo checkbox_tag('remember'); ?>
        <?php echo label_for('remember', __('Remember me?')); ?>
    </td>
    </tr>
      -->
    <tr class="form-row" id="sf_guard_auth_submit">
    <td class="left">&nbsp;</td>
    <td class="right">
        <input type="submit" name="commit" value="Sign In" class="submit-button" />
    </td>
    </tr>
    
    
    <?php 
    // echo submit_tag(__('sign in', array('class' => 'submit-button'))), 
    // echo link_to(__('Forgot your password?'), '@sf_guard_password', array('id' => 'sf_guard_auth_forgot_password')) 
    ?>
</table>
</form>
</div>

<?php echo javascript_tag("
$('username').focus();
textfieldFocus('username');
");
?>

