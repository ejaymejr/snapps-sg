<?php



class LogReasonAttrMapBuilder {

	
	const CLASS_NAME = 'lib.model.garment.map.LogReasonAttrMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('log_reason_attr');
		$tMap->setPhpName('LogReasonAttr');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('CUSTOMER', 'Customer', 'string', CreoleTypes::VARCHAR, true, 100);

		$tMap->addColumn('REASON', 'Reason', 'string', CreoleTypes::VARCHAR, true, 100);

	} 
} 