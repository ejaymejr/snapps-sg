<?php



class VisitorsMapBuilder {

	
	const CLASS_NAME = 'lib.model.garment.map.VisitorsMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('visitors');
		$tMap->setPhpName('Visitors');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DATE_TIME', 'DateTime', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('USER_NAME', 'UserName', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('EMAIL', 'Email', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('DEPARTMENT', 'Department', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('DATE_DELIVER', 'DateDeliver', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('DATE_RETURN', 'DateReturn', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('JHXS', 'Jhxs', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('JHS', 'Jhs', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('JHM', 'Jhm', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('JHL', 'Jhl', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('JHXL', 'Jhxl', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('JHXXL', 'Jhxxl', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('JHXXXL', 'Jhxxxl', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('JXS', 'Jxs', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('JS', 'Js', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('JM', 'Jm', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('JL', 'Jl', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('JXL', 'Jxl', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('JXXL', 'Jxxl', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('JXXXL', 'Jxxxl', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('BXS', 'Bxs', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('BS', 'Bs', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('BM', 'Bm', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('BL', 'Bl', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('BXL', 'Bxl', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('BXXL', 'Bxxl', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('BXXXL', 'Bxxxl', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('HL', 'Hl', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('H2L', 'H2l', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('H3L', 'H3l', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('LXS', 'Lxs', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('LS', 'Ls', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('LM', 'Lm', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('LL', 'Ll', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('LXL', 'Lxl', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('LXXL', 'Lxxl', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('LXXXL', 'Lxxxl', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('S24', 'S24', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('S25', 'S25', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('S26', 'S26', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('S27', 'S27', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('S28', 'S28', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('S29', 'S29', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('S30', 'S30', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('SS24', 'Ss24', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('SS25', 'Ss25', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('SS26', 'Ss26', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('SS27', 'Ss27', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('SS28', 'Ss28', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('SS29', 'Ss29', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('SS30', 'Ss30', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('REQUESTED', 'Requested', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('COMPLETED_DATE', 'CompletedDate', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('CUSTOMER', 'Customer', 'string', CreoleTypes::VARCHAR, true, 100);

	} 
} 