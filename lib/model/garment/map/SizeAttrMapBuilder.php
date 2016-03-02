<?php



class SizeAttrMapBuilder {

	
	const CLASS_NAME = 'lib.model.garment.map.SizeAttrMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('size_attr');
		$tMap->setPhpName('SizeAttr');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('SIZE', 'Size', 'string', CreoleTypes::VARCHAR, true, 10);

	} 
} 