<?php



class LogReasonMapBuilder {

	
	const CLASS_NAME = 'lib.model.garment.map.LogReasonMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('log_reason');
		$tMap->setPhpName('LogReason');

		$tMap->setUseIdGenerator(true);

		$tMap->addColumn('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addPrimaryKey('INDEX_NO', 'IndexNo', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('GARMENT_CODE', 'GarmentCode', 'string', CreoleTypes::VARCHAR, true, 20);

		$tMap->addColumn('CUSTOMER', 'Customer', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('TYPE', 'Type', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('SIZE', 'Size', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('COLOR', 'Color', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('NO_OF_TIMES_WASH', 'NoOfTimesWash', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('HANGER_NO', 'HangerNo', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('NUMBER', 'Number', 'string', CreoleTypes::VARCHAR, true, 10);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('DEPARTMENT', 'Department', 'string', CreoleTypes::VARCHAR, true, 20);

		$tMap->addColumn('SHIFT', 'Shift', 'string', CreoleTypes::VARCHAR, true, 20);

		$tMap->addColumn('SUBMITTED_DATE', 'SubmittedDate', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('COMPLETED_DATE', 'CompletedDate', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('REASON', 'Reason', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('REMARKS', 'Remarks', 'string', CreoleTypes::LONGVARCHAR, true, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, true, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, true, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 