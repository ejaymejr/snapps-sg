<?php



class ColorAttrMapBuilder {

	
	const CLASS_NAME = 'lib.model.garment.map.ColorAttrMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('color_attr');
		$tMap->setPhpName('ColorAttr');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('COLOR', 'Color', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('CUSTOMER', 'Customer', 'string', CreoleTypes::VARCHAR, true, 50);

	} 
} 