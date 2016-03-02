<?php



class HangerNoMapBuilder {

	
	const CLASS_NAME = 'lib.model.garment.map.HangerNoMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('hanger_no');
		$tMap->setPhpName('HangerNo');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('CUSTOMER', 'Customer', 'string', CreoleTypes::VARCHAR, true, 30);

		$tMap->addColumn('NUMBER', 'Number', 'string', CreoleTypes::VARCHAR, true, 15);

		$tMap->addColumn('HANGER_NO', 'HangerNo', 'string', CreoleTypes::LONGVARCHAR, true, null);

	} 
} 