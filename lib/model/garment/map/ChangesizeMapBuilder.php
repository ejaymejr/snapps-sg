<?php



class ChangesizeMapBuilder {

	
	const CLASS_NAME = 'lib.model.garment.map.ChangesizeMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('changesize');
		$tMap->setPhpName('Changesize');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DATE_TIME', 'DateTime', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('USER_NAME', 'UserName', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('EMAIL', 'Email', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('NUMBER', 'Number', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('DEPARTMENT', 'Department', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('SHIFT', 'Shift', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('JUMPSUIT_W_HOOD_SIZE', 'JumpsuitWHoodSize', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('JUMPSUIT_SIZE', 'JumpsuitSize', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('BOOTIES_SIZE', 'BootiesSize', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('HOOD_SIZE', 'HoodSize', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('LABCOAT_SIZE', 'LabcoatSize', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('SHOE_SIZE', 'ShoeSize', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('SAFETY_SHOE_SIZE', 'SafetyShoeSize', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('CHANGED', 'Changed', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('COMPLETED_DATE', 'CompletedDate', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('CUSTOMER', 'Customer', 'string', CreoleTypes::VARCHAR, true, 100);

	} 
} 