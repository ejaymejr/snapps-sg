<?php


abstract class BaseRejectPeer {

	
	const DATABASE_NAME = 'garment';

	
	const TABLE_NAME = 'reject';

	
	const CLASS_DEFAULT = 'lib.model.garment.Reject';

	
	const NUM_COLUMNS = 31;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'reject.ID';

	
	const INDEX_NO = 'reject.INDEX_NO';

	
	const REVIEWED_DATE = 'reject.REVIEWED_DATE';

	
	const REVIEWED_RESULT = 'reject.REVIEWED_RESULT';

	
	const REJECT_DATE = 'reject.REJECT_DATE';

	
	const REPAIR_SENT_DATE = 'reject.REPAIR_SENT_DATE';

	
	const REPAIR_RECEIVE_DATE = 'reject.REPAIR_RECEIVE_DATE';

	
	const SCRAP_COMPLETE_DATE = 'reject.SCRAP_COMPLETE_DATE';

	
	const DOWNGRADE_DATE = 'reject.DOWNGRADE_DATE';

	
	const GARMENT_CODE = 'reject.GARMENT_CODE';

	
	const TYPE = 'reject.TYPE';

	
	const SIZE = 'reject.SIZE';

	
	const COLOR = 'reject.COLOR';

	
	const CUSTOMER = 'reject.CUSTOMER';

	
	const NO_OF_TIMES_WASH = 'reject.NO_OF_TIMES_WASH';

	
	const NUMBER = 'reject.NUMBER';

	
	const HANGER_NO = 'reject.HANGER_NO';

	
	const INSERTED_DATE = 'reject.INSERTED_DATE';

	
	const REJECT_TYPE = 'reject.REJECT_TYPE';

	
	const DEPARTMENT = 'reject.DEPARTMENT';

	
	const BUILDING = 'reject.BUILDING';

	
	const REJECT_DATE_MODIFIED = 'reject.REJECT_DATE_MODIFIED';

	
	const REVIEWED_DATE_MODIFIED = 'reject.REVIEWED_DATE_MODIFIED';

	
	const REPAIR_SENT_DATE_MODIFIED = 'reject.REPAIR_SENT_DATE_MODIFIED';

	
	const REPAIR_RECEIVE_DATE_MODIFIED = 'reject.REPAIR_RECEIVE_DATE_MODIFIED';

	
	const SCRAP_COMPLETE_DATE_MODIFIED = 'reject.SCRAP_COMPLETE_DATE_MODIFIED';

	
	const DOWNGRADE_DATE_MODIFIED = 'reject.DOWNGRADE_DATE_MODIFIED';

	
	const CREATED_BY = 'reject.CREATED_BY';

	
	const DATE_CREATED = 'reject.DATE_CREATED';

	
	const MODIFIED_BY = 'reject.MODIFIED_BY';

	
	const DATE_MODIFIED = 'reject.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'IndexNo', 'ReviewedDate', 'ReviewedResult', 'RejectDate', 'RepairSentDate', 'RepairReceiveDate', 'ScrapCompleteDate', 'DowngradeDate', 'GarmentCode', 'Type', 'Size', 'Color', 'Customer', 'NoOfTimesWash', 'Number', 'HangerNo', 'InsertedDate', 'RejectType', 'Department', 'Building', 'RejectDateModified', 'ReviewedDateModified', 'RepairSentDateModified', 'RepairReceiveDateModified', 'ScrapCompleteDateModified', 'DowngradeDateModified', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (RejectPeer::ID, RejectPeer::INDEX_NO, RejectPeer::REVIEWED_DATE, RejectPeer::REVIEWED_RESULT, RejectPeer::REJECT_DATE, RejectPeer::REPAIR_SENT_DATE, RejectPeer::REPAIR_RECEIVE_DATE, RejectPeer::SCRAP_COMPLETE_DATE, RejectPeer::DOWNGRADE_DATE, RejectPeer::GARMENT_CODE, RejectPeer::TYPE, RejectPeer::SIZE, RejectPeer::COLOR, RejectPeer::CUSTOMER, RejectPeer::NO_OF_TIMES_WASH, RejectPeer::NUMBER, RejectPeer::HANGER_NO, RejectPeer::INSERTED_DATE, RejectPeer::REJECT_TYPE, RejectPeer::DEPARTMENT, RejectPeer::BUILDING, RejectPeer::REJECT_DATE_MODIFIED, RejectPeer::REVIEWED_DATE_MODIFIED, RejectPeer::REPAIR_SENT_DATE_MODIFIED, RejectPeer::REPAIR_RECEIVE_DATE_MODIFIED, RejectPeer::SCRAP_COMPLETE_DATE_MODIFIED, RejectPeer::DOWNGRADE_DATE_MODIFIED, RejectPeer::CREATED_BY, RejectPeer::DATE_CREATED, RejectPeer::MODIFIED_BY, RejectPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'index_no', 'reviewed_date', 'reviewed_result', 'reject_date', 'repair_sent_date', 'repair_receive_date', 'scrap_complete_date', 'downgrade_date', 'garment_code', 'type', 'size', 'color', 'customer', 'no_of_times_wash', 'number', 'hanger_no', 'inserted_date', 'reject_type', 'department', 'building', 'reject_date_modified', 'reviewed_date_modified', 'repair_sent_date_modified', 'repair_receive_date_modified', 'scrap_complete_date_modified', 'downgrade_date_modified', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IndexNo' => 1, 'ReviewedDate' => 2, 'ReviewedResult' => 3, 'RejectDate' => 4, 'RepairSentDate' => 5, 'RepairReceiveDate' => 6, 'ScrapCompleteDate' => 7, 'DowngradeDate' => 8, 'GarmentCode' => 9, 'Type' => 10, 'Size' => 11, 'Color' => 12, 'Customer' => 13, 'NoOfTimesWash' => 14, 'Number' => 15, 'HangerNo' => 16, 'InsertedDate' => 17, 'RejectType' => 18, 'Department' => 19, 'Building' => 20, 'RejectDateModified' => 21, 'ReviewedDateModified' => 22, 'RepairSentDateModified' => 23, 'RepairReceiveDateModified' => 24, 'ScrapCompleteDateModified' => 25, 'DowngradeDateModified' => 26, 'CreatedBy' => 27, 'DateCreated' => 28, 'ModifiedBy' => 29, 'DateModified' => 30, ),
		BasePeer::TYPE_COLNAME => array (RejectPeer::ID => 0, RejectPeer::INDEX_NO => 1, RejectPeer::REVIEWED_DATE => 2, RejectPeer::REVIEWED_RESULT => 3, RejectPeer::REJECT_DATE => 4, RejectPeer::REPAIR_SENT_DATE => 5, RejectPeer::REPAIR_RECEIVE_DATE => 6, RejectPeer::SCRAP_COMPLETE_DATE => 7, RejectPeer::DOWNGRADE_DATE => 8, RejectPeer::GARMENT_CODE => 9, RejectPeer::TYPE => 10, RejectPeer::SIZE => 11, RejectPeer::COLOR => 12, RejectPeer::CUSTOMER => 13, RejectPeer::NO_OF_TIMES_WASH => 14, RejectPeer::NUMBER => 15, RejectPeer::HANGER_NO => 16, RejectPeer::INSERTED_DATE => 17, RejectPeer::REJECT_TYPE => 18, RejectPeer::DEPARTMENT => 19, RejectPeer::BUILDING => 20, RejectPeer::REJECT_DATE_MODIFIED => 21, RejectPeer::REVIEWED_DATE_MODIFIED => 22, RejectPeer::REPAIR_SENT_DATE_MODIFIED => 23, RejectPeer::REPAIR_RECEIVE_DATE_MODIFIED => 24, RejectPeer::SCRAP_COMPLETE_DATE_MODIFIED => 25, RejectPeer::DOWNGRADE_DATE_MODIFIED => 26, RejectPeer::CREATED_BY => 27, RejectPeer::DATE_CREATED => 28, RejectPeer::MODIFIED_BY => 29, RejectPeer::DATE_MODIFIED => 30, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'index_no' => 1, 'reviewed_date' => 2, 'reviewed_result' => 3, 'reject_date' => 4, 'repair_sent_date' => 5, 'repair_receive_date' => 6, 'scrap_complete_date' => 7, 'downgrade_date' => 8, 'garment_code' => 9, 'type' => 10, 'size' => 11, 'color' => 12, 'customer' => 13, 'no_of_times_wash' => 14, 'number' => 15, 'hanger_no' => 16, 'inserted_date' => 17, 'reject_type' => 18, 'department' => 19, 'building' => 20, 'reject_date_modified' => 21, 'reviewed_date_modified' => 22, 'repair_sent_date_modified' => 23, 'repair_receive_date_modified' => 24, 'scrap_complete_date_modified' => 25, 'downgrade_date_modified' => 26, 'created_by' => 27, 'date_created' => 28, 'modified_by' => 29, 'date_modified' => 30, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/garment/map/RejectMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.garment.map.RejectMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = RejectPeer::getTableMap();
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
		return str_replace(RejectPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(RejectPeer::ID);

		$criteria->addSelectColumn(RejectPeer::INDEX_NO);

		$criteria->addSelectColumn(RejectPeer::REVIEWED_DATE);

		$criteria->addSelectColumn(RejectPeer::REVIEWED_RESULT);

		$criteria->addSelectColumn(RejectPeer::REJECT_DATE);

		$criteria->addSelectColumn(RejectPeer::REPAIR_SENT_DATE);

		$criteria->addSelectColumn(RejectPeer::REPAIR_RECEIVE_DATE);

		$criteria->addSelectColumn(RejectPeer::SCRAP_COMPLETE_DATE);

		$criteria->addSelectColumn(RejectPeer::DOWNGRADE_DATE);

		$criteria->addSelectColumn(RejectPeer::GARMENT_CODE);

		$criteria->addSelectColumn(RejectPeer::TYPE);

		$criteria->addSelectColumn(RejectPeer::SIZE);

		$criteria->addSelectColumn(RejectPeer::COLOR);

		$criteria->addSelectColumn(RejectPeer::CUSTOMER);

		$criteria->addSelectColumn(RejectPeer::NO_OF_TIMES_WASH);

		$criteria->addSelectColumn(RejectPeer::NUMBER);

		$criteria->addSelectColumn(RejectPeer::HANGER_NO);

		$criteria->addSelectColumn(RejectPeer::INSERTED_DATE);

		$criteria->addSelectColumn(RejectPeer::REJECT_TYPE);

		$criteria->addSelectColumn(RejectPeer::DEPARTMENT);

		$criteria->addSelectColumn(RejectPeer::BUILDING);

		$criteria->addSelectColumn(RejectPeer::REJECT_DATE_MODIFIED);

		$criteria->addSelectColumn(RejectPeer::REVIEWED_DATE_MODIFIED);

		$criteria->addSelectColumn(RejectPeer::REPAIR_SENT_DATE_MODIFIED);

		$criteria->addSelectColumn(RejectPeer::REPAIR_RECEIVE_DATE_MODIFIED);

		$criteria->addSelectColumn(RejectPeer::SCRAP_COMPLETE_DATE_MODIFIED);

		$criteria->addSelectColumn(RejectPeer::DOWNGRADE_DATE_MODIFIED);

		$criteria->addSelectColumn(RejectPeer::CREATED_BY);

		$criteria->addSelectColumn(RejectPeer::DATE_CREATED);

		$criteria->addSelectColumn(RejectPeer::MODIFIED_BY);

		$criteria->addSelectColumn(RejectPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(reject.INDEX_NO)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT reject.INDEX_NO)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(RejectPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(RejectPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = RejectPeer::doSelectRS($criteria, $con);
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
		$objects = RejectPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return RejectPeer::populateObjects(RejectPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			RejectPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = RejectPeer::getOMClass();
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
		return RejectPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(RejectPeer::INDEX_NO); 

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
			$comparison = $criteria->getComparison(RejectPeer::INDEX_NO);
			$selectCriteria->add(RejectPeer::INDEX_NO, $criteria->remove(RejectPeer::INDEX_NO), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(RejectPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(RejectPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Reject) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(RejectPeer::INDEX_NO, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Reject $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(RejectPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(RejectPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(RejectPeer::DATABASE_NAME, RejectPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = RejectPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(RejectPeer::DATABASE_NAME);

		$criteria->add(RejectPeer::INDEX_NO, $pk);


		$v = RejectPeer::doSelect($criteria, $con);

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
			$criteria->add(RejectPeer::INDEX_NO, $pks, Criteria::IN);
			$objs = RejectPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseRejectPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/garment/map/RejectMapBuilder.php';
	Propel::registerMapBuilder('lib.model.garment.map.RejectMapBuilder');
}
