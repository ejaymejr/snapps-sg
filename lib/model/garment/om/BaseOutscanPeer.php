<?php


abstract class BaseOutscanPeer {

	
	const DATABASE_NAME = 'garment';

	
	const TABLE_NAME = 'outscan';

	
	const CLASS_DEFAULT = 'lib.model.garment.Outscan';

	
	const NUM_COLUMNS = 17;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'outscan.ID';

	
	const GARMENT_CODE = 'outscan.GARMENT_CODE';

	
	const CUSTOMER = 'outscan.CUSTOMER';

	
	const DATE_TIME = 'outscan.DATE_TIME';

	
	const NO_OF_TIMES_WASH = 'outscan.NO_OF_TIMES_WASH';

	
	const TYPE = 'outscan.TYPE';

	
	const SIZE = 'outscan.SIZE';

	
	const COLOR = 'outscan.COLOR';

	
	const NUMBER = 'outscan.NUMBER';

	
	const HANGER_NO = 'outscan.HANGER_NO';

	
	const INSERTED_DATE = 'outscan.INSERTED_DATE';

	
	const STATUS = 'outscan.STATUS';

	
	const DO_NUMBER = 'outscan.DO_NUMBER';

	
	const CREATED_BY = 'outscan.CREATED_BY';

	
	const DATE_CREATED = 'outscan.DATE_CREATED';

	
	const MODIFIED_BY = 'outscan.MODIFIED_BY';

	
	const DATE_MODIFIED = 'outscan.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'GarmentCode', 'Customer', 'DateTime', 'NoOfTimesWash', 'Type', 'Size', 'Color', 'Number', 'HangerNo', 'InsertedDate', 'Status', 'DoNumber', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (OutscanPeer::ID, OutscanPeer::GARMENT_CODE, OutscanPeer::CUSTOMER, OutscanPeer::DATE_TIME, OutscanPeer::NO_OF_TIMES_WASH, OutscanPeer::TYPE, OutscanPeer::SIZE, OutscanPeer::COLOR, OutscanPeer::NUMBER, OutscanPeer::HANGER_NO, OutscanPeer::INSERTED_DATE, OutscanPeer::STATUS, OutscanPeer::DO_NUMBER, OutscanPeer::CREATED_BY, OutscanPeer::DATE_CREATED, OutscanPeer::MODIFIED_BY, OutscanPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'garment_code', 'customer', 'date_time', 'no_of_times_wash', 'type', 'size', 'color', 'number', 'hanger_no', 'inserted_date', 'status', 'do_number', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'GarmentCode' => 1, 'Customer' => 2, 'DateTime' => 3, 'NoOfTimesWash' => 4, 'Type' => 5, 'Size' => 6, 'Color' => 7, 'Number' => 8, 'HangerNo' => 9, 'InsertedDate' => 10, 'Status' => 11, 'DoNumber' => 12, 'CreatedBy' => 13, 'DateCreated' => 14, 'ModifiedBy' => 15, 'DateModified' => 16, ),
		BasePeer::TYPE_COLNAME => array (OutscanPeer::ID => 0, OutscanPeer::GARMENT_CODE => 1, OutscanPeer::CUSTOMER => 2, OutscanPeer::DATE_TIME => 3, OutscanPeer::NO_OF_TIMES_WASH => 4, OutscanPeer::TYPE => 5, OutscanPeer::SIZE => 6, OutscanPeer::COLOR => 7, OutscanPeer::NUMBER => 8, OutscanPeer::HANGER_NO => 9, OutscanPeer::INSERTED_DATE => 10, OutscanPeer::STATUS => 11, OutscanPeer::DO_NUMBER => 12, OutscanPeer::CREATED_BY => 13, OutscanPeer::DATE_CREATED => 14, OutscanPeer::MODIFIED_BY => 15, OutscanPeer::DATE_MODIFIED => 16, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'garment_code' => 1, 'customer' => 2, 'date_time' => 3, 'no_of_times_wash' => 4, 'type' => 5, 'size' => 6, 'color' => 7, 'number' => 8, 'hanger_no' => 9, 'inserted_date' => 10, 'status' => 11, 'do_number' => 12, 'created_by' => 13, 'date_created' => 14, 'modified_by' => 15, 'date_modified' => 16, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/garment/map/OutscanMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.garment.map.OutscanMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = OutscanPeer::getTableMap();
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
		return str_replace(OutscanPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(OutscanPeer::ID);

		$criteria->addSelectColumn(OutscanPeer::GARMENT_CODE);

		$criteria->addSelectColumn(OutscanPeer::CUSTOMER);

		$criteria->addSelectColumn(OutscanPeer::DATE_TIME);

		$criteria->addSelectColumn(OutscanPeer::NO_OF_TIMES_WASH);

		$criteria->addSelectColumn(OutscanPeer::TYPE);

		$criteria->addSelectColumn(OutscanPeer::SIZE);

		$criteria->addSelectColumn(OutscanPeer::COLOR);

		$criteria->addSelectColumn(OutscanPeer::NUMBER);

		$criteria->addSelectColumn(OutscanPeer::HANGER_NO);

		$criteria->addSelectColumn(OutscanPeer::INSERTED_DATE);

		$criteria->addSelectColumn(OutscanPeer::STATUS);

		$criteria->addSelectColumn(OutscanPeer::DO_NUMBER);

		$criteria->addSelectColumn(OutscanPeer::CREATED_BY);

		$criteria->addSelectColumn(OutscanPeer::DATE_CREATED);

		$criteria->addSelectColumn(OutscanPeer::MODIFIED_BY);

		$criteria->addSelectColumn(OutscanPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(outscan.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT outscan.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(OutscanPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(OutscanPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = OutscanPeer::doSelectRS($criteria, $con);
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
		$objects = OutscanPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return OutscanPeer::populateObjects(OutscanPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			OutscanPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = OutscanPeer::getOMClass();
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
		return OutscanPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(OutscanPeer::ID); 

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
			$comparison = $criteria->getComparison(OutscanPeer::ID);
			$selectCriteria->add(OutscanPeer::ID, $criteria->remove(OutscanPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(OutscanPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(OutscanPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Outscan) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(OutscanPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Outscan $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(OutscanPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(OutscanPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(OutscanPeer::DATABASE_NAME, OutscanPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = OutscanPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(OutscanPeer::DATABASE_NAME);

		$criteria->add(OutscanPeer::ID, $pk);


		$v = OutscanPeer::doSelect($criteria, $con);

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
			$criteria->add(OutscanPeer::ID, $pks, Criteria::IN);
			$objs = OutscanPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseOutscanPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/garment/map/OutscanMapBuilder.php';
	Propel::registerMapBuilder('lib.model.garment.map.OutscanMapBuilder');
}
