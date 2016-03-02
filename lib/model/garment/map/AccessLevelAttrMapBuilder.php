<?php



class AccessLevelAttrMapBuilder {

	
	const CLASS_NAME = 'lib.model.garment.map.AccessLevelAttrMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('access_level_attr');
		$tMap->setPhpName('AccessLevelAttr');

		$tMap->setUseIdGenerator(true);

		$tMap->addColumn('ACCESS_LEVEL', 'AccessLevel', 'string', CreoleTypes::VARCHAR, true, 20);

		$tMap->addColumn('CUSTOMER', 'Customer', 'string', CreoleTypes::VARCHAR, true, 30);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

	} 
} 