<?php


abstract class BaseCheckDoWearerinformationPeer {

	
	const DATABASE_NAME = 'garment';

	
	const TABLE_NAME = 'check_do_wearerInformation';

	
	const CLASS_DEFAULT = 'lib.model.garment.CheckDoWearerinformation';

	
	const NUM_COLUMNS = 12;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'check_do_wearerInformation.ID';

	
	const NUMBER = 'check_do_wearerInformation.NUMBER';

	
	const NAME = 'check_do_wearerInformation.NAME';

	
	const JOB_TITLE = 'check_do_wearerInformation.JOB_TITLE';

	
	const ACCESS_LEVEL = 'check_do_wearerInformation.ACCESS_LEVEL';

	
	const PASSWORD = 'check_do_wearerInformation.PASSWORD';

	
	const EMAIL = 'check_do_wearerInformation.EMAIL';

	
	const CUSTOMER_ID = 'check_do_wearerInformation.CUSTOMER_ID';

	
	const CUSTOMER = 'check_do_wearerInformation.CUSTOMER';

	
	const ALLOW_ACCESS = 'check_do_wearerInformation.ALLOW_ACCESS';

	
	const DEPARTMENT = 'check_do_wearerInformation.DEPARTMENT';

	
	const SHIFT = 'check_do_wearerInformation.SHIFT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Number', 'Name', 'JobTitle', 'AccessLevel', 'Password', 'Email', 'CustomerId', 'Customer', 'AllowAccess', 'Department', 'Shift', ),
		BasePeer::TYPE_COLNAME => array (CheckDoWearerinformationPeer::ID, CheckDoWearerinformationPeer::NUMBER, CheckDoWearerinformationPeer::NAME, CheckDoWearerinformationPeer::JOB_TITLE, CheckDoWearerinformationPeer::ACCESS_LEVEL, CheckDoWearerinformationPeer::PASSWORD, CheckDoWearerinformationPeer::EMAIL, CheckDoWearerinformationPeer::CUSTOMER_ID, CheckDoWearerinformationPeer::CUSTOMER, CheckDoWearerinformationPeer::ALLOW_ACCESS, CheckDoWearerinformationPeer::DEPARTMENT, CheckDoWearerinformationPeer::SHIFT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'number', 'name', 'job_title', 'access_level', 'password', 'email', 'customer_id', 'customer', 'allow_access', 'department', 'shift', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Number' => 1, 'Name' => 2, 'JobTitle' => 3, 'AccessLevel' => 4, 'Password' => 5, 'Email' => 6, 'CustomerId' => 7, 'Customer' => 8, 'AllowAccess' => 9, 'Department' => 10, 'Shift' => 11, ),
		BasePeer::TYPE_COLNAME => array (CheckDoWearerinformationPeer::ID => 0, CheckDoWearerinformationPeer::NUMBER => 1, CheckDoWearerinformationPeer::NAME => 2, CheckDoWearerinformationPeer::JOB_TITLE => 3, CheckDoWearerinformationPeer::ACCESS_LEVEL => 4, CheckDoWearerinformationPeer::PASSWORD => 5, CheckDoWearerinformationPeer::EMAIL => 6, CheckDoWearerinformationPeer::CUSTOMER_ID => 7, CheckDoWearerinformationPeer::CUSTOMER => 8, CheckDoWearerinformationPeer::ALLOW_ACCESS => 9, CheckDoWearerinformationPeer::DEPARTMENT => 10, CheckDoWearerinformationPeer::SHIFT => 11, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'number' => 1, 'name' => 2, 'job_title' => 3, 'access_level' => 4, 'password' => 5, 'email' => 6, 'customer_id' => 7, 'customer' => 8, 'allow_access' => 9, 'department' => 10, 'shift' => 11, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/garment/map/CheckDoWearerinformationMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.garment.map.CheckDoWearerinformationMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = CheckDoWearerinformationPeer::getTableMap();
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
		return str_replace(CheckDoWearerinformationPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(CheckDoWearerinformationPeer::ID);

		$criteria->addSelectColumn(CheckDoWearerinformationPeer::NUMBER);

		$criteria->addSelectColumn(CheckDoWearerinformationPeer::NAME);

		$criteria->addSelectColumn(CheckDoWearerinformationPeer::JOB_TITLE);

		$criteria->addSelectColumn(CheckDoWearerinformationPeer::ACCESS_LEVEL);

		$criteria->addSelectColumn(CheckDoWearerinformationPeer::PASSWORD);

		$criteria->addSelectColumn(CheckDoWearerinformationPeer::EMAIL);

		$criteria->addSelectColumn(CheckDoWearerinformationPeer::CUSTOMER_ID);

		$criteria->addSelectColumn(CheckDoWearerinformationPeer::CUSTOMER);

		$criteria->addSelectColumn(CheckDoWearerinformationPeer::ALLOW_ACCESS);

		$criteria->addSelectColumn(CheckDoWearerinformationPeer::DEPARTMENT);

		$criteria->addSelectColumn(CheckDoWearerinformationPeer::SHIFT);

	}

	const COUNT = 'COUNT(check_do_wearerInformation.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT check_do_wearerInformation.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(CheckDoWearerinformationPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CheckDoWearerinformationPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = CheckDoWearerinformationPeer::doSelectRS($criteria, $con);
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
		$objects = CheckDoWearerinformationPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return CheckDoWearerinformationPeer::populateObjects(CheckDoWearerinformationPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			CheckDoWearerinformationPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = CheckDoWearerinformationPeer::getOMClass();
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
		return CheckDoWearerinformationPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(CheckDoWearerinformationPeer::ID); 

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
			$comparison = $criteria->getComparison(CheckDoWearerinformationPeer::ID);
			$selectCriteria->add(CheckDoWearerinformationPeer::ID, $criteria->remove(CheckDoWearerinformationPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(CheckDoWearerinformationPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(CheckDoWearerinformationPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof CheckDoWearerinformation) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(CheckDoWearerinformationPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(CheckDoWearerinformation $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(CheckDoWearerinformationPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(CheckDoWearerinformationPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(CheckDoWearerinformationPeer::DATABASE_NAME, CheckDoWearerinformationPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = CheckDoWearerinformationPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(CheckDoWearerinformationPeer::DATABASE_NAME);

		$criteria->add(CheckDoWearerinformationPeer::ID, $pk);


		$v = CheckDoWearerinformationPeer::doSelect($criteria, $con);

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
			$criteria->add(CheckDoWearerinformationPeer::ID, $pks, Criteria::IN);
			$objs = CheckDoWearerinformationPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseCheckDoWearerinformationPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/garment/map/CheckDoWearerinformationMapBuilder.php';
	Propel::registerMapBuilder('lib.model.garment.map.CheckDoWearerinformationMapBuilder');
}
