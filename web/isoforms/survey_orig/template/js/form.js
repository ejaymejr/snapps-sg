
function jumpToProjectPage(selectID)
{	
	box = document.getElementById(selectID);
	destination = box.options[box.selectedIndex].value;
	if (destination && destination != '') window.location = destination;
}


function ccTypeChanged()
{
	var modeObj = document.getElementById('formCCType');
	if (!modeObj) {
		alert('Could not find Type');
		return false;
	}
	tmpObj = document.getElementById('formCCTypeOther');
	
	var type = modeObj[modeObj.selectedIndex].value;

	if (type == 'Other') {
		tmpObj.style.display = '';				
	} else  {
		tmpObj.style.display = 'none';				
	} 
	
	return false;
}


function paymentModeChanged()
{
	var modeObj = document.getElementById('formPaymentMode');
	if (!modeObj) {
		alert('Could not find Mode');
		return false;
	}
	
	var mode = modeObj[modeObj.selectedIndex].value;
	
	var tmpObj;
	if (mode == 'cash') {
		tmpObj = document.getElementById('DIVpaymentModeOther');
		tmpObj.style.display = 'none';
		
		tmpObj = document.getElementById('DIVpaymentModeDetailCheque');
		tmpObj.style.display = 'none';
		
		tmpObj = document.getElementById('DIVpaymentModeDetailsCreditCard');
		tmpObj.style.display = 'none';		
				
	} else if (mode == 'cheque') {
		tmpObj = document.getElementById('DIVpaymentModeOther');
		tmpObj.style.display = 'none';
		
		tmpObj = document.getElementById('DIVpaymentModeDetailCheque');
		tmpObj.style.display = '';
		
		tmpObj = document.getElementById('DIVpaymentModeDetailsCreditCard');
		tmpObj.style.display = 'none';	
	
	} else if (mode == 'credit card') {
		tmpObj = document.getElementById('DIVpaymentModeOther');
		tmpObj.style.display = 'none';
		
		tmpObj = document.getElementById('DIVpaymentModeDetailCheque');
		tmpObj.style.display = 'none';
		
		tmpObj = document.getElementById('DIVpaymentModeDetailsCreditCard');
		tmpObj.style.display = '';	
		
		ccTypeChanged();
		
	} else {
		tmpObj = document.getElementById('DIVpaymentModeOther');
		tmpObj.style.display = '';
		
		tmpObj = document.getElementById('DIVpaymentModeDetailCheque');
		tmpObj.style.display = 'none';
		
		tmpObj = document.getElementById('DIVpaymentModeDetailsCreditCard');
		tmpObj.style.display = 'none';	
	
	} 
}


function closeWindowConfirm()
{
	var c = confirm('Sure to close this window?');	
	if (c) {
		window.close();
	}	
	return false;
}


function openEmailWindow(projectID, stage)
{
	var emailURL = '';
	
	if (stage == 'intro') {
		emailURL = 'project_intro_email.php';
		
	} else if (stage == 'receipt') {
		emailURL = 'project_receipt_email.php';
		
	}  else if (stage == 'quotation') {
		emailURL = 'project_quote_email.php';
		
	}  else if (stage == 'invoice') {
		emailURL = 'project_invoice_email.php';
		
	}  else if (stage == 'cancellation') {
		emailURL = 'project_cancel_email.php';
		
	} else {
		emailURL = 'project_irrc_email.php';
	}
	
	emailURL += '?id=' + projectID;
	openWindow(emailURL, 'emailWindow', ' width=800,height=600,left=0,top=0,scrollbars=1,resizable=1 ');
	
	return false;

}

function toggleQuickEmail(fieldID)
{
	// alert(fieldID);
	
	var list = new Array(5);
	list[0] = 'send-email-intro';
	list[1] = 'send-email-receipt';
	list[2] = 'send-email-quotation';
	list[3] = 'send-email-invoice';
	list[4] = 'send-email-cancellation';
	
	var obj = document.getElementById(fieldID);
	if(!obj) {
		alert('Object ' + fieldID + ' not found.');
		return false;
	} else {
		for (i = 0; i < list.length; i++) {
			
			tmpID = list[i];
			obj = document.getElementById(tmpID);
			if (tmpID != fieldID) {
				obj.className = 'quick-send-email-hidden';		
			} else {
				if(obj.className.indexOf('quick-send-email-hidden') > -1) {
					obj.className = 'quick-send-email';	
				}
				else {
					obj.className = 'quick-send-email-hidden';	
				}
			}
		}
	}	
	
	return false;
}

