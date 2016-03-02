<?php



class CostMapBuilder {

	
	const CLASS_NAME = 'lib.model.garment.map.CostMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('cost');
		$tMap->setPhpName('Cost');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('MONTH', 'Month', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('YEAR', 'Year', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DEPARTMENT', 'Department', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('COST', 'Cost', 'double', CreoleTypes::DOUBLE, true, null);

		$tMap->addColumn('TYPE', 'Type', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('QUANTITY', 'Quantity', 'int', CreoleTypes::INTEGER, true, null);

	} 
} 