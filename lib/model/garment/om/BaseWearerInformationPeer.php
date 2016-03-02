<?php


abstract class BaseWearerInformationPeer {

	
	const DATABASE_NAME = 'garment';

	
	const TABLE_NAME = 'wearer_information';

	
	const CLASS_DEFAULT = 'lib.model.garment.WearerInformation';

	
	const NUM_COLUMNS = 13;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'wearer_information.ID';

	
	const NUMBER = 'wearer_information.NUMBER';

	
	const NAME = 'wearer_information.NAME';

	
	const JOB_TITLE = 'wearer_information.JOB_TITLE';

	
	const ACCESS_LEVEL = 'wearer_information.ACCESS_LEVEL';

	
	const PASSWORD = 'wearer_information.PASSWORD';

	
	const EMAIL = 'wearer_information.EMAIL';

	
	const CUSTOMER_ID = 'wearer_information.CUSTOMER_ID';

	
	const CUSTOMER = 'wearer_information.CUSTOMER';

	
	const ALLOW_ACCESS = 'wearer_information.ALLOW_ACCESS';

	
	const DATE_CREATED = 'wearer_information.DATE_CREATED';

	
	const MODIFIED_BY = 'wearer_information.MODIFIED_BY';

	
	const DATE_MODIFIED = 'wearer_information.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Number', 'Name', 'JobTitle', 'AccessLevel', 'Password', 'Email', 'CustomerId', 'Customer', 'AllowAccess', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (WearerInformationPeer::ID, WearerInformationPeer::NUMBER, WearerInformationPeer::NAME, WearerInformationPeer::JOB_TITLE, WearerInformationPeer::ACCESS_LEVEL, WearerInformationPeer::PASSWORD, WearerInformationPeer::EMAIL, WearerInformationPeer::CUSTOMER_ID, WearerInformationPeer::CUSTOMER, WearerInformationPeer::ALLOW_ACCESS, WearerInformationPeer::DATE_CREATED, WearerInformationPeer::MODIFIED_BY, WearerInformationPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'number', 'name', 'job_title', 'access_level', 'password', 'email', 'customer_id', 'customer', 'allow_access', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Number' => 1, 'Name' => 2, 'JobTitle' => 3, 'AccessLevel' => 4, 'Password' => 5, 'Email' => 6, 'CustomerId' => 7, 'Customer' => 8, 'AllowAccess' => 9, 'DateCreated' => 10, 'ModifiedBy' => 11, 'DateModified' => 12, ),
		BasePeer::TYPE_COLNAME => array (WearerInformationPeer::ID => 0, WearerInformationPeer::NUMBER => 1, WearerInformationPeer::NAME => 2, WearerInformationPeer::JOB_TITLE => 3, WearerInformationPeer::ACCESS_LEVEL => 4, WearerInformationPeer::PASSWORD => 5, WearerInformationPeer::EMAIL => 6, WearerInformationPeer::CUSTOMER_ID => 7, WearerInformationPeer::CUSTOMER => 8, WearerInformationPeer::ALLOW_ACCESS => 9, WearerInformationPeer::DATE_CREATED => 10, WearerInformationPeer::MODIFIED_BY => 11, WearerInformationPeer::DATE_MODIFIED => 12, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'number' => 1, 'name' => 2, 'job_title' => 3, 'access_level' => 4, 'password' => 5, 'email' => 6, 'customer_id' => 7, 'customer' => 8, 'allow_access' => 9, 'date_created' => 10, 'modified_by' => 11, 'date_modified' => 12, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/garment/map/WearerInformationMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.garment.map.WearerInformationMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = WearerInformationPeer::getTableMap();
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
		return str_replace(WearerInformationPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(WearerInformationPeer::ID);

		$criteria->addSelectColumn(WearerInformationPeer::NUMBER);

		$criteria->addSelectColumn(WearerInformationPeer::NAME);

		$criteria->addSelectColumn(WearerInformationPeer::JOB_TITLE);

		$criteria->addSelectColumn(WearerInformationPeer::ACCESS_LEVEL);

		$criteria->addSelectColumn(WearerInformationPeer::PASSWORD);

		$criteria->addSelectColumn(WearerInformationPeer::EMAIL);

		$criteria->addSelectColumn(WearerInformationPeer::CUSTOMER_ID);

		$criteria->addSelectColumn(WearerInformationPeer::CUSTOMER);

		$criteria->addSelectColumn(WearerInformationPeer::ALLOW_ACCESS);

		$criteria->addSelectColumn(WearerInformationPeer::DATE_CREATED);

		$criteria->addSelectColumn(WearerInformationPeer::MODIFIED_BY);

		$criteria->addSelectColumn(WearerInformationPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(wearer_information.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT wearer_information.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(WearerInformationPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(WearerInformationPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = WearerInformationPeer::doSelectRS($criteria, $con);
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
		$objects = WearerInformationPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return WearerInformationPeer::populateObjects(WearerInformationPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			WearerInformationPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = WearerInformationPeer::getOMClass();
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
		return WearerInformationPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(WearerInformationPeer::ID); 

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
			$comparison = $criteria->getComparison(WearerInformationPeer::ID);
			$selectCriteria->add(WearerInformationPeer::ID, $criteria->remove(WearerInformationPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(WearerInformationPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(WearerInformationPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof WearerInformation) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(WearerInformationPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(WearerInformation $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(WearerInformationPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(WearerInformationPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(WearerInformationPeer::DATABASE_NAME, WearerInformationPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = WearerInformationPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(WearerInformationPeer::DATABASE_NAME);

		$criteria->add(WearerInformationPeer::ID, $pk);


		$v = WearerInformationPeer::doSelect($criteria, $con);

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
			$criteria->add(WearerInformationPeer::ID, $pks, Criteria::IN);
			$objs = WearerInformationPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseWearerInformationPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/garment/map/WearerInformationMapBuilder.php';
	Propel::registerMapBuilder('lib.model.garment.map.WearerInformationMapBuilder');
}
