<?php if ($sf_user->isAuthenticated()): ?>
<?php 
	//$menus = sfConfig::get('app_menu_items');
	$menus = array(
		 'GARMENT', 'CASSETTE', 'GENERAL', 'TRAINING', 'MACHINE RECIPE',  'MAINTENANCE'
	);  
?>

<?php if (is_array($menus) && sizeof($menus) > 0) : ?>
<?php
//$url = sfConfig::get('http_intranet').'sg/qualityRecord/';
$url = sfConfig::get('http_intranet').substr(url_for(''), 1 );
sfLoader::loadHelpers(array('Url', 'Text','Javascript'));
echo javascript_tag('

anylinkmenu.init("menuanchorclass")

var url = "'.$url.'";

var menu0={divclass:"anylinkmenu", inlinestyle:"", linktarget:""} //First menu variable. Make sure "anylinkmenu1" is a unique name!
menu0.items=[
	[":: Helmke Drum", url + "micronclean/helmkeSearch", "Form: 008"],
	[":: Garment Bacteria Count", url + "micronclean/garmentBacteriaSearch", "Form: 063"],
	[":: Air Particle Count", url + "micronclean/airSearch", "Form: 007"],
	//[":: Water Particle Count", url + "micronclean/waterSearch", "Form: 004"],
	[":: Surface Resistivity", url + "micronclean/surfaceSearch", "Form: 140"],
	[":: Garment IC Test", url + "micronclean/icSearch", "Form: 015"],
	[":: BKL Garment Repair", url + "home/redirectToGarmentRepair" ],
	[":: NVR FTIR", url + "micronclean/nvrSearch", "Form: 014"],
	[":: Veritas", url + "micronclean/veritasSearch", "Form: 009"]
]

var menu1={divclass:"anylinkmenu", inlinestyle:"", linktarget:""} //First menu variable. Make sure "anylinkmenu1" is a unique name!
menu1.items=[
	["Cassette Quality Record ", url + "home/redirectToCassette" ]
]


var menu2={divclass:"anylinkmenu", inlinestyle:"", linktarget:""} //First menu variable. Make sure "anylinkmenu1" is a unique name!
menu2.items=[
	[":: CA/PA", url + "capa/capaSearch", "Form: 056"],
	[":: Supplier CA/PA", url + "capa/supplierCapaSearch", "Form: 056"],
	[":: Di Water Plant", url + "diwater", "Form: 029"],
	[":: Repair Report", url + "repairReport", "Form: 027"],
	[":: Customer Management", url + "custComplaint", "Form: 054"],
	[":: Contract Management", url + "contractMgt", "Form: 103"],
	[":: Non-Conformance", url + "conformance", "Form: 048 / 049"],
	[":: CR Dryer Temp", url + "dryerParticle", "Form: 077"],
	[":: Plastic Bag", url + "plasticBag", "Form: 069"],
	[":: Evaluation Report", url + "evaluation", "Form: 030"],
	[":: Interal Audit", url + "internalAudit", "Form: 037"],
	[":: Management Review", url + "mgtReview", "Form: 010"],
	//[":: DI Water Monitoring @XXXV", url + "home/redirectToDiPlant35"],
	//[":: Air @XXXV", url + "home/redirectToAir35"],
	//[":: DI Water Monitoring @XXIX", url + "home/redirectToNanoclean2DiPlant"],
	//[":: Air @XXIX", url + "home/redirectToNanoclean2Air"],
	[":: Showa PVA Report", url + "home/redirectToShowa"],
	//[":: Cleanroom Bacteria Cnt", url + "micronclean/airBacteriaSearch", "Form: 006"],	
	[":: LPC Calibration", url + "micronclean/lpcSearch", "Form: 115"],
	[":: IC Calibration", url + "micronclean/icCalibrationSearch", "Form: "],
	[":: Ultrasonic Gen. Calibration", url + "micronclean/ultrasonicSearch", "Form: "],
	[":: Washing Machine Load", url + "micronclean/washingMachineLoadSearch", "Form: 78"],
	[":: Washing Machine Temp", url + "micronclean/washingMachineTempSearch", "Form: 79"],
	[":: Washing Machine Dose", url + "micronclean/washingMachineDoseCalibrationSearch", "Form: 87"]
			
]

var menu3={divclass:"anylinkmenu", inlinestyle:"", linktarget:""} //First menu variable. Make sure "anylinkmenu1" is a unique name!
menu3.items=[
	[":: External Training List", url + "training/listTrainingSearch"],
	[":: Employee Ext. Training", url + "training/externalTrainingSearch", "Form: 062"],
	[":: Micronclean Internal", url + "training/mcsTrainingSearch", "Form: 062"],
	[":: Acro/Nano Internal", url + "training/acroNanoTrainingSearch", "Form: 093"],
	[":: Training Plan", url + "home/redirectToTrainingPlan" ],
	[":: Employee Satisfactory Survey", "http://app.microncleansingapore.com/micronclean/survey/satisfactionIndex" ],
	[":: Satisfactory Survey Summary", "http://app.microncleansingapore.com/micronclean/survey/satisfactionIndex/surveySummary" ]
]

var menu4={divclass:"anylinkmenu", inlinestyle:"", linktarget:""} //First menu variable. Make sure "anylinkmenu1" is a unique name!
menu4.items=[
	[":: Daily PMS", url + "machine/daily1232Search", "Form: 122A"],
	[":: Weekly PMS", url + "machine/weekly1232Search", "Form: 122B"],
	[":: Daily PMS 6252", url + "machine/daily6252Search", "Form: 122A"],
	[":: Weekly PMS 6252", url + "machine/weekly6252Search", "Form: 122B"],
	[":: Monthly PMS", url + "machine/monthly1232Search", "Form: 122A"],
	[":: Quarterly PMS", url + "machine/quarterly1232Search", "Form: 122D"],
	[":: Machine Parameter", url + "machine/machineParameterSearch", "Form: 118B"],
	[":: Dosing Calibration", url + "machine/doseCalibrationSearch", "Form: 082A"],
	[":: Process/Repair Log", url + "home/redirectToRepairLog", "Form: 129"]
	
]

var menu5={divclass:"anylinkmenu", inlinestyle:"", linktarget:""} //First menu variable. Make sure "anylinkmenu1" is a unique name!
menu5.items=[
	[":: Janitorial",  url   + "home/redirectToJanitor" , "Form: 005A"],
	[":: Pest Control",  url + "home/redirectToPest", "Form: 123"],
	[":: Power Management",  url + "home/redirectToPower", ""],
	[":: Cleanroom Bacteria Test",  url + "micronclean/bacteriaTestSearch", "Form: 006"],
	[":: Washer Preventive Maint",  url + "machine/washerPmSearch", "Form: 66"],
	[":: Dryer Preventive Maint",  url + "machine/dryerPmSearch", "Form: 74"],
	[":: Heat Sealer Maint",  url + "machine/heatSealerPmSearch", "Form: 76"]
		
]




var anylinkmenu2={divclass:"anylinkmenu", inlinestyle:"width:150px; background:#FDD271", linktarget:"_new"} //Second menu variable. Same precaution.
anylinkmenu2.items=[
	["CNN", "http://www.cnn.com/"],
	["MSNBC", "http://www.msnbc.com/"],
	["Google", "http://www.google.com/"],
	["BBC News", "http://news.bbc.co.uk"] //no comma following last entry!
]


');

 

?>

<ul>
<?php foreach ($menus as $km=>$menu) : ?>
<?php 
//	echo var_dump($menu);
//	echo '-----------------<br>'; 
?>
<?php include_partial('global/menu_item', array('menu' => $menu, 'element'=> $km)); ?>
<?php endforeach; ?>
</ul>
<?php endif ?>
<?php endif ?>

<?php 
function MenuPhpToJavascript($menuname, $submenu)
{
	$mess = '
		var '.$menuname.'={divclass:"anylinkmenu", inlinestyle:"", linktarget:""} //First menu variable. Make sure "anylinkmenu1" is a unique name!
		'.$menuname.'.items=[';
	foreach($submenu as $sName=>$url) {
	$mess += '
			["'.$sName.'", "'.$url.'"],
    ';
	}
	$mess += '	
		]	
	';
	return $mess;
}
?>