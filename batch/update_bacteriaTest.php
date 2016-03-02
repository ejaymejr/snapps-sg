<?php
define('SF_ROOT_DIR',    realpath(dirname(__FILE__).'/../..'));
define('SF_APP',         'qualityRecord');
define('SF_ENVIRONMENT', 'prod');
define('SF_DEBUG',       false);


//require_once(SF_ROOT_DIR.DIRECTORY_SEPARATOR.'apps'.DIRECTORY_SEPARATOR.SF_APP.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'config.php');

$sf_symfony_lib_dir  = '/opt/php/lib/php/symfony';
$sf_symfony_data_dir = '/opt/php/lib/php/data/symfony';

// initialize database manager
$databaseManager = new sfDatabaseManager();
$databaseManager->initialize();

// date range
$fromDate = '2012-03-21';
$toDate = Date('Y-m-d');
$cleanroom = 'Micronclean';
$area = array('A', 'B');


// initialize database manager
$databaseManager = new sfDatabaseManager();
$databaseManager->initialize();

$cdate = DUFormat('Y-m-d 08:30:04', $fromDate);
$status = 0;
while($cdate <= $toDate):

	$bacteria = BacteriaTestPeer::GetDataByTransDate($cdate);
	
	if (! $bacteria):  //if no record
		if (DuFormat('D', $cdate) <> 'Sun'):  //not sunday
			switch($cleanroom):
				case 'Micronclean':
					// area
					foreach($area as $a):
						$bacteria = new BacteriaTest();
						$bacteria->setCleanroom($cleanroom);
						$bacteria->setArea($a);
						$bacteria->setTransDate($cdate);
						$bacteria->save();
					endforeach;
					// folding table
					foreach($area as $a):
						$bacteria = new BacteriaTest();
						$bacteria->setCleanroom($cleanroom);
						$bacteria->setTransDate($cdate);
						if ($a = 'A'):
							$bacteria->setFoldingTableA('Tested');
						else:
							$bacteria->setFoldingTableB('Tested');
						endif;
						$bacteria->save();
					endforeach;
					$bacteria = new BacteriaTest();
					$bacteria->setTransDate($cdate);
					$bacteria->setGarment('JUMPSUIT');					
					$bacteria->setCustomer('LONZA');
					$bacteria->save();
					break;
			endswitch;			
		endif;
	endif;
	
	echo $cdate . "done updated...\n";
	$cdate = addDate($cdate, 1);
	//exit();
endwhile;

echo "\nDone.\n";

function AddDate($date, $days)
{
	$yyyy = substr($date, 0, 4);
	$mm = substr($date, 5, 2);
	$dd = substr($date, 8, 2);

	$mktime = mktime(1,1,1,$mm,$dd+$days,$yyyy);
	return date('Y-m-d', $mktime);
}

function DUFormat($format, $datetime)
{
	if (strlen($datetime) <= 10) $datetime .= ' 01:01:01';
	if ($datetime == '' || strpos($datetime, '0000') !== false) {
		return '';
	}
	$tmp = explode(' ', $datetime);
	$tmp1 = explode('-', $tmp[0]);
	$tmp2 = explode(':', $tmp[1]);
	return date($format, mktime($tmp2[0], $tmp2[1], $tmp2[2], $tmp1[1], $tmp1[2], $tmp1[0]));
}
