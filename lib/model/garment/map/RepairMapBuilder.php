<?php



class RepairMapBuilder {

	
	const CLASS_NAME = 'lib.model.garment.map.RepairMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('repair');
		$tMap->setPhpName('Repair');

		$tMap->setUseIdGenerator(true);

		$tMap->addColumn('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addPrimaryKey('INDEX_NO', 'IndexNo', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('REPAIR_SEND_DATE', 'RepairSendDate', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('REPAIR_RECEIVE_DATE', 'RepairReceiveDate', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('GARMENT_CODE', 'GarmentCode', 'string', CreoleTypes::VARCHAR, true, 20);

		$tMap->addColumn('TYPE', 'Type', 'string', CreoleTypes::VARCHAR, true, 80);

		$tMap->addColumn('SIZE', 'Size', 'string', CreoleTypes::VARCHAR, true, 80);

		$tMap->addColumn('COLOR', 'Color', 'string', CreoleTypes::VARCHAR, true, 80);

		$tMap->addColumn('CUSTOMER', 'Customer', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('NO_OF_TIMES_WASH', 'NoOfTimesWash', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NUMBER', 'Number', 'string', CreoleTypes::VARCHAR, false, 15);

		$tMap->addColumn('HANGER_NO', 'HangerNo', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('INSERTED_DATE', 'InsertedDate', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('REJECT_TYPE', 'RejectType', 'string', CreoleTypes::VARCHAR, true, 50);

		$tMap->addColumn('REJECT_INDEX_NO', 'RejectIndexNo', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DEPARTMENT', 'Department', 'string', CreoleTypes::VARCHAR, true, 15);

		$tMap->addColumn('BUILDING', 'Building', 'string', CreoleTypes::CHAR, true, 2);

		$tMap->addColumn('REPAIR_SEND_DATE_MODIFIED', 'RepairSendDateModified', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('REPAIR_RECEIVE_DATE_MODIFIED', 'RepairReceiveDateModified', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, true, 45);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, true, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 