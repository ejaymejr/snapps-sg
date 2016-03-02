<?php


abstract class BaseCheckDoGarmentinformationPeer {

	
	const DATABASE_NAME = 'garment';

	
	const TABLE_NAME = 'check_do_garmentInformation';

	
	const CLASS_DEFAULT = 'lib.model.garment.CheckDoGarmentinformation';

	
	const NUM_COLUMNS = 12;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'check_do_garmentInformation.ID';

	
	const GARMENT_CODE = 'check_do_garmentInformation.GARMENT_CODE';

	
	const TYPE = 'check_do_garmentInformation.TYPE';

	
	const SIZE = 'check_do_garmentInformation.SIZE';

	
	const COLOR = 'check_do_garmentInformation.COLOR';

	
	const CUSTOMER = 'check_do_garmentInformation.CUSTOMER';

	
	const NO_OF_TIMES_WASH = 'check_do_garmentInformation.NO_OF_TIMES_WASH';

	
	const NUMBER = 'check_do_garmentInformation.NUMBER';

	
	const HANGER_NO = 'check_do_garmentInformation.HANGER_NO';

	
	const INSERTED_DATE = 'check_do_garmentInformation.INSERTED_DATE';

	
	const DEPARTMENT = 'check_do_garmentInformation.DEPARTMENT';

	
	const SHIFT = 'check_do_garmentInformation.SHIFT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'GarmentCode', 'Type', 'Size', 'Color', 'Customer', 'NoOfTimesWash', 'Number', 'HangerNo', 'InsertedDate', 'Department', 'Shift', ),
		BasePeer::TYPE_COLNAME => array (CheckDoGarmentinformationPeer::ID, CheckDoGarmentinformationPeer::GARMENT_CODE, CheckDoGarmentinformationPeer::TYPE, CheckDoGarmentinformationPeer::SIZE, CheckDoGarmentinformationPeer::COLOR, CheckDoGarmentinformationPeer::CUSTOMER, CheckDoGarmentinformationPeer::NO_OF_TIMES_WASH, CheckDoGarmentinformationPeer::NUMBER, CheckDoGarmentinformationPeer::HANGER_NO, CheckDoGarmentinformationPeer::INSERTED_DATE, CheckDoGarmentinformationPeer::DEPARTMENT, CheckDoGarmentinformationPeer::SHIFT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'garment_code', 'type', 'size', 'color', 'customer', 'no_of_times_wash', 'number', 'hanger_no', 'inserted_date', 'department', 'shift', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'GarmentCode' => 1, 'Type' => 2, 'Size' => 3, 'Color' => 4, 'Customer' => 5, 'NoOfTimesWash' => 6, 'Number' => 7, 'HangerNo' => 8, 'InsertedDate' => 9, 'Department' => 10, 'Shift' => 11, ),
		BasePeer::TYPE_COLNAME => array (CheckDoGarmentinformationPeer::ID => 0, CheckDoGarmentinformationPeer::GARMENT_CODE => 1, CheckDoGarmentinformationPeer::TYPE => 2, CheckDoGarmentinformationPeer::SIZE => 3, CheckDoGarmentinformationPeer::COLOR => 4, CheckDoGarmentinformationPeer::CUSTOMER => 5, CheckDoGarmentinformationPeer::NO_OF_TIMES_WASH => 6, CheckDoGarmentinformationPeer::NUMBER => 7, CheckDoGarmentinformationPeer::HANGER_NO => 8, CheckDoGarmentinformationPeer::INSERTED_DATE => 9, CheckDoGarmentinformationPeer::DEPARTMENT => 10, CheckDoGarmentinformationPeer::SHIFT => 11, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'garment_code' => 1, 'type' => 2, 'size' => 3, 'color' => 4, 'customer' => 5, 'no_of_times_wash' => 6, 'number' => 7, 'hanger_no' => 8, 'inserted_date' => 9, 'department' => 10, 'shift' => 11, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/garment/map/CheckDoGarmentinformationMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.garment.map.CheckDoGarmentinformationMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = CheckDoGarmentinformationPeer::getTableMap();
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
		return str_replace(CheckDoGarmentinformationPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(CheckDoGarmentinformationPeer::ID);

		$criteria->addSelectColumn(CheckDoGarmentinformationPeer::GARMENT_CODE);

		$criteria->addSelectColumn(CheckDoGarmentinformationPeer::TYPE);

		$criteria->addSelectColumn(CheckDoGarmentinformationPeer::SIZE);

		$criteria->addSelectColumn(CheckDoGarmentinformationPeer::COLOR);

		$criteria->addSelectColumn(CheckDoGarmentinformationPeer::CUSTOMER);

		$criteria->addSelectColumn(CheckDoGarmentinformationPeer::NO_OF_TIMES_WASH);

		$criteria->addSelectColumn(CheckDoGarmentinformationPeer::NUMBER);

		$criteria->addSelectColumn(CheckDoGarmentinformationPeer::HANGER_NO);

		$criteria->addSelectColumn(CheckDoGarmentinformationPeer::INSERTED_DATE);

		$criteria->addSelectColumn(CheckDoGarmentinformationPeer::DEPARTMENT);

		$criteria->addSelectColumn(CheckDoGarmentinformationPeer::SHIFT);

	}

	const COUNT = 'COUNT(check_do_garmentInformation.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT check_do_garmentInformation.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(CheckDoGarmentinformationPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CheckDoGarmentinformationPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = CheckDoGarmentinformationPeer::doSelectRS($criteria, $con);
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
		$objects = CheckDoGarmentinformationPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return CheckDoGarmentinformationPeer::populateObjects(CheckDoGarmentinformationPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			CheckDoGarmentinformationPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = CheckDoGarmentinformationPeer::getOMClass();
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
		return CheckDoGarmentinformationPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(CheckDoGarmentinformationPeer::ID); 

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
			$comparison = $criteria->getComparison(CheckDoGarmentinformationPeer::ID);
			$selectCriteria->add(CheckDoGarmentinformationPeer::ID, $criteria->remove(CheckDoGarmentinformationPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(CheckDoGarmentinformationPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(CheckDoGarmentinformationPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof CheckDoGarmentinformation) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(CheckDoGarmentinformationPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(CheckDoGarmentinformation $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(CheckDoGarmentinformationPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(CheckDoGarmentinformationPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(CheckDoGarmentinformationPeer::DATABASE_NAME, CheckDoGarmentinformationPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = CheckDoGarmentinformationPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(CheckDoGarmentinformationPeer::DATABASE_NAME);

		$criteria->add(CheckDoGarmentinformationPeer::ID, $pk);


		$v = CheckDoGarmentinformationPeer::doSelect($criteria, $con);

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
			$criteria->add(CheckDoGarmentinformationPeer::ID, $pks, Criteria::IN);
			$objs = CheckDoGarmentinformationPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseCheckDoGarmentinformationPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/garment/map/CheckDoGarmentinformationMapBuilder.php';
	Propel::registerMapBuilder('lib.model.garment.map.CheckDoGarmentinformationMapBuilder');
}
