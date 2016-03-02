<?php



class OutscanBlankMapBuilder {

	
	const CLASS_NAME = 'lib.model.garment.map.OutscanBlankMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('outscan_blank');
		$tMap->setPhpName('OutscanBlank');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('GARMENT_CODE', 'GarmentCode', 'string', CreoleTypes::VARCHAR, true, 15);

		$tMap->addColumn('MAX_DATE_TIME', 'MaxDateTime', 'int', CreoleTypes::TIMESTAMP, true, null);

	} 
} 