<?php



class TestingMapBuilder {

	
	const CLASS_NAME = 'lib.model.garment.map.TestingMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('testing');
		$tMap->setPhpName('Testing');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('HANGER_NO', 'HangerNo', 'string', CreoleTypes::VARCHAR, true, 20);

		$tMap->addColumn('TEAM', 'Team', 'string', CreoleTypes::VARCHAR, true, 5);

		$tMap->addColumn('NUMBER', 'Number', 'string', CreoleTypes::VARCHAR, true, 20);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, true, 20);

	} 
} 