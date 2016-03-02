<?php


abstract class BaseRepairPeer {

	
	const DATABASE_NAME = 'garment';

	
	const TABLE_NAME = 'repair';

	
	const CLASS_DEFAULT = 'lib.model.garment.Repair';

	
	const NUM_COLUMNS = 23;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'repair.ID';

	
	const INDEX_NO = 'repair.INDEX_NO';

	
	const REPAIR_SEND_DATE = 'repair.REPAIR_SEND_DATE';

	
	const REPAIR_RECEIVE_DATE = 'repair.REPAIR_RECEIVE_DATE';

	
	const GARMENT_CODE = 'repair.GARMENT_CODE';

	
	const TYPE = 'repair.TYPE';

	
	const SIZE = 'repair.SIZE';

	
	const COLOR = 'repair.COLOR';

	
	const CUSTOMER = 'repair.CUSTOMER';

	
	const NO_OF_TIMES_WASH = 'repair.NO_OF_TIMES_WASH';

	
	const NUMBER = 'repair.NUMBER';

	
	const HANGER_NO = 'repair.HANGER_NO';

	
	const INSERTED_DATE = 'repair.INSERTED_DATE';

	
	const REJECT_TYPE = 'repair.REJECT_TYPE';

	
	const REJECT_INDEX_NO = 'repair.REJECT_INDEX_NO';

	
	const DEPARTMENT = 'repair.DEPARTMENT';

	
	const BUILDING = 'repair.BUILDING';

	
	const REPAIR_SEND_DATE_MODIFIED = 'repair.REPAIR_SEND_DATE_MODIFIED';

	
	const REPAIR_RECEIVE_DATE_MODIFIED = 'repair.REPAIR_RECEIVE_DATE_MODIFIED';

	
	const CREATED_BY = 'repair.CREATED_BY';

	
	const DATE_CREATED = 'repair.DATE_CREATED';

	
	const MODIFIED_BY = 'repair.MODIFIED_BY';

	
	const DATE_MODIFIED = 'repair.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'IndexNo', 'RepairSendDate', 'RepairReceiveDate', 'GarmentCode', 'Type', 'Size', 'Color', 'Customer', 'NoOfTimesWash', 'Number', 'HangerNo', 'InsertedDate', 'RejectType', 'RejectIndexNo', 'Department', 'Building', 'RepairSendDateModified', 'RepairReceiveDateModified', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (RepairPeer::ID, RepairPeer::INDEX_NO, RepairPeer::REPAIR_SEND_DATE, RepairPeer::REPAIR_RECEIVE_DATE, RepairPeer::GARMENT_CODE, RepairPeer::TYPE, RepairPeer::SIZE, RepairPeer::COLOR, RepairPeer::CUSTOMER, RepairPeer::NO_OF_TIMES_WASH, RepairPeer::NUMBER, RepairPeer::HANGER_NO, RepairPeer::INSERTED_DATE, RepairPeer::REJECT_TYPE, RepairPeer::REJECT_INDEX_NO, RepairPeer::DEPARTMENT, RepairPeer::BUILDING, RepairPeer::REPAIR_SEND_DATE_MODIFIED, RepairPeer::REPAIR_RECEIVE_DATE_MODIFIED, RepairPeer::CREATED_BY, RepairPeer::DATE_CREATED, RepairPeer::MODIFIED_BY, RepairPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'index_no', 'repair_send_date', 'repair_receive_date', 'garment_code', 'type', 'size', 'color', 'customer', 'no_of_times_wash', 'number', 'hanger_no', 'inserted_date', 'reject_type', 'reject_index_no', 'department', 'building', 'repair_send_date_modified', 'repair_receive_date_modified', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IndexNo' => 1, 'RepairSendDate' => 2, 'RepairReceiveDate' => 3, 'GarmentCode' => 4, 'Type' => 5, 'Size' => 6, 'Color' => 7, 'Customer' => 8, 'NoOfTimesWash' => 9, 'Number' => 10, 'HangerNo' => 11, 'InsertedDate' => 12, 'RejectType' => 13, 'RejectIndexNo' => 14, 'Department' => 15, 'Building' => 16, 'RepairSendDateModified' => 17, 'RepairReceiveDateModified' => 18, 'CreatedBy' => 19, 'DateCreated' => 20, 'ModifiedBy' => 21, 'DateModified' => 22, ),
		BasePeer::TYPE_COLNAME => array (RepairPeer::ID => 0, RepairPeer::INDEX_NO => 1, RepairPeer::REPAIR_SEND_DATE => 2, RepairPeer::REPAIR_RECEIVE_DATE => 3, RepairPeer::GARMENT_CODE => 4, RepairPeer::TYPE => 5, RepairPeer::SIZE => 6, RepairPeer::COLOR => 7, RepairPeer::CUSTOMER => 8, RepairPeer::NO_OF_TIMES_WASH => 9, RepairPeer::NUMBER => 10, RepairPeer::HANGER_NO => 11, RepairPeer::INSERTED_DATE => 12, RepairPeer::REJECT_TYPE => 13, RepairPeer::REJECT_INDEX_NO => 14, RepairPeer::DEPARTMENT => 15, RepairPeer::BUILDING => 16, RepairPeer::REPAIR_SEND_DATE_MODIFIED => 17, RepairPeer::REPAIR_RECEIVE_DATE_MODIFIED => 18, RepairPeer::CREATED_BY => 19, RepairPeer::DATE_CREATED => 20, RepairPeer::MODIFIED_BY => 21, RepairPeer::DATE_MODIFIED => 22, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'index_no' => 1, 'repair_send_date' => 2, 'repair_receive_date' => 3, 'garment_code' => 4, 'type' => 5, 'size' => 6, 'color' => 7, 'customer' => 8, 'no_of_times_wash' => 9, 'number' => 10, 'hanger_no' => 11, 'inserted_date' => 12, 'reject_type' => 13, 'reject_index_no' => 14, 'department' => 15, 'building' => 16, 'repair_send_date_modified' => 17, 'repair_receive_date_modified' => 18, 'created_by' => 19, 'date_created' => 20, 'modified_by' => 21, 'date_modified' => 22, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/garment/map/RepairMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.garment.map.RepairMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = RepairPeer::getTableMap();
			$columns = $map->getColumns();
			$nameMap = array();
			foreach ($columns as $column) {
				$nameMap[$column->getPhpName()] = $column->getColumnName();
			}
			self::$phpNameMap = $nameMap;
		}
		return self::$phpNameMap;
	}
	
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants TYPE_PHPNAME, TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	
	public static function alias($alias, $column)
	{
		return str_replace(RepairPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(RepairPeer::ID);

		$criteria->addSelectColumn(RepairPeer::INDEX_NO);

		$criteria->addSelectColumn(RepairPeer::REPAIR_SEND_DATE);

		$criteria->addSelectColumn(RepairPeer::REPAIR_RECEIVE_DATE);

		$criteria->addSelectColumn(RepairPeer::GARMENT_CODE);

		$criteria->addSelectColumn(RepairPeer::TYPE);

		$criteria->addSelectColumn(RepairPeer::SIZE);

		$criteria->addSelectColumn(RepairPeer::COLOR);

		$criteria->addSelectColumn(RepairPeer::CUSTOMER);

		$criteria->addSelectColumn(RepairPeer::NO_OF_TIMES_WASH);

		$criteria->addSelectColumn(RepairPeer::NUMBER);

		$criteria->addSelectColumn(RepairPeer::HANGER_NO);

		$criteria->addSelectColumn(RepairPeer::INSERTED_DATE);

		$criteria->addSelectColumn(RepairPeer::REJECT_TYPE);

		$criteria->addSelectColumn(RepairPeer::REJECT_INDEX_NO);

		$criteria->addSelectColumn(RepairPeer::DEPARTMENT);

		$criteria->addSelectColumn(RepairPeer::BUILDING);

		$criteria->addSelectColumn(RepairPeer::REPAIR_SEND_DATE_MODIFIED);

		$criteria->addSelectColumn(RepairPeer::REPAIR_RECEIVE_DATE_MODIFIED);

		$criteria->addSelectColumn(RepairPeer::CREATED_BY);

		$criteria->addSelectColumn(RepairPeer::DATE_CREATED);

		$criteria->addSelectColumn(RepairPeer::MODIFIED_BY);

		$criteria->addSelectColumn(RepairPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(repair.INDEX_NO)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT repair.INDEX_NO)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(RepairPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(RepairPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = RepairPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}
	
	public static function doSelectOne(Criteria $criteria, $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = RepairPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return RepairPeer::populateObjects(RepairPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			RepairPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = RepairPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}
	
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	
	public static function getOMClass()
	{
		return RepairPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(RepairPeer::INDEX_NO); 

				$criteria->setDbName(self::DATABASE_NAME);

		try {
									$con->begin();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollback();
			throw $e;
		}

		return $pk;
	}

	
	public static function doUpdate($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; 
			$comparison = $criteria->getComparison(RepairPeer::INDEX_NO);
			$selectCriteria->add(RepairPeer::INDEX_NO, $criteria->remove(RepairPeer::INDEX_NO), $comparison);

		} else { 			$criteria = $values->buildCriteria(); 			$selectCriteria = $values->buildPkeyCriteria(); 		}

				$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}
		$affectedRows = 0; 		try {
									$con->begin();
			$affectedRows += BasePeer::doDeleteAll(RepairPeer::TABLE_NAME, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	 public static function doDelete($values, $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(RepairPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Repair) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(RepairPeer::INDEX_NO, (array) $values, Criteria::IN);
		}

				$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; 
		try {
									$con->begin();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public static function doValidate(Repair $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(RepairPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(RepairPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		$res =  BasePeer::doValidate(RepairPeer::DATABASE_NAME, RepairPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = RepairPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
            $request->setError($col, $failed->getMessage());
        }
    }

    return $res;
	}

	
	public static function retrieveByPK($pk, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$criteria = new Criteria(RepairPeer::DATABASE_NAME);

		$criteria->add(RepairPeer::INDEX_NO, $pk);


		$v = RepairPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	
	public static function retrieveByPKs($pks, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria();
			$criteria->add(RepairPeer::INDEX_NO, $pks, Criteria::IN);
			$objs = RepairPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseRepairPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/garment/map/RepairMapBuilder.php';
	Propel::registerMapBuilder('lib.model.garment.map.RepairMapBuilder');
}