function printButtonClicked(warning, printURL)
{
	var c = true;
	if (warning != '') {
		c = confirm(warning);
	}
	
	if (c) {
		openWindow(printURL, 'printWindow', ' width=800,height=600,left=0,top=0,resizable=1 ');
	}
	
	return false;
}


function textfieldFocus(fieldID)
{
	var obj = document.getElementById(fieldID);
	if(!obj) {
		alert('Object ' + fieldID + ' not found.');
		return false;
	} else {
		changeObjectBackground(fieldID, '#FFFFFF');
	}
}

function textfieldBlur(fieldID)
{
	var obj = document.getElementById(fieldID);
	if(!obj) {
		alert('Object ' + fieldID + ' not found.');
		return false;
	} else {
		changeObjectBackground(fieldID, '#ebeff9');
	}
}

function textfieldDisabled(fieldID)
{
	var obj = document.getElementById(fieldID);
	if(!obj) {
		alert('Object ' + fieldID + ' not found.');
		return false;
	} else {
		changeObjectBackground(fieldID, '#999999');
	}
}

function usernamefieldFocus(fieldID)
{
	var obj = document.getElementById(fieldID);
	if(!obj) {
		alert('Object ' + fieldID + ' not found.');
		return false;
	} else {
		if(obj.value == 'username') obj.value = '';
		textfieldFocus(fieldID);
	}
}
function usernamefieldBlur(fieldID)
{
	var obj = document.getElementById(fieldID);
	if(!obj) {
		alert('Object ' + fieldID + ' not found.');
		return false;
	} else {
		if(obj.value == '') {
			obj.value = 'username';
		}
		textfieldBlur(fieldID);
	}
}


function keywordfieldFocus(fieldID)
{
	var obj = document.getElementById(fieldID);
	if(!obj) {
		alert('Object ' + fieldID + ' not found.');
		return false;
	} else {
		if(obj.value == 'keyword') obj.value = '';
		textfieldFocus(fieldID);
	}
}
function keywordfieldBlur(fieldID)
{
	var obj = document.getElementById(fieldID);
	if(!obj) {
		alert('Object ' + fieldID + ' not found.');
		return false;
	} else {
		if(obj.value == '') {
			obj.value = 'keyword';
		}
		textfieldBlur(fieldID);
	}
}



function passwordfieldFocus(fieldID)
{
	var obj = document.getElementById(fieldID);
	if(!obj) {
		alert('Object ' + fieldID + ' not found.');
		return false;
	} else {
		obj.value = '';
		textfieldFocus(fieldID);
	}
}
function passwordfieldBlur(fieldID)
{
	var obj = document.getElementById(fieldID);
	if(!obj) {
		alert('Object ' + fieldID + ' not found.');
		return false;
	} else {
		if(obj.value == '') {
			obj.value = 'password';
		}
		textfieldBlur(fieldID);
	}
}




function changeObjectBackground(fieldID, color) {
	
	var obj = document.getElementById(fieldID);
	if(!obj) {
		alert('Object ' + fieldID + ' not found.');
		return false;
	} else {
		obj.style.backgroundColor = color;
	}
}


function showHideElement(elementID)
{
	var obj = document.getElementById(elementID);
	if(!obj) {
		alert('Object ' + elementID + ' not found.');
		return false;
	} else {
		
		display = obj.style.display;
		if(display == 'none') obj.style.display = '';
		else obj.style.display = 'none';
	}
}

function showElement(elementID)
{
	var obj = document.getElementById(elementID);
	if(!obj) {
		alert('Object ' + elementID + ' not found.');
		return false;
	} else {
		
		display = obj.style.display;
		obj.style.display = '';
	}
}
function hideElement(elementID)
{
	var obj = document.getElementById(elementID);
	if(!obj) {
		alert('Object ' + elementID + ' not found.');
		return false;
	} else {
		
		display = obj.style.display;
		obj.style.display = 'none';
	}
}


