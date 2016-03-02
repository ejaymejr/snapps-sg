<?php



class CheckDoWearerinformationMapBuilder {

	
	const CLASS_NAME = 'lib.model.garment.map.CheckDoWearerinformationMapBuilder';

	
	private $dbMap;

	
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap('garment');

		$tMap = $this->dbMap->addTable('check_do_wearerInformation');
		$tMap->setPhpName('CheckDoWearerinformation');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NUMBER', 'Number', 'string', CreoleTypes::VARCHAR, true, 15);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, true, 30);

		$tMap->addColumn('JOB_TITLE', 'JobTitle', 'string', CreoleTypes::VARCHAR, true, 15);

		$tMap->addColumn('ACCESS_LEVEL', 'AccessLevel', 'string', CreoleTypes::VARCHAR, true, 20);

		$tMap->addColumn('PASSWORD', 'Password', 'string', CreoleTypes::VARCHAR, true, 20);

		$tMap->addColumn('EMAIL', 'Email', 'string', CreoleTypes::VARCHAR, true, 30);

		$tMap->addColumn('CUSTOMER_ID', 'CustomerId', 'string', CreoleTypes::VARCHAR, false, 10);

		$tMap->addColumn('CUSTOMER', 'Customer', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('ALLOW_ACCESS', 'AllowAccess', 'string', CreoleTypes::VARCHAR, true, 5);

		$tMap->addColumn('DEPARTMENT', 'Department', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('SHIFT', 'Shift', 'string', CreoleTypes::VARCHAR, true, 100);

	} 
} 