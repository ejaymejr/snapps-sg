<?php

/**
 * Subclass for performing query and update operations on the 'hr_employee_master' table.
 *
 * 
 *
 * @package lib.model.particle
 */ 
class HrEmployeeMasterPeer extends BaseHrEmployeeMasterPeer
{
    public static function GetEmpList($co=null)
    {
        $c= new criteria();
        $c->addAscendingOrderByColumn(self::NAME);
        if ($co == 'AcroNano'):
        	$c->add(self::COMPANY, 'micronclean', Criteria::NOT_EQUAL);
        endif;
        if ($co == 'micronclean'):
        	$c->add(self::COMPANY, 'micronclean');
        endif;
        $rs = self::doSelect($c);
        $list = array();
        foreach($rs as $r){
            $list[$r->getEmployeeNo()] = $r->getName();
        }
        return $list;
    }   
    
    public static function GetEmployeeData($empNo)
    {
        $c = new Criteria();
        $c->add(self::EMPLOYEE_NO, $empNo);
        $rs = self::doSelectOne($c);
        return $rs;
    }
    
//    public static function GetEmployeeData($empNo)
//    {
//        $c = new Criteria();
//        $c->add(self::EMPLOYEE_NO, $empNo);
//        $rs = self::doSelectOne($c);
//        return $rs;
//    }
    
    public static function GetEmployeeDataByName($name)
    {
        $c = new Criteria();
        $c->add(self::NAME, $name);
        $rs = self::doSelectOne($c);
        return $rs;
    }    
    
    public static function GetEmployeeDataLikeEmpNo($empNo)
    {
        $c = new Criteria();
        $c->add(self::EMPLOYEE_NO, "%" . $empNo . "%", Criteria::LIKE);
        $rs = self::doSelectOne($c);
        return $rs;
        
    }    
    
    public static function GetEmployees()
    {
    	$c = new Criteria();
    	$c->addDescendingOrderByName(self::NAME);
    	$rs = self::doSelect($c);
    	return $rs;
    }
    
	static function ExecuteSQL($sql)
	{
		$con = Propel::getConnection('particle');
		$stmt = $con->PrepareStatement($sql);
		$rs = $stmt->executeQuery(ResultSet::FETCHMODE_ASSOC);
		return $rs;
	}
}
