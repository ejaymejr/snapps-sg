<?php



class RejectAttrMapBuilder {

	
	const CLASS_NAME = 'lib.model.garment.map.RejectAttrMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('reject_attr');
		$tMap->setPhpName('RejectAttr');

		$tMap->setUseIdGenerator(true);

		$tMap->addColumn('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addPrimaryKey('INDEX_NO', 'IndexNo', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('CUSTOMER', 'Customer', 'string', CreoleTypes::VARCHAR, true, 20);

		$tMap->addColumn('GARMENT_TYPE', 'GarmentType', 'string', CreoleTypes::VARCHAR, true, 20);

		$tMap->addColumn('REASON', 'Reason', 'string', CreoleTypes::VARCHAR, true, 100);

	} 
} 