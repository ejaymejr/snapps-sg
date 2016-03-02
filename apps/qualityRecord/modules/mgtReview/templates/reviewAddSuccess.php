<?php use_helper('Validation', 'Javascript') ?>
<?php
$mList = array();
$pList = array();
$aList = array();

$mList = $memList? $memList : array();
$pList = $preList? $preList : array();
$aList = $absList? $absList : array();

$list  = ManagementReviewUserPeer::getMembersList('label');
$cpList  = array_merge(array(''=>' -SELECT CHAIRPERSON-'), $list);
$secList = array_merge(array(''=>' -SELECT SECRETARY-'), $list);
$revList = array_merge(array(''=>' -SELECT REVIEW BY-'), $list);
$verList = array_merge(array(''=>' -SELECT VERIFY-'), $list);
$cpList1  = ManagementReviewMembersPeer::getMembersList();
$cpList1 = $list;
$venueList = ManagementReviewVenueAttrPeer::GetVenueList();
$departmentList     = array(''=>' -SELECT DEPARTMENT- ', 'ACRO SOLUTION'=>'ACRO SOLUTION', 'MICRONCLEAN'=>'MICRONCLEAN', 'NANOCLEAN'=>'NANOCLEAN', 'TC KHOO'=>'TC KHOO');

$agendaList = array(
		'Quality objective performance',
		'Internal/External audit results',
		'Customer feedback',
		'Process performance and product conformity',
		'Status of preventive and corrective actions',
		'Recommendation for improvement',
		'Resources requirement',
		'Results of Audits (e.g., internal/customer/external)',
		'Customer Feedback/complaints/compliments',
		'Process/supplier performance and product',
		'Results of participation and consultation',
		'Relevant Communication from external interested parties including complaints',
		'QEHS performance of the organization',
		'Extent of which objectives have been met',
		'Status of incident investigations, corrective actions and preventive actions',
		'Follow-up actions from previous management reviews',
		'Changing circumstances including developments in legal and other requirements',
		'Results of evaluation of compliance with legal and other requirements which company subscribes',
		'Recommendations for imprvements on QEHS',
		'Possible changes to policy, objectives and other requirements',
		'Judgment of the QEHS adequacy, suitability and effectiveness',
		'Improvement of the QEHS effectiveness and its process',
		'Improvement of product related to customer/legal requirements',
		'Resource / time frame needs', 
		'Business benefits',
		'Any Other Points discussed on QEHS Matters'
)
?>

<form name="FORMadd" id="IDFORMadd"
	action="<?php echo url_for('mgtReview/reviewAdd'). '?id=' . $sf_params->get('id');?>"
	method="post">