function FORMcancelled(returnURL)
{
	var sure = confirm('Sure to cancel?');
	if (sure)
	{
		window.location = returnURL;
		return false;
	} else return false;
}

function closeProjectConfirm(returnURL)
{
	var sure = confirm('Sure to close this project?');
	if (sure)
	{
		window.location = returnURL;
		return false;
	} else return false;
}





function userSearchClearMemoryClicked(returnURL)
{
	var sure = confirm('Sure to clear search memory?');
	if (sure)
	{
		window.location = returnURL;
		return false;
	} else return false;
}
function FORMsearchUserSubmitted()
{
	// alert('Javascript checking is not yet developed. PHP checking is ready, though.');
	return true;
}

function FORMaddUserSubmitted()
{
	// alert('Javascript checking is not yet developed. PHP checking is ready, though.');
	return true;
}
function FORMeditUserSubmitted()
{
	// alert('Javascript checking is not yet developed. PHP checking is ready, though.');
	return true;
}
function FORMeditProfileSubmitted()
{
	// alert('Javascript checking is not yet developed. PHP checking is ready, though.');
	return true;
}




function FORMaddTypeSubmitted()
{
	// alert('Javascript checking is not yet developed. PHP checking is ready, though.');
	return true;
}
function FORMeditTypeSubmitted()
{
	// alert('Javascript checking is not yet developed. PHP checking is ready, though.');
	return true;
}

function FORMaddSubscriptionSubmitted()
{
	// alert('Javascript checking is not yet developed. PHP checking is ready, though.');
	return true;
}
function FORMeditSubscriptionSubmitted()
{
	// alert('Javascript checking is not yet developed. PHP checking is ready, though.');
	return true;
}


function FORMaddTransactionSubmitted()
{
	// alert('Javascript checking is not yet developed. PHP checking is ready, though.');
	return true;
}
function FORMeditTransactionSubmitted()
{
	// alert('Javascript checking is not yet developed. PHP checking is ready, though.');
	return true;
}
function FORMaddPickSubmitted()
{
	// alert('Javascript checking is not yet developed. PHP checking is ready, though.');
	return true;
}
function FORMeditPickSubmitted()
{
	// alert('Javascript checking is not yet developed. PHP checking is ready, though.');
	return true;
}
function FORMsendTestSubmitted()
{
	// alert('Javascript checking is not yet developed. PHP checking is ready, though.');
	return true;
}



function limitPickContentLength(formobj, e, counterID)
{
    counterDIV = document.getElementById(counterID);
    size = document.getElementById('FORMpick_maxlength').value;
	// alert('inside limitMessageLength(): ' + size);
    returnvalue = true;

    if(size > 1) {
    	
        if (!e.which && formobj.value.length > size) { //IE
            alert('Maximum length reached ('+ size +')');
            formobj.value = formobj.value.substring(0, size);
            returnvalue = false;
        }
        else if (e.which && e.which!=8 && formobj.value.length > size) { //NS4, NS6+ (allow backspace key)
            alert('Maximum length reached ('+ size +')');
            formobj.value = formobj.value.substring(0, size);
            returnvalue = false;
        }
    }
    
   	counterDIV.innerHTML = formobj.value.length;
    return returnvalue;
}



function openWindow(url, winname, extra) 
{
    var iswin = null;
    iswin = window.open(url, winname, extra);
    if(iswin.focus) {
		iswin.focus();
	}
}


function isEmpty(text)
{
	text = trim(text);

	if(text == '') return true;
	else return false;
}

function rtrim(text)
{
	var stop = 0;
	var text = text;
	var length = text.length;

	while (!stop && length!=0 ) {

		if(text.substring( (length-1), length ) == ' ') {
			text = text.substring(0, length-1);
		}
		else stop = 1;

		length = text.length;
	}
	return text;
}

function ltrim(text)
{
	var stop = 0;
	var text = text;
	var length = text.length;

	while (!stop && length!=0 ) {

		if(text.substring( 0, 1 ) == ' ') {
			text = text.substring(1, length);
		}
		else stop = 1;

		length = text.length;
	}
	return text;
}

function trim(text)
{
	text = ltrim(text);
	text = rtrim(text);

	return text;
}

