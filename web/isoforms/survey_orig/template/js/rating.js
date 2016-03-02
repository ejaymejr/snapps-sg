
function checkSurvey(total)
{
	var OK = false;
	var totalZero = 0;
	var obj = null;

	var ratingPre = 'FORMrating';
	for (var i = 1; i <= total; i++)
	{
		var ratingID = ratingPre + '_' + i;
		obj = window.document.getElementById(ratingID);
		// alert(ratingID);
		// alert(obj);
		if (!obj) {
			// alert('Where is ' + ratingID);
		} else if (obj.value == '0')
		{
			totalZero++;
		}
	}

	if (totalZero)
	{
		alert('Please indicate your rating for each criteria.');
		OK = false;
	} else OK = true;

	return OK;
}

function rateThis(rowID, rating)
{
	var selectedID = rowID + '_' + rating;
	// alert(selectedID);
	for (var i = 1; i <= 5; i++)
	{
		var curID = rowID + '_' + i;
		if (curID == selectedID)
		{
			starRate(curID);
		} else {
			starUnrate(curID);
		}
	}

}

function starRate(rowID) {
	// alert(rowID);
	var obj = document.getElementById(rowID);
	if(obj) {
		rate(obj);
	} else alert('Object not found.');
}
function starUnrate(rowID) {
	// alert(rowID);
	var obj = document.getElementById(rowID);
	if(obj) {
		unrate(obj);
	} else alert('Object not found.');
}


function rate(obj) {
	// alert(obj.className);
	if(obj) {
		if(obj.className.indexOf(' unrated') > -1) {
			obj.className = obj.className.replace(/unrated/, 'rated');
		} else {
			obj.className += ' rated';
		}
	}
}
function unrate(obj) {
	// alert(obj.className);
	if(obj) {
		if(obj.className.indexOf(' rated') > -1) {
			obj.className = obj.className.replace(/rated/, 'unrated');
		} else {
			obj.className += ' unrated';
		}
	}
}

