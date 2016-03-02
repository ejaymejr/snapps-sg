<?php


abstract class BaseScrapPeer {

	
	const DATABASE_NAME = 'garment';

	
	const TABLE_NAME = 'scrap';

	
	const CLASS_DEFAULT = 'lib.model.garment.Scrap';

	
	const NUM_COLUMNS = 24;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'scrap.ID';

	
	const INDEX_NO = 'scrap.INDEX_NO';

	
	const REJECT_DATE = 'scrap.REJECT_DATE';

	
	const SCRAP_DATE = 'scrap.SCRAP_DATE';

	
	const SCRAP_COMPLETE_DATE = 'scrap.SCRAP_COMPLETE_DATE';

	
	const GARMENT_CODE = 'scrap.GARMENT_CODE';

	
	const TYPE = 'scrap.TYPE';

	
	const SIZE = 'scrap.SIZE';

	
	const COLOR = 'scrap.COLOR';

	
	const CUSTOMER = 'scrap.CUSTOMER';

	
	const NO_OF_TIMES_WASH = 'scrap.NO_OF_TIMES_WASH';

	
	const NUMBER = 'scrap.NUMBER';

	
	const HANGER_NO = 'scrap.HANGER_NO';

	
	const INSERTED_DATE = 'scrap.INSERTED_DATE';

	
	const REJECT_TYPE = 'scrap.REJECT_TYPE';

	
	const DEPARTMENT = 'scrap.DEPARTMENT';

	
	const BUILDING = 'scrap.BUILDING';

	
	const SCRAP_DATE_MODIFIED = 'scrap.SCRAP_DATE_MODIFIED';

	
	const SCRAP_DATE_COMPLETE_MODIFIED = 'scrap.SCRAP_DATE_COMPLETE_MODIFIED';

	
	const REJECT_INDEX_NO = 'scrap.REJECT_INDEX_NO';

	
	const CREATED_BY = 'scrap.CREATED_BY';

	
	const DATE_CREATED = 'scrap.DATE_CREATED';

	
	const MODIFIED_BY = 'scrap.MODIFIED_BY';

	
	const DATE_MODIFIED = 'scrap.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'IndexNo', 'RejectDate', 'ScrapDate', 'ScrapCompleteDate', 'GarmentCode', 'Type', 'Size', 'Color', 'Customer', 'NoOfTimesWash', 'Number', 'HangerNo', 'InsertedDate', 'RejectType', 'Department', 'Building', 'ScrapDateModified', 'ScrapDateCompleteModified', 'RejectIndexNo', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (ScrapPeer::ID, ScrapPeer::INDEX_NO, ScrapPeer::REJECT_DATE, ScrapPeer::SCRAP_DATE, ScrapPeer::SCRAP_COMPLETE_DATE, ScrapPeer::GARMENT_CODE, ScrapPeer::TYPE, ScrapPeer::SIZE, ScrapPeer::COLOR, ScrapPeer::CUSTOMER, ScrapPeer::NO_OF_TIMES_WASH, ScrapPeer::NUMBER, ScrapPeer::HANGER_NO, ScrapPeer::INSERTED_DATE, ScrapPeer::REJECT_TYPE, ScrapPeer::DEPARTMENT, ScrapPeer::BUILDING, ScrapPeer::SCRAP_DATE_MODIFIED, ScrapPeer::SCRAP_DATE_COMPLETE_MODIFIED, ScrapPeer::REJECT_INDEX_NO, ScrapPeer::CREATED_BY, ScrapPeer::DATE_CREATED, ScrapPeer::MODIFIED_BY, ScrapPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'index_no', 'reject_date', 'scrap_date', 'scrap_complete_date', 'garment_code', 'type', 'size', 'color', 'customer', 'no_of_times_wash', 'number', 'hanger_no', 'inserted_date', 'reject_type', 'department', 'building', 'scrap_date_modified', 'scrap_date_complete_modified', 'reject_index_no', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IndexNo' => 1, 'RejectDate' => 2, 'ScrapDate' => 3, 'ScrapCompleteDate' => 4, 'GarmentCode' => 5, 'Type' => 6, 'Size' => 7, 'Color' => 8, 'Customer' => 9, 'NoOfTimesWash' => 10, 'Number' => 11, 'HangerNo' => 12, 'InsertedDate' => 13, 'RejectType' => 14, 'Department' => 15, 'Building' => 16, 'ScrapDateModified' => 17, 'ScrapDateCompleteModified' => 18, 'RejectIndexNo' => 19, 'CreatedBy' => 20, 'DateCreated' => 21, 'ModifiedBy' => 22, 'DateModified' => 23, ),
		BasePeer::TYPE_COLNAME => array (ScrapPeer::ID => 0, ScrapPeer::INDEX_NO => 1, ScrapPeer::REJECT_DATE => 2, ScrapPeer::SCRAP_DATE => 3, ScrapPeer::SCRAP_COMPLETE_DATE => 4, ScrapPeer::GARMENT_CODE => 5, ScrapPeer::TYPE => 6, ScrapPeer::SIZE => 7, ScrapPeer::COLOR => 8, ScrapPeer::CUSTOMER => 9, ScrapPeer::NO_OF_TIMES_WASH => 10, ScrapPeer::NUMBER => 11, ScrapPeer::HANGER_NO => 12, ScrapPeer::INSERTED_DATE => 13, ScrapPeer::REJECT_TYPE => 14, ScrapPeer::DEPARTMENT => 15, ScrapPeer::BUILDING => 16, ScrapPeer::SCRAP_DATE_MODIFIED => 17, ScrapPeer::SCRAP_DATE_COMPLETE_MODIFIED => 18, ScrapPeer::REJECT_INDEX_NO => 19, ScrapPeer::CREATED_BY => 20, ScrapPeer::DATE_CREATED => 21, ScrapPeer::MODIFIED_BY => 22, ScrapPeer::DATE_MODIFIED => 23, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'index_no' => 1, 'reject_date' => 2, 'scrap_date' => 3, 'scrap_complete_date' => 4, 'garment_code' => 5, 'type' => 6, 'size' => 7, 'color' => 8, 'customer' => 9, 'no_of_times_wash' => 10, 'number' => 11, 'hanger_no' => 12, 'inserted_date' => 13, 'reject_type' => 14, 'department' => 15, 'building' => 16, 'scrap_date_modified' => 17, 'scrap_date_complete_modified' => 18, 'reject_index_no' => 19, 'created_by' => 20, 'date_created' => 21, 'modified_by' => 22, 'date_modified' => 23, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/garment/map/ScrapMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.garment.map.ScrapMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = ScrapPeer::getTableMap();
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
		return str_replace(ScrapPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(ScrapPeer::ID);

		$criteria->addSelectColumn(ScrapPeer::INDEX_NO);

		$criteria->addSelectColumn(ScrapPeer::REJECT_DATE);

		$criteria->addSelectColumn(ScrapPeer::SCRAP_DATE);

		$criteria->addSelectColumn(ScrapPeer::SCRAP_COMPLETE_DATE);

		$criteria->addSelectColumn(ScrapPeer::GARMENT_CODE);

		$criteria->addSelectColumn(ScrapPeer::TYPE);

		$criteria->addSelectColumn(ScrapPeer::SIZE);

		$criteria->addSelectColumn(ScrapPeer::COLOR);

		$criteria->addSelectColumn(ScrapPeer::CUSTOMER);

		$criteria->addSelectColumn(ScrapPeer::NO_OF_TIMES_WASH);

		$criteria->addSelectColumn(ScrapPeer::NUMBER);

		$criteria->addSelectColumn(ScrapPeer::HANGER_NO);

		$criteria->addSelectColumn(ScrapPeer::INSERTED_DATE);

		$criteria->addSelectColumn(ScrapPeer::REJECT_TYPE);

		$criteria->addSelectColumn(ScrapPeer::DEPARTMENT);

		$criteria->addSelectColumn(ScrapPeer::BUILDING);

		$criteria->addSelectColumn(ScrapPeer::SCRAP_DATE_MODIFIED);

		$criteria->addSelectColumn(ScrapPeer::SCRAP_DATE_COMPLETE_MODIFIED);

		$criteria->addSelectColumn(ScrapPeer::REJECT_INDEX_NO);

		$criteria->addSelectColumn(ScrapPeer::CREATED_BY);

		$criteria->addSelectColumn(ScrapPeer::DATE_CREATED);

		$criteria->addSelectColumn(ScrapPeer::MODIFIED_BY);

		$criteria->addSelectColumn(ScrapPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(scrap.INDEX_NO)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT scrap.INDEX_NO)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ScrapPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ScrapPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = ScrapPeer::doSelectRS($criteria, $con);
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
		$objects = ScrapPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return ScrapPeer::populateObjects(ScrapPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			ScrapPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = ScrapPeer::getOMClass();
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
		return ScrapPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(ScrapPeer::INDEX_NO); 

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
			$comparison = $criteria->getComparison(ScrapPeer::INDEX_NO);
			$selectCriteria->add(ScrapPeer::INDEX_NO, $criteria->remove(ScrapPeer::INDEX_NO), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(ScrapPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(ScrapPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Scrap) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ScrapPeer::INDEX_NO, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Scrap $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ScrapPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ScrapPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(ScrapPeer::DATABASE_NAME, ScrapPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = ScrapPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(ScrapPeer::DATABASE_NAME);

		$criteria->add(ScrapPeer::INDEX_NO, $pk);


		$v = ScrapPeer::doSelect($criteria, $con);

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
			$criteria->add(ScrapPeer::INDEX_NO, $pks, Criteria::IN);
			$objs = ScrapPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseScrapPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/garment/map/ScrapMapBuilder.php';
	Propel::registerMapBuilder('lib.model.garment.map.ScrapMapBuilder');
}
