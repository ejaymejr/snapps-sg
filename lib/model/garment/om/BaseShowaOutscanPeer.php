<?php


abstract class BaseShowaOutscanPeer {

	
	const DATABASE_NAME = 'garment';

	
	const TABLE_NAME = 'showa_outscan';

	
	const CLASS_DEFAULT = 'lib.model.garment.ShowaOutscan';

	
	const NUM_COLUMNS = 12;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'showa_outscan.ID';

	
	const GARMENT_CODE = 'showa_outscan.GARMENT_CODE';

	
	const CUSTOMER = 'showa_outscan.CUSTOMER';

	
	const DATE_TIME = 'showa_outscan.DATE_TIME';

	
	const NO_OF_TIMES_WASH = 'showa_outscan.NO_OF_TIMES_WASH';

	
	const TYPE = 'showa_outscan.TYPE';

	
	const SIZE = 'showa_outscan.SIZE';

	
	const COLOR = 'showa_outscan.COLOR';

	
	const NUMBER = 'showa_outscan.NUMBER';

	
	const HANGER_NO = 'showa_outscan.HANGER_NO';

	
	const INSERTED_DATE = 'showa_outscan.INSERTED_DATE';

	
	const STATUS = 'showa_outscan.STATUS';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'GarmentCode', 'Customer', 'DateTime', 'NoOfTimesWash', 'Type', 'Size', 'Color', 'Number', 'HangerNo', 'InsertedDate', 'Status', ),
		BasePeer::TYPE_COLNAME => array (ShowaOutscanPeer::ID, ShowaOutscanPeer::GARMENT_CODE, ShowaOutscanPeer::CUSTOMER, ShowaOutscanPeer::DATE_TIME, ShowaOutscanPeer::NO_OF_TIMES_WASH, ShowaOutscanPeer::TYPE, ShowaOutscanPeer::SIZE, ShowaOutscanPeer::COLOR, ShowaOutscanPeer::NUMBER, ShowaOutscanPeer::HANGER_NO, ShowaOutscanPeer::INSERTED_DATE, ShowaOutscanPeer::STATUS, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'garment_code', 'customer', 'date_time', 'no_of_times_wash', 'type', 'size', 'color', 'number', 'hanger_no', 'inserted_date', 'status', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'GarmentCode' => 1, 'Customer' => 2, 'DateTime' => 3, 'NoOfTimesWash' => 4, 'Type' => 5, 'Size' => 6, 'Color' => 7, 'Number' => 8, 'HangerNo' => 9, 'InsertedDate' => 10, 'Status' => 11, ),
		BasePeer::TYPE_COLNAME => array (ShowaOutscanPeer::ID => 0, ShowaOutscanPeer::GARMENT_CODE => 1, ShowaOutscanPeer::CUSTOMER => 2, ShowaOutscanPeer::DATE_TIME => 3, ShowaOutscanPeer::NO_OF_TIMES_WASH => 4, ShowaOutscanPeer::TYPE => 5, ShowaOutscanPeer::SIZE => 6, ShowaOutscanPeer::COLOR => 7, ShowaOutscanPeer::NUMBER => 8, ShowaOutscanPeer::HANGER_NO => 9, ShowaOutscanPeer::INSERTED_DATE => 10, ShowaOutscanPeer::STATUS => 11, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'garment_code' => 1, 'customer' => 2, 'date_time' => 3, 'no_of_times_wash' => 4, 'type' => 5, 'size' => 6, 'color' => 7, 'number' => 8, 'hanger_no' => 9, 'inserted_date' => 10, 'status' => 11, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/garment/map/ShowaOutscanMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.garment.map.ShowaOutscanMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = ShowaOutscanPeer::getTableMap();
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
		return str_replace(ShowaOutscanPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(ShowaOutscanPeer::ID);

		$criteria->addSelectColumn(ShowaOutscanPeer::GARMENT_CODE);

		$criteria->addSelectColumn(ShowaOutscanPeer::CUSTOMER);

		$criteria->addSelectColumn(ShowaOutscanPeer::DATE_TIME);

		$criteria->addSelectColumn(ShowaOutscanPeer::NO_OF_TIMES_WASH);

		$criteria->addSelectColumn(ShowaOutscanPeer::TYPE);

		$criteria->addSelectColumn(ShowaOutscanPeer::SIZE);

		$criteria->addSelectColumn(ShowaOutscanPeer::COLOR);

		$criteria->addSelectColumn(ShowaOutscanPeer::NUMBER);

		$criteria->addSelectColumn(ShowaOutscanPeer::HANGER_NO);

		$criteria->addSelectColumn(ShowaOutscanPeer::INSERTED_DATE);

		$criteria->addSelectColumn(ShowaOutscanPeer::STATUS);

	}

	const COUNT = 'COUNT(showa_outscan.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT showa_outscan.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ShowaOutscanPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ShowaOutscanPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = ShowaOutscanPeer::doSelectRS($criteria, $con);
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
		$objects = ShowaOutscanPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return ShowaOutscanPeer::populateObjects(ShowaOutscanPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			ShowaOutscanPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = ShowaOutscanPeer::getOMClass();
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
		return ShowaOutscanPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(ShowaOutscanPeer::ID); 

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
			$comparison = $criteria->getComparison(ShowaOutscanPeer::ID);
			$selectCriteria->add(ShowaOutscanPeer::ID, $criteria->remove(ShowaOutscanPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(ShowaOutscanPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(ShowaOutscanPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof ShowaOutscan) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ShowaOutscanPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(ShowaOutscan $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ShowaOutscanPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ShowaOutscanPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(ShowaOutscanPeer::DATABASE_NAME, ShowaOutscanPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = ShowaOutscanPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(ShowaOutscanPeer::DATABASE_NAME);

		$criteria->add(ShowaOutscanPeer::ID, $pk);


		$v = ShowaOutscanPeer::doSelect($criteria, $con);

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
			$criteria->add(ShowaOutscanPeer::ID, $pks, Criteria::IN);
			$objs = ShowaOutscanPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseShowaOutscanPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/garment/map/ShowaOutscanMapBuilder.php';
	Propel::registerMapBuilder('lib.model.garment.map.ShowaOutscanMapBuilder');
}
