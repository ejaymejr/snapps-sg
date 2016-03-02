<?php



class SeagateAddNewGarmentsMapBuilder {

	
	const CLASS_NAME = 'lib.model.garment.map.SeagateAddNewGarmentsMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('seagate_add_new_garments');
		$tMap->setPhpName('SeagateAddNewGarments');

		$tMap->setUseIdGenerator(true);

		$tMap->addColumn('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addPrimaryKey('INDEX_NO', 'IndexNo', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('ADD_NEW_INDEX', 'AddNewIndex', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('GARMENT_TYPE', 'GarmentType', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('GARMENT_SIZE', 'GarmentSize', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('GARMENT_COLOR', 'GarmentColor', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('QUANTITY', 'Quantity', 'int', CreoleTypes::INTEGER, true, null);

	} 
} 