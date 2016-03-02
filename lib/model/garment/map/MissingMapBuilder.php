<?php



class MissingMapBuilder {

	
	const CLASS_NAME = 'lib.model.garment.map.MissingMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('missing');
		$tMap->setPhpName('Missing');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DATE_TIME', 'DateTime', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('USER_NAME', 'UserName', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('EMAIL', 'Email', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('NUMBER', 'Number', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('DEPARTMENT', 'Department', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('SHIFT', 'Shift', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('JOB_TITLE', 'JobTitle', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('TYPE', 'Type', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('REASONLOG', 'Reasonlog', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('REMARKS', 'Remarks', 'string', CreoleTypes::LONGVARCHAR, true, null);

		$tMap->addColumn('REPLACED', 'Replaced', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('REPAIRED', 'Repaired', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('COMPLETED_DATE', 'CompletedDate', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('CUSTOMER', 'Customer', 'string', CreoleTypes::VARCHAR, true, 100);

	} 
} 