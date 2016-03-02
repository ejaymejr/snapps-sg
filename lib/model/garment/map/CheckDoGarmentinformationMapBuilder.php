<?php



class CheckDoGarmentinformationMapBuilder {

	
	const CLASS_NAME = 'lib.model.garment.map.CheckDoGarmentinformationMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('check_do_garmentInformation');
		$tMap->setPhpName('CheckDoGarmentinformation');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('GARMENT_CODE', 'GarmentCode', 'string', CreoleTypes::VARCHAR, true, 20);

		$tMap->addColumn('TYPE', 'Type', 'string', CreoleTypes::VARCHAR, true, 80);

		$tMap->addColumn('SIZE', 'Size', 'string', CreoleTypes::VARCHAR, true, 80);

		$tMap->addColumn('COLOR', 'Color', 'string', CreoleTypes::VARCHAR, true, 80);

		$tMap->addColumn('CUSTOMER', 'Customer', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('NO_OF_TIMES_WASH', 'NoOfTimesWash', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NUMBER', 'Number', 'string', CreoleTypes::VARCHAR, false, 15);

		$tMap->addColumn('HANGER_NO', 'HangerNo', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('INSERTED_DATE', 'InsertedDate', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('DEPARTMENT', 'Department', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('SHIFT', 'Shift', 'string', CreoleTypes::VARCHAR, true, 100);

	} 
} 