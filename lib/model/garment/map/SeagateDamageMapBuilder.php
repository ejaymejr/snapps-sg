<?php



class SeagateDamageMapBuilder {

	
	const CLASS_NAME = 'lib.model.garment.map.SeagateDamageMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('seagate_damage');
		$tMap->setPhpName('SeagateDamage');

		$tMap->setUseIdGenerator(true);

		$tMap->addColumn('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addPrimaryKey('INDEX_NO', 'IndexNo', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('MONTH', 'Month', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('YEAR', 'Year', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('SEAGATE1_GARMENT', 'Seagate1Garment', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('SEAGATE1_MISSING_QUANTITY', 'Seagate1MissingQuantity', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('SEAGATE1_DAMAGE_QUANTITY', 'Seagate1DamageQuantity', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('SEAGATE1_DAMAGE_REPAIR_QUANTITY', 'Seagate1DamageRepairQuantity', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('SEAGATE1_DAMAGE_REPLACE_QUANTITY', 'Seagate1DamageReplaceQuantity', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('SEAGATE2_GARMENT', 'Seagate2Garment', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('SEAGATE2_MISSING_QUANTITY', 'Seagate2MissingQuantity', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('SEAGATE2_DAMAGE_QUANTITY', 'Seagate2DamageQuantity', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('SEAGATE2_DAMAGE_REPAIR_QUANTITY', 'Seagate2DamageRepairQuantity', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('SEAGATE2_DAMAGE_REPLACE_QUANTITY', 'Seagate2DamageReplaceQuantity', 'int', CreoleTypes::INTEGER, true, null);

	} 
} 