<div align="center">
<table width="90%" class="FORMtable" border="0" cellpadding="1"
	cellspacing="0">
	<tr>
		<td>
		<table width="100%" class="FORMtable" border="0" cellpadding="4"
			cellspacing="0">
			<tr>
				<td width="15%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>DATE</td>
				<td width="100" class="FORMcell-right" nowrap><?php
				echo HTMLForm::DrawDateInput('date', $sf_params->get('date', date('Y-m-d')), 'date', XIDX::next(), ' size="12" '); ?>
				</td>
				<td width="20%" class="FORMcell-left FORMlabel" nowrap>VENUE</td>
				<td width="100%" class="FORMcell-right" nowrap><?php
				echo select_tag('venue',
				options_for_select($venueList,
				$sf_params->get('venue') ) );
				?></td>
			</tr>

			<tr>
				<td width="15%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>CHAIR-PERSON</td>
				<td width="100" class="FORMcell-right" nowrap><?php
				echo select_tag('chair_person',
				options_for_select($cpList,
				$sf_params->get('chair_person') ) );
				?></td>
				<td width="20%" class="FORMcell-right" nowrap>&nbsp;</td>
				<td width="100%" class="FORMcell-right" nowrap>&nbsp;</td>
			</tr>
			<tr>
				<td class="FORMcell-right" nowrap></td>
				<td class="FORMcell-left FORMlabel" nowrap>AGENDA</td>
				<td colspan="2" class="FORMcell-right" nowrap><span
					class="radioButtonText">
					<?php 
						for($x=0; $x < 7; $x++ ):
							echo $x+1 . '. '. $agendaList[$x] . '<br>';
						endfor;
						
						?>
					</span></td>
				<td colspan="2" class="FORMcell- right" nowrap><span
					class="radioButtonText">
					<h3>Effective from April 2015 Only</h3><br>
					<?php for($x=7; $x < sizeof($agendaList); $x++ ):
							echo $x+1 . '. '. $agendaList[$x] . '<br>';
						endfor;
						?>
					</span></td>
			</tr>
		</table>
		<br>
		<!-- 
		<table width="100%" class="FORMtable" border="0" cellpadding="4"
			cellspacing="0">
			<tr>
				<td height="28" width="10%" class="FORMcell-right" nowrap>&nbsp;</td>
				<td bgcolor="#F2D25B" width="25%" class="survey-criteria alignCenter" nowrap>MEMBERS</td>
				<td bgcolor="#F2D25B" width="25%" class="survey-criteria alignCenter" nowrap>PRESENTEES</td>
				<td bgcolor="#F2D25B" width="25%" class="survey-criteria alignCenter" nowrap>ABSENTEES</td>
				<td width="100%" class="FORMcell-right" nowrap>&nbsp;</td>
			</tr>
			<tr>
				<td width="10%" class="FORMcell-right" nowrap>&nbsp;</td>
				<td width="25%" class="FORMcell-Center FORMlabel" nowrap><?php
				    foreach($cpList1 as $ke=>$name){
				        $mem = 'mem_'.$name;
				        echo '<span class="radioButtonText">' .checkbox_tag($mem, $name, in_array($name, $mList)) . '&nbsp;&nbsp;'.$name.'</span><br>';
				    }
				?></td>
				<td width="25%" class="FORMcell-Center FORMlabel" nowrap><?php
					foreach($cpList1 as $ke=>$name){
				        $mem = 'pre_'.$name;
				        echo '<span class="radioButtonText">' .checkbox_tag($mem, $name, in_array($name, $pList)) . '&nbsp;&nbsp;'.$name.'</span><br>';
				    }				
				?></td>
				<td width="25%" class="FORMcell-Center FORMlabel" nowrap><?php
					foreach($cpList1 as $ke=>$name){
				        $mem = 'abs_'.$name;
				        echo '<span class="radioButtonText">' .checkbox_tag($mem, $name, in_array($name, $aList)) . '&nbsp;&nbsp;'.$name.'</span><br>';
				    }				
				?></td>
				<td width="100%" class="FORMcell-right" nowrap>&nbsp;</td>
			</tr>
			<tr><td>&nbsp;</td></tr>
			<tr><td>&nbsp;</td></tr>
			<tr>
				<td height="28" width="10%" class="FORMcell-right" nowrap>&nbsp;</td>
				<td bgcolor="#F2D25B" width="25%" class="survey-criteria alignCenter" nowrap>DISCUSSION</td>
				<td bgcolor="#F2D25B" width="25%" class="survey-criteria alignCenter" nowrap>ACTION</td>
				<td bgcolor="#F2D25B" width="25%" class="survey-criteria alignCenter" nowrap>ACTION DATE</td>
				<td width="100%" class="FORMcell-right" nowrap>&nbsp;</td>
			</tr>			
			
			<tr>
				<td width="10%" class="FORMcell-right" nowrap>&nbsp;</td>
				<td width="25%" class="FORMcell-Center FORMlabel" nowrap><?php
                    echo textarea_tag('discussion', $sf_params->get('discussion'), 'size=33x15')		
				?></td>
				<td width="25%" class="FORMcell-Center FORMlabel" nowrap><?php
                    echo textarea_tag('prop_action', $sf_params->get('prop_action'), 'size=33x15')				
                ?></td>
				<td width="25%" class="FORMcell-Center FORMlabel" nowrap><?php
				    echo textarea_tag('action_date', $sf_params->get('action_date'), 'size=33x15')
				?></td>
				<td width="100%" class="FORMcell-right" nowrap>&nbsp;</td>
			</tr>			
		</table>
		<br>
		 -->
			
		<table id="discussionContainer" width="100%" class="FORMtable" border="0" cellpadding="4" cellspacing="0">
			<tr>
				<td height="28" width="10%" class="FORMcell-right" nowrap>&nbsp;</td>
				<td bgcolor="#F2D25B" width="25%" class="survey-criteria alignCenter" nowrap>DISCUSSION</td>
				<td bgcolor="#F2D25B" width="25%" class="survey-criteria alignCenter" nowrap>ACTION</td>
				<td bgcolor="#F2D25B" width="25%" class="survey-criteria alignCenter" nowrap>ACTION DATE</td>
				<td width="100%" class="FORMcell-right" nowrap>&nbsp;</td>
			</tr>			
			<tr id="discussionContainer_1" >
				<td height="28" width="10%" class="" nowrap>&nbsp;</td>
				<td class="FORMcell">
					<!-- <a href="javascript:void(0)" onclick="createDiscussion(); return false;">ADD DISCUSSSION</a>  -->
					<input id="addDiscussion" name="addDiscussion" type="button" class="submit-button" value="ADD DISCUSSSION" onclick="createDiscussion();"> 
				</td>
			</tr>
			<?php $count = 2 ; ?>

			<?php foreach ($mgtReviewDiscuss as $whatever ): ?>
			<tr id="discussionContainer_<?php echo $count ?>" >
				<td width="10%" class="FORMcell-right" >
				<?php 
					echo input_tag('discus_id_' . $count, $sf_params->get('discus_id_' . $count), 'size=5 type=hidden ' ); 
					echo input_tag('index_no_' . $count, $sf_params->get('index_no_' . $count), 'size=5 ' );
					echo '<br>'.$agendaList[$sf_params->get('index_no_' . $count) - 1]
				?>
				</td>
				<td width="25%" class="FORMcell-Center FORMlabel" nowrap><?php
                    echo textarea_tag('discussion_' . $count, $sf_params->get('discussion_' . $count), 'size=33x10')		
				?></td>
				<td width="25%" class="FORMcell-Center FORMlabel" nowrap><?php
                    echo textarea_tag('prop_action_' . $count, $sf_params->get('prop_action_' . $count), 'size=33x10')				
                ?></td>
				<td width="25%" class="FORMcell-Center FORMlabel" nowrap><?php
				    echo textarea_tag('action_date_' . $count, $sf_params->get('action_date_' . $count), 'size=33x10')
				?></td>
				<td width="100%" class="FORMcell-right" nowrap>&nbsp;</td>
			</tr>	
			<?php $count++; endforeach; ?>	
		</table>

		<br>
		<table width="100%" class="FORMtable" border="0" cellpadding="4" cellspacing="0">
			<tr>
				<td width="15%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>SECRETARY</td>
				<td width="100" class="FORMcell-right" nowrap><?php
				echo select_tag('secretary',
				options_for_select($secList,
				$sf_params->get('secretary') ) );
				?></td>
				<td width="20%" class="FORMcell-right" nowrap>&nbsp;</td>
				<td width="100%" class="FORMcell-right" nowrap>&nbsp;</td>
			</tr>
			<tr>
				<td width="15%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>REVIEW</td>
				<td width="100" class="FORMcell-right" nowrap><?php
				echo select_tag('review_by',
				options_for_select($revList,
				$sf_params->get('review_by') ) );
				?></td>
				<td width="20%" class="FORMcell-right" nowrap>&nbsp;</td>
				<td width="100%" class="FORMcell-right" nowrap>&nbsp;</td>
			</tr>		
					
			<tr>
				<td width="15%" class="FORMcell-right" nowrap></td>
				<td width="10" class="FORMcell-left FORMlabel" nowrap>VERIFY</td>
				<td width="100" class="FORMcell-right" nowrap><?php
				echo select_tag('verify_by',
				options_for_select($verList,
				$sf_params->get('verify_by') ) );
				?></td>
				<td width="20%" class="FORMcell-right" nowrap>&nbsp;</td>
				<td width="100%" class="FORMcell-right" nowrap>&nbsp;</td>
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
</table>
</div>
</form>

