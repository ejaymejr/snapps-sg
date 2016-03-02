<?php



class HangerAttrMapBuilder {

	
	const CLASS_NAME = 'lib.model.garment.map.HangerAttrMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('hanger_attr');
		$tMap->setPhpName('HangerAttr');

		$tMap->setUseIdGenerator(true);

		$tMap->addColumn('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addPrimaryKey('INDEX_NO', 'IndexNo', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('HANGER', 'Hanger', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('CUSTOMER', 'Customer', 'string', CreoleTypes::VARCHAR, true, 50);

	} 
} 