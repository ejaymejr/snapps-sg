<?php


abstract class BaseMissingPeer {

	
	const DATABASE_NAME = 'garment';

	
	const TABLE_NAME = 'missing';

	
	const CLASS_DEFAULT = 'lib.model.garment.Missing';

	
	const NUM_COLUMNS = 16;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'missing.ID';

	
	const DATE_TIME = 'missing.DATE_TIME';

	
	const USER_NAME = 'missing.USER_NAME';

	
	const EMAIL = 'missing.EMAIL';

	
	const NAME = 'missing.NAME';

	
	const NUMBER = 'missing.NUMBER';

	
	const DEPARTMENT = 'missing.DEPARTMENT';

	
	const SHIFT = 'missing.SHIFT';

	
	const JOB_TITLE = 'missing.JOB_TITLE';

	
	const TYPE = 'missing.TYPE';

	
	const REASONLOG = 'missing.REASONLOG';

	
	const REMARKS = 'missing.REMARKS';

	
	const REPLACED = 'missing.REPLACED';

	
	const REPAIRED = 'missing.REPAIRED';

	
	const COMPLETED_DATE = 'missing.COMPLETED_DATE';

	
	const CUSTOMER = 'missing.CUSTOMER';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'DateTime', 'UserName', 'Email', 'Name', 'Number', 'Department', 'Shift', 'JobTitle', 'Type', 'Reasonlog', 'Remarks', 'Replaced', 'Repaired', 'CompletedDate', 'Customer', ),
		BasePeer::TYPE_COLNAME => array (MissingPeer::ID, MissingPeer::DATE_TIME, MissingPeer::USER_NAME, MissingPeer::EMAIL, MissingPeer::NAME, MissingPeer::NUMBER, MissingPeer::DEPARTMENT, MissingPeer::SHIFT, MissingPeer::JOB_TITLE, MissingPeer::TYPE, MissingPeer::REASONLOG, MissingPeer::REMARKS, MissingPeer::REPLACED, MissingPeer::REPAIRED, MissingPeer::COMPLETED_DATE, MissingPeer::CUSTOMER, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'date_time', 'user_name', 'email', 'name', 'number', 'department', 'shift', 'job_title', 'type', 'reasonlog', 'remarks', 'replaced', 'repaired', 'completed_date', 'customer', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'DateTime' => 1, 'UserName' => 2, 'Email' => 3, 'Name' => 4, 'Number' => 5, 'Department' => 6, 'Shift' => 7, 'JobTitle' => 8, 'Type' => 9, 'Reasonlog' => 10, 'Remarks' => 11, 'Replaced' => 12, 'Repaired' => 13, 'CompletedDate' => 14, 'Customer' => 15, ),
		BasePeer::TYPE_COLNAME => array (MissingPeer::ID => 0, MissingPeer::DATE_TIME => 1, MissingPeer::USER_NAME => 2, MissingPeer::EMAIL => 3, MissingPeer::NAME => 4, MissingPeer::NUMBER => 5, MissingPeer::DEPARTMENT => 6, MissingPeer::SHIFT => 7, MissingPeer::JOB_TITLE => 8, MissingPeer::TYPE => 9, MissingPeer::REASONLOG => 10, MissingPeer::REMARKS => 11, MissingPeer::REPLACED => 12, MissingPeer::REPAIRED => 13, MissingPeer::COMPLETED_DATE => 14, MissingPeer::CUSTOMER => 15, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'date_time' => 1, 'user_name' => 2, 'email' => 3, 'name' => 4, 'number' => 5, 'department' => 6, 'shift' => 7, 'job_title' => 8, 'type' => 9, 'reasonlog' => 10, 'remarks' => 11, 'replaced' => 12, 'repaired' => 13, 'completed_date' => 14, 'customer' => 15, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/garment/map/MissingMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.garment.map.MissingMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = MissingPeer::getTableMap();
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
		return str_replace(MissingPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(MissingPeer::ID);

		$criteria->addSelectColumn(MissingPeer::DATE_TIME);

		$criteria->addSelectColumn(MissingPeer::USER_NAME);

		$criteria->addSelectColumn(MissingPeer::EMAIL);

		$criteria->addSelectColumn(MissingPeer::NAME);

		$criteria->addSelectColumn(MissingPeer::NUMBER);

		$criteria->addSelectColumn(MissingPeer::DEPARTMENT);

		$criteria->addSelectColumn(MissingPeer::SHIFT);

		$criteria->addSelectColumn(MissingPeer::JOB_TITLE);

		$criteria->addSelectColumn(MissingPeer::TYPE);

		$criteria->addSelectColumn(MissingPeer::REASONLOG);

		$criteria->addSelectColumn(MissingPeer::REMARKS);

		$criteria->addSelectColumn(MissingPeer::REPLACED);

		$criteria->addSelectColumn(MissingPeer::REPAIRED);

		$criteria->addSelectColumn(MissingPeer::COMPLETED_DATE);

		$criteria->addSelectColumn(MissingPeer::CUSTOMER);

	}

	const COUNT = 'COUNT(missing.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT missing.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(MissingPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(MissingPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = MissingPeer::doSelectRS($criteria, $con);
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
		$objects = MissingPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return MissingPeer::populateObjects(MissingPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			MissingPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = MissingPeer::getOMClass();
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
		return MissingPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(MissingPeer::ID); 

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
			$comparison = $criteria->getComparison(MissingPeer::ID);
			$selectCriteria->add(MissingPeer::ID, $criteria->remove(MissingPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(MissingPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(MissingPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Missing) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(MissingPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Missing $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(MissingPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(MissingPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(MissingPeer::DATABASE_NAME, MissingPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = MissingPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(MissingPeer::DATABASE_NAME);

		$criteria->add(MissingPeer::ID, $pk);


		$v = MissingPeer::doSelect($criteria, $con);

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
			$criteria->add(MissingPeer::ID, $pks, Criteria::IN);
			$objs = MissingPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseMissingPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/garment/map/MissingMapBuilder.php';
	Propel::registerMapBuilder('lib.model.garment.map.MissingMapBuilder');
}