<div class="grid-toolbar-2">
<table>
	<tr>
		<td class="alignRight" nowrap>Record Sheet: #010</td>
	</tr>
	<tr>
		<td class="alignRight" nowrap><?php echo 'ISO Refs: MCS-QP-SYS-05' ?></td>
	</tr>
</table>
</div>

<script>

	var table = document.getElementById("discussionContainer");
	
	var totalRow = table.rows.length - 1;

	function createDiscussion(  )
	{
		//alert(totalRow);
		
	    var lastRow = document.getElementById('discussionContainer_' + totalRow ) ;

	    var newRow = document.createElement('TR');
	    
		switch(totalRow){
		case 1:
			label = '1. Quality objective performance ';
			break;
		case 2:
			label = '2. Internal/External audit results ';
			break;
		case 3:
			label = '3. Customer feedback';
			break;
		case 4:
			label = '4. Process performance and product conformity ';
			break;
		case 5:
			label = '5. Status of preventive and corrective actions ';
			break;
		case 6:
			label = '6. Recommendation for improvement ';
			break;
		case 7:
			label = '7. Resources requirement ';
			break;
		case 8:
			label = '8. Results of Audits (e.g., internal/customer/external) ';
			break;			
		case 9:
			label = '9. Customer Feedback/complaints/compliments ';
			break;			
		case 10:
			label = '10. Process/supplier performance and product ';
			break;			
		case 11:
			label = '11. Results of participation and consultation ';
			break;			
		case 12:
			label = '12. Relevant Communication from external interested parties including complaints ';
			break;			
		case 13:
			label = '13. QEHS performance of the organization ';
			break;			
		case 14:
			label = '14. Extent of which objectives have been met ';
			break;			
		case 15:
			label = '15. Status of incident investigations, corrective actions and preventive actions ';
			break;			
		case 16:
			label = '16. Follow-up actions from previous management reviews ';
			break;			
		case 17:
			label = '17. Changing circumstances including developments in legal and other requirements ';
			break;			
		case 18:
			label = '18. Results of Evaluation of compliance with legal and other requirements which company subscribes ';
			break;			
		case 19:
			label = '19. Recommendations for imprvements on QEHS ';
			break;			
		case 20:
			label = '20. Possible changes to policy, objectives and other requirements ';
			break;			
		case 21:
			label = '21. Judgment of the QEHS adequacy, suitability and effectiveness ';
			break;			
		case 22:
			label = '22. Improvement of the QEHS effectiveness and its process ';
			break;
		case 23:
			label = '23. Improvement of product related to customer/legal requirements ';
			break;
		case 24:
			label = '24. Resource / time frame needs ';
			break;
		case 25:
			label = '25. Business benefits ';
			break;
		case 26:
			label = '26. Any Other Points discussed on QEHS Matters ';
			break;
		default:
			label = 'none';
	}
		
	    totalRow++;
	    
	    newRow.id = 'discussionContainer_' + totalRow;    
	    
// 	    var td = document.createElement('TD');
// 	    td.className = "FORMcell-right";
// 	    newRow.appendChild(td);
//  	    var ta = document.createElement('TEXTAREA');
// // 	    ta.name = "discussion_index_no";
// // 	    ta.id   = "discussion_index_no";
//  	  	newRow.appendChild(ta);
		

		var td = document.createElement('TD');
		td.className = "FORMcell-right";
	    newRow.appendChild(td);
	    var ta = document.createElement('INPUT');
	    td.appendChild(ta);
	    ta.name = 'discus_id_' + totalRow;
	    ta.id = 'discus_id_' + totalRow;
	    ta.type = 'hidden';
	    ta.size = 5;

	    var index_no = document.createElement('INPUT');
	    td.appendChild(index_no);
	    index_no.name = 'index_no_' + (totalRow ) ;
	    index_no.id = 'index_no_' + (totalRow );
	    index_no.value = totalRow - 1;
	    index_no.size = 5;
	    
	    
	    var text = document.createTextNode(label);
	    
	    td.appendChild(text);

// 	    var file = document.createElement('INPUT');
// 	    file.type = 'file';
// 	    td.appendChild(file);
// 	    file.name = 'upload_' + totalRow;
// 	    file.onchange = function() { addUploadRow(); };
// 	    file.size = 50;
// 	    file.className = 'fixed';
	    
		//discussion
		var td = document.createElement('TD');
		td.className = "FORMcell-right";
	    newRow.appendChild(td);
	    var ta = document.createElement('TEXTAREA');
	    td.appendChild(ta);
	    ta.name = 'discussion_' + totalRow;
	    ta.cols = 33;
	    ta.rows = 10;
	    

	  	//proposed action
	  	var td = document.createElement('TD');
	  	td.className = "FORMcell-right";
	    newRow.appendChild(td);
	    var ta = document.createElement('TEXTAREA');
	    td.appendChild(ta);
	    ta.name = 'prop_action_' + totalRow;
	    ta.cols = 33;
	    ta.rows = 10;

	  	//action date
	  	var td = document.createElement('TD');
	  	td.className = "FORMcell-right";
	    newRow.appendChild(td);
	    var ta = document.createElement('TEXTAREA');
	    td.appendChild(ta);
	    ta.name = 'action_date_' + totalRow;
	    ta.cols = 33;
	    ta.rows = 10;



	    var td = document.createElement('TD');
	    td.className = "FORMcell-right";
	    td.appendChild(document.createTextNode(' '));
	    newRow.appendChild(td);

	    

	    //add a row to the rows collection and get a reference to the newly added row
	    lastRow.parentNode.insertBefore(newRow, lastRow.nextSibling);

	    
//  		var table = document.getElementById("discussionContainer");
//  		var id = table.rows.length + 1;
//  		var row = document.createElement('TR');
//  		row.id =  id; 
		
// 		var cell1 = row.insertCell(0);
// 		var cell2 = row.insertCell(1);
// 		var cell3 = row.insertCell(2);
// 		var cell4 = row.insertCell(3);
// 		var cell5 = row.insertCell(4);

// 		row.setAttribute("id", id);
// 		cell1.innerHTML = "NEW CELL1";
// 		cell2.innerHTML = '<textarea id="discussion_'+id+'" id="discussion_'+id+'" rows="15" cols="33">';
// 		cell3.innerHTML = '<textarea id="prop_action_'+id+'" id="prop_action_'+id+'" rows="15" cols="33">';
// 		cell4.innerHTML = '<textarea id="action_date_'+id+'" id="action_date_'+id+'" rows="15" cols="33">';
// 		cell5.innerHTML = "NEW CELL5";
//		alert('yes');
	}

	function makeid()
	{
	    var text = "";
	    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

	    for( var i=0; i < 5; i++ )
	        text += possible.charAt(Math.floor(Math.random() * possible.length));

	    return text;
	}
</script>

