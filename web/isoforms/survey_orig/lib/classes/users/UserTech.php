<?php
/*
 * Created on May 23, 2007
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 

class UserTech
{
	function UserTech()
	{
	
	}
	
	function IsValidPass($techName, $accessPass, $techList)
	{
		$techName = strtolower($techName);
		$accessPass = strtolower($accessPass);	
		foreach ($techList as $tmp) {
			
			if (strtolower($tmp[1]) == $techName && strtolower($tmp[2]) == $accessPass) {
				return true;
			}
		}
		return false;
	}
}
?>
