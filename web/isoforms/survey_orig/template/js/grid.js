
function checkGridSelection()
{
	// alert('start');

	var	form = document.forms["FORMgrid"];
	if(!form) {
		alert('Form object not found.');
		return false;
	}
	return checkGridSelectionEngine(form, 'FORMselectID[]');

}
function checkGridSelection2(formName) {
	var	form = document.forms[formName];
	if(!form) {
		alert('Form object not found.');
		return false;
	}
	return checkGridSelectionEngine(form, 'FORMselectID[]');
}

function checkGridSelectionEngine(formObj, selectVar) {
	var form = formObj;
	var length = form.length;
	var checkedCount = 0;
	for(var i = 0; i < length; i++) {
		
		if(form[i].name == selectVar) {
			
			if(form[i].checked) {
				checkedCount++;
			}
		}
	}
	if(checkedCount < 1) {
		alert('Please indicate your selection.');
		return false;
	} else {
		return true;
	}
}

function selectAllSelection(formName, fieldName, select)
{
	var	form = document.forms[formName];
	if(!form) {
		alert('Form object not found.');
		return false;
	}

	var length = form.length;
	var selectVar = fieldName;
	for(var i = 0; i < length; i++) {		
		if(form[i].name == selectVar) {			
			form[i].checked = select;
		}
	}

	return true;
}

function selectAllGridSelectionEngine(formName, selectVar, select)
{
	var	form = document.forms[formName];
	if(!form) {
		alert('Form object not found.');
		return false;
	}	

	var rowIdentifier = 'gridRow_';
	var checkboxIdentifier = 'gridCheckBox_';
	var id;
	var rowID;
	var checkboxID;
	var checkbox;

	var rows = document.getElementsByTagName('tr');
	if(rows.length > 0) {
		for(var i = 0; i < rows.length; i++) {
			if(rows[i].id.indexOf(rowIdentifier) > -1 ) {
				
				id = rows[i].id.substring(rowIdentifier.length, rows[i].id.length);
				rowID = rowIdentifier + id;
				checkboxID = checkboxIdentifier + id;
				checkbox = document.getElementById(checkboxID);				
				if(checkbox) {

					// select all?
					if(select && !checkbox.checked) {
						rowClicked(rowID, checkboxID);
					}
					// select none?					
					else if(!select && checkbox.checked) {
						rowClicked(rowID, checkboxID);						
					}
				} else {
					alert(checkboxID + ' not found.');
				}
			}
		}
	}
	return false;
}
function selectAllGridSelection(select)
{
	return selectAllGridSelectionEngine('FORMgrid', 'FORMselectID[]', select);
}


function rowHovered(rowID) {
	var obj = document.getElementById(rowID);
	if(obj) {
		hover(obj);
	} // else alert('Object not found.');
}
function rowUnhovered(rowID) {
	var obj = document.getElementById(rowID);
	if(obj) {
		unhover(obj);
	} // else alert('Object not found.');
}

function rowSelected(rowID, checkBoxID) {
	var obj = document.getElementById(rowID);
	var checkbox = document.getElementById(checkBoxID);
	if(obj) {
		if(obj.className.indexOf(' clicked') > -1) {
			if(checkbox) checkbox.checked = true;
		} else if(obj.className.indexOf(' unclicked') > -1) {
			obj.className = obj.className.replace(/unclicked/, 'clicked');
			if(checkbox) checkbox.checked = true;
		} else {
			obj.className += ' clicked';
			if(checkbox) checkbox.checked = true;
		}
	}
}

function rowClicked(rowID, checkBoxID) {
	var obj = document.getElementById(rowID);
	var checkbox = document.getElementById(checkBoxID);

	if(obj) {
		if(obj.className.indexOf(' clicked') > -1) {
			obj.className = obj.className.replace(/clicked/, 'unclicked');
			if(checkbox) checkbox.checked = false;
		} else if(obj.className.indexOf(' unclicked') > -1) {
			obj.className = obj.className.replace(/unclicked/, 'clicked');
			if(checkbox) checkbox.checked = true;
		} else {
			obj.className += ' clicked';	
			if(checkbox) checkbox.checked = true;
		}
	}
}

function hover(obj) {
	// alert(obj.className);
	if(obj) {
		if(obj.className.indexOf(' unhover') > -1) {
			obj.className = obj.className.replace(/unhover/, 'hover');
		} else {
			obj.className += ' hover';
		}
	}
}
function unhover(obj) {
	// alert(obj.className);
	if(obj) {
		if(obj.className.indexOf(' hover') > -1) {
			obj.className = obj.className.replace(/hover/, 'unhover');
		} else {
			obj.className += ' unhover';
		}
	}
}

