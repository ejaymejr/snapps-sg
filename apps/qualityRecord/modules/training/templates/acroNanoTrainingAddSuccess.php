<?php use_helper('Validation', 'Javascript') ?>
<?php
$empList = HrEmployeeMasterPeer::GetEmpList('AcroNano');
$verify = array(
                'CHYE LYE HENG'=>'CHYE LYE HENG',
    			'MEIZHEN'=>'MEIZHEN',
    			'ADELINE'=>'ADELINE', 
                'TERENCE'=>'TERENCE',
                'MELVIN'=>'MELVIN',
    			'OTHERS'=>'OTHERS');  

?>

<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('training/acroNanoTrainingAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
<div align="center">
<table width="90%" class="FORMtable" border="0" cellpadding="1"
	cellspacing="0">
	<tr>
		<td>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"
			cellspacing="0">
			<tr>
				<td height="32" colspan="6" align="center" bgcolor="#FFAC25" nowrap><span
					style="color: #FFF">
				<H2>ACRO/NANO EMPLOYEE TRAINING DATA SHEET</H2>
				</span></td>
			</tr>
			<tr>
				<td width="200" class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>EMPLOYEE</td>
				<td colspan="3" class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('employee_no');
				echo select_tag('employee_no',
				options_for_select($empList,
				$sf_params->get('employee_no') )
				) ;
				?><span class="negative"> if employee not found on the list, click </span><input
					type="submit" name="rebuild" value=" Rebuild "
					class="submit-button"></td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>DATE FROM</td>
				<td colspan="3" width="100" class="FORMcell-right" nowrap><?php
				    echo HTMLForm::DrawDateInput('date_from', $sf_params->get('date_from', date('Y-m-d')), 'date_from', XIDX::next(), ' size="12" '); 
				    echo ' TO ';
				    echo HTMLForm::DrawDateInput('date_to', $sf_params->get('date_to', date('Y-m-d')), 'date_to', XIDX::next(), ' size="12" ');
				    ?>
				</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>TOTAL #HOURS</td>
				<td  width="100" class="FORMcell-right" nowrap><?php
                    echo input_tag('no_hrs', $sf_params->get('no_hrs'), 'size="10"')
				?>
				</td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>VERIFY</td>
				<td class="FORMcell-right" nowrap><?php
				echo HTMLForm::Error('verify');
				echo select_tag('verify',
				options_for_select($verify,
				$sf_params->get('verify') )
				) ;
				?>		
				<div id="DIVVerifyRemark">
				<span class="negative">
					Trainee must not verify himself;<br>
					Trainee must be verified by a qualified personnel with equal or higher position.
				</span>	
				</div>		
				</td>
			</tr>			
						
			<tr>
				<td height="25" colspan="6" align="center" bgcolor="#FFAC25" nowrap><span
					style="color: #FFF">
				<H3>TRAINING AREAS</H3>
				</span></td>
			</tr>		
			<tr>
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('quality_policy', 'YES', is_checked($sf_params->get('quality_policy')) ) . '&nbsp;&nbsp;Quality Policy / Objective</span>';
				?>
				<td colspan="2" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('spc_awareness', 'YES', is_checked($sf_params->get('spc_awareness')) ) . '&nbsp;&nbsp;SPC Awareness</span>';
				?>
			</tr>			
			<tr>
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('initial_inspection', 'YES', is_checked($sf_params->get('initial_inspection')) ) . '&nbsp;&nbsp;Initial Inspection</span>';
				?>
				<td colspan="2" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('delabeling_jelly_removal', 'YES', is_checked($sf_params->get('delabeling_jelly_removal')) ) . '&nbsp;&nbsp;Delabeling (Jelly Removal)</span>';
				?>
			</tr>
			<tr>
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('pre_wash', 'YES', is_checked($sf_params->get('pre_wash'))) . '&nbsp;&nbsp;Pre-Wash</span>';
				?>
				<td colspan="2" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('loading', 'YES', is_checked($sf_params->get('loading'))) . '&nbsp;&nbsp;Loading</span>';
				?>
			</tr>			
			<tr>
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('machine_wash', 'YES', is_checked($sf_params->get('machine_wash'))) . '&nbsp;&nbsp;Machine Wash</span>';
				?>
				<td colspan="2" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('unloading', 'YES', is_checked($sf_params->get('unloading'))) . '&nbsp;&nbsp;Unloading</span>';
				?>
			</tr>			
			<tr>
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('inprocess_visual_inspection', 'YES', is_checked($sf_params->get('inprocess_visual_inspection'))) . '&nbsp;&nbsp;In-Process Inspection</span>';
				?>
				<td colspan="2" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('lpc', 'YES', is_checked($sf_params->get('lpc'))) . '&nbsp;&nbsp;LPC</span>';
				?>
			</tr>			
			<tr>
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('ic', 'YES', is_checked($sf_params->get('ic'))) . '&nbsp;&nbsp;IC</span>';
				?>
				<td colspan="2" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('nvr', 'YES', is_checked($sf_params->get('nvr'))) . '&nbsp;&nbsp;NVR</span>';
				?>
			</tr>
			<tr>
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('qa_sample_inspection', 'YES', is_checked($sf_params->get('qa_sample_inspection'))) . '&nbsp;&nbsp;QA Sample Inspection</span>';
				?>
				<td colspan="2" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('packing', 'YES', is_checked($sf_params->get('packing'))) . '&nbsp;&nbsp;Packing</span>';
				?>
			</tr>
			<tr>
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('purging_machine', 'YES', is_checked($sf_params->get('purging_machine'))) . '&nbsp;&nbsp;Purging Washing Machine</span>';
				?>
				<td colspan="2" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('visual_inspection', 'YES', is_checked($sf_params->get('visual_inspection'))) . '&nbsp;&nbsp;Visual Mechanical Inspection</span>';
				?>
			</tr>
					
			<tr>
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('pharmag_washer', 'YES', is_checked($sf_params->get('pharmag_washer'))) . '&nbsp;&nbsp;Operate Nano2 Pharmag Washer</span>';
				?>
				<td colspan="2" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('pva_vmi', 'YES', is_checked($sf_params->get('pva_vmi'))) . '&nbsp;&nbsp;PVA / VMI</span>';
				?>
			</tr>		
					
			<tr>
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('pre_wash_loading', 'YES', is_checked($sf_params->get('pre_wash_loading'))) . '&nbsp;&nbsp;Operate Pre-Wash Tank Loading</span>';
				?>
				<td colspan="2" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('pre_wash_unloading', 'YES', is_checked($sf_params->get('pre_wash_unloading'))) . '&nbsp;&nbsp;Operate Pre-Wash Tank Unloading</span>';
				?>
			</tr>	
			
			<tr>
				<td  class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap></td>
				<td width="200" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('soaking_loading', 'YES', is_checked($sf_params->get('soaking_loading'))) . '&nbsp;&nbsp;Operate Soaking Tank Loading</span>';
				?>
				<td colspan="2" class="FORMcell-right" width="10" nowrap><?php
				echo '<span class="radioButtonText">' .checkbox_tag('soaking_unloading', 'YES', is_checked($sf_params->get('soaking_unloading'))) . '&nbsp;&nbsp;Operate Soaking Tank Unloading</span>';
				?>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>REMARKS</td>
				<td colspan="3" class="FORMcell-right" nowrap>
				<?php
				echo HTMLForm::Error('remarks');
				echo textarea_tag('remarks', $sf_params->get('remarks'), 'size=75x6')
				?></td>
			</tr>				
			<tr>
				<td class="FORMcell-right" nowrap>
				<td class="alignCenter FORMcell-right" nowrap></td>
				<td class="FORMcell-right" nowrap><input type="submit" name="save"
					value=" Save Info " class="submit-button"></td>
				<td colspan="3" class="FORMcell-right" nowrap></td>
			</tr>
		</table>
	
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>
		<div class="grid-toolbar-right alignRight"><?php 
		echo '<b>';
		echo 'Record Sheet:</b> #062';
		echo '<br>';
		echo '<b>ISO Refs:</b>  WI030rev001   WI042rev002   WI250rev004';
		?></div>
		</td>
	</tr>
</table>
</div>
</form>

<?php
function is_checked($msg)
{
//    var_dump($msg);
//    exit();
    $chk = false;
    if (strtoupper($msg) == 'YES'){
        $chk = true;
    }
    return $chk;
}
?>

