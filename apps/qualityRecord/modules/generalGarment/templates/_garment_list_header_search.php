<?php
// $Source$
// $Id$

?>
<tr class="dgts" style="display:<?php echo $sf_params->get('commit', false) !== false ? '\'\'' : 'none' ?>;" id="<?php echo $searchContainerID ?>">
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>
    <td>&nbsp;</td>

    <td><?php echo input_tag('garment_code', $sf_params->get('garment_code'), 'size="20"') ?></td>
    <td><?php echo input_tag('type', $sf_params->get('type'), 'size="25"') ?></td>
    <td><?php echo input_tag('size', $sf_params->get('size'), 'size="10"') ?></td>
    <td><?php echo input_tag('customer', $sf_params->get('customer'), 'size="40"') ?></td>
    <td><?php echo input_tag('number', $sf_params->get('number'), 'size="20"') ?></td>
    <td><?php echo input_tag('hanger_no', $sf_params->get('hanger_no'), 'size="20"') ?></td>
    <td><?php echo submit_tag('search', 'width="100%" height="100%"') ?></td>    
</tr> 
