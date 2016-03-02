<?php


abstract class BaseLogReasonPeer {

	
	const DATABASE_NAME = 'garment';

	
	const TABLE_NAME = 'log_reason';

	
	const CLASS_DEFAULT = 'lib.model.garment.LogReason';

	
	const NUM_COLUMNS = 21;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'log_reason.ID';

	
	const INDEX_NO = 'log_reason.INDEX_NO';

	
	const GARMENT_CODE = 'log_reason.GARMENT_CODE';

	
	const CUSTOMER = 'log_reason.CUSTOMER';

	
	const TYPE = 'log_reason.TYPE';

	
	const SIZE = 'log_reason.SIZE';

	
	const COLOR = 'log_reason.COLOR';

	
	const NO_OF_TIMES_WASH = 'log_reason.NO_OF_TIMES_WASH';

	
	const HANGER_NO = 'log_reason.HANGER_NO';

	
	const NUMBER = 'log_reason.NUMBER';

	
	const NAME = 'log_reason.NAME';

	
	const DEPARTMENT = 'log_reason.DEPARTMENT';

	
	const SHIFT = 'log_reason.SHIFT';

	
	const SUBMITTED_DATE = 'log_reason.SUBMITTED_DATE';

	
	const COMPLETED_DATE = 'log_reason.COMPLETED_DATE';

	
	const REASON = 'log_reason.REASON';

	
	const REMARKS = 'log_reason.REMARKS';

	
	const CREATED_BY = 'log_reason.CREATED_BY';

	
	const DATE_CREATED = 'log_reason.DATE_CREATED';

	
	const MODIFIED_BY = 'log_reason.MODIFIED_BY';

	
	const DATE_MODIFIED = 'log_reason.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'IndexNo', 'GarmentCode', 'Customer', 'Type', 'Size', 'Color', 'NoOfTimesWash', 'HangerNo', 'Number', 'Name', 'Department', 'Shift', 'SubmittedDate', 'CompletedDate', 'Reason', 'Remarks', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (LogReasonPeer::ID, LogReasonPeer::INDEX_NO, LogReasonPeer::GARMENT_CODE, LogReasonPeer::CUSTOMER, LogReasonPeer::TYPE, LogReasonPeer::SIZE, LogReasonPeer::COLOR, LogReasonPeer::NO_OF_TIMES_WASH, LogReasonPeer::HANGER_NO, LogReasonPeer::NUMBER, LogReasonPeer::NAME, LogReasonPeer::DEPARTMENT, LogReasonPeer::SHIFT, LogReasonPeer::SUBMITTED_DATE, LogReasonPeer::COMPLETED_DATE, LogReasonPeer::REASON, LogReasonPeer::REMARKS, LogReasonPeer::CREATED_BY, LogReasonPeer::DATE_CREATED, LogReasonPeer::MODIFIED_BY, LogReasonPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'index_no', 'garment_code', 'customer', 'type', 'size', 'color', 'no_of_times_wash', 'hanger_no', 'number', 'name', 'department', 'shift', 'submitted_date', 'completed_date', 'reason', 'remarks', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IndexNo' => 1, 'GarmentCode' => 2, 'Customer' => 3, 'Type' => 4, 'Size' => 5, 'Color' => 6, 'NoOfTimesWash' => 7, 'HangerNo' => 8, 'Number' => 9, 'Name' => 10, 'Department' => 11, 'Shift' => 12, 'SubmittedDate' => 13, 'CompletedDate' => 14, 'Reason' => 15, 'Remarks' => 16, 'CreatedBy' => 17, 'DateCreated' => 18, 'ModifiedBy' => 19, 'DateModified' => 20, ),
		BasePeer::TYPE_COLNAME => array (LogReasonPeer::ID => 0, LogReasonPeer::INDEX_NO => 1, LogReasonPeer::GARMENT_CODE => 2, LogReasonPeer::CUSTOMER => 3, LogReasonPeer::TYPE => 4, LogReasonPeer::SIZE => 5, LogReasonPeer::COLOR => 6, LogReasonPeer::NO_OF_TIMES_WASH => 7, LogReasonPeer::HANGER_NO => 8, LogReasonPeer::NUMBER => 9, LogReasonPeer::NAME => 10, LogReasonPeer::DEPARTMENT => 11, LogReasonPeer::SHIFT => 12, LogReasonPeer::SUBMITTED_DATE => 13, LogReasonPeer::COMPLETED_DATE => 14, LogReasonPeer::REASON => 15, LogReasonPeer::REMARKS => 16, LogReasonPeer::CREATED_BY => 17, LogReasonPeer::DATE_CREATED => 18, LogReasonPeer::MODIFIED_BY => 19, LogReasonPeer::DATE_MODIFIED => 20, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'index_no' => 1, 'garment_code' => 2, 'customer' => 3, 'type' => 4, 'size' => 5, 'color' => 6, 'no_of_times_wash' => 7, 'hanger_no' => 8, 'number' => 9, 'name' => 10, 'department' => 11, 'shift' => 12, 'submitted_date' => 13, 'completed_date' => 14, 'reason' => 15, 'remarks' => 16, 'created_by' => 17, 'date_created' => 18, 'modified_by' => 19, 'date_modified' => 20, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/garment/map/LogReasonMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.garment.map.LogReasonMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = LogReasonPeer::getTableMap();
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
		return str_replace(LogReasonPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(LogReasonPeer::ID);

		$criteria->addSelectColumn(LogReasonPeer::INDEX_NO);

		$criteria->addSelectColumn(LogReasonPeer::GARMENT_CODE);

		$criteria->addSelectColumn(LogReasonPeer::CUSTOMER);

		$criteria->addSelectColumn(LogReasonPeer::TYPE);

		$criteria->addSelectColumn(LogReasonPeer::SIZE);

		$criteria->addSelectColumn(LogReasonPeer::COLOR);

		$criteria->addSelectColumn(LogReasonPeer::NO_OF_TIMES_WASH);

		$criteria->addSelectColumn(LogReasonPeer::HANGER_NO);

		$criteria->addSelectColumn(LogReasonPeer::NUMBER);

		$criteria->addSelectColumn(LogReasonPeer::NAME);

		$criteria->addSelectColumn(LogReasonPeer::DEPARTMENT);

		$criteria->addSelectColumn(LogReasonPeer::SHIFT);

		$criteria->addSelectColumn(LogReasonPeer::SUBMITTED_DATE);

		$criteria->addSelectColumn(LogReasonPeer::COMPLETED_DATE);

		$criteria->addSelectColumn(LogReasonPeer::REASON);

		$criteria->addSelectColumn(LogReasonPeer::REMARKS);

		$criteria->addSelectColumn(LogReasonPeer::CREATED_BY);

		$criteria->addSelectColumn(LogReasonPeer::DATE_CREATED);

		$criteria->addSelectColumn(LogReasonPeer::MODIFIED_BY);

		$criteria->addSelectColumn(LogReasonPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(log_reason.INDEX_NO)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT log_reason.INDEX_NO)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(LogReasonPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(LogReasonPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = LogReasonPeer::doSelectRS($criteria, $con);
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
		$objects = LogReasonPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return LogReasonPeer::populateObjects(LogReasonPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			LogReasonPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = LogReasonPeer::getOMClass();
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
		return LogReasonPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(LogReasonPeer::INDEX_NO); 

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
			$comparison = $criteria->getComparison(LogReasonPeer::INDEX_NO);
			$selectCriteria->add(LogReasonPeer::INDEX_NO, $criteria->remove(LogReasonPeer::INDEX_NO), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(LogReasonPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(LogReasonPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof LogReason) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(LogReasonPeer::INDEX_NO, (array) $values, Criteria::IN);
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

	
	public static function doValidate(LogReason $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(LogReasonPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(LogReasonPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(LogReasonPeer::DATABASE_NAME, LogReasonPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = LogReasonPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(LogReasonPeer::DATABASE_NAME);

		$criteria->add(LogReasonPeer::INDEX_NO, $pk);


		$v = LogReasonPeer::doSelect($criteria, $con);

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
			$criteria->add(LogReasonPeer::INDEX_NO, $pks, Criteria::IN);
			$objs = LogReasonPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseLogReasonPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/garment/map/LogReasonMapBuilder.php';
	Propel::registerMapBuilder('lib.model.garment.map.LogReasonMapBuilder');
}
