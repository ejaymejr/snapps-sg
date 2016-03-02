<?php


abstract class BaseDeleteuserPeer {

	
	const DATABASE_NAME = 'garment';

	
	const TABLE_NAME = 'deleteuser';

	
	const CLASS_DEFAULT = 'lib.model.garment.Deleteuser';

	
	const NUM_COLUMNS = 12;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'deleteuser.ID';

	
	const DATE_TIME = 'deleteuser.DATE_TIME';

	
	const USER_NAME = 'deleteuser.USER_NAME';

	
	const EMAIL = 'deleteuser.EMAIL';

	
	const NAME = 'deleteuser.NAME';

	
	const NUMBER = 'deleteuser.NUMBER';

	
	const JOB_TITLE = 'deleteuser.JOB_TITLE';

	
	const DEPARTMENT = 'deleteuser.DEPARTMENT';

	
	const SHIFT = 'deleteuser.SHIFT';

	
	const DELETED = 'deleteuser.DELETED';

	
	const COMPLETED_DATE = 'deleteuser.COMPLETED_DATE';

	
	const CUSTOMER = 'deleteuser.CUSTOMER';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'DateTime', 'UserName', 'Email', 'Name', 'Number', 'JobTitle', 'Department', 'Shift', 'Deleted', 'CompletedDate', 'Customer', ),
		BasePeer::TYPE_COLNAME => array (DeleteuserPeer::ID, DeleteuserPeer::DATE_TIME, DeleteuserPeer::USER_NAME, DeleteuserPeer::EMAIL, DeleteuserPeer::NAME, DeleteuserPeer::NUMBER, DeleteuserPeer::JOB_TITLE, DeleteuserPeer::DEPARTMENT, DeleteuserPeer::SHIFT, DeleteuserPeer::DELETED, DeleteuserPeer::COMPLETED_DATE, DeleteuserPeer::CUSTOMER, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'date_time', 'user_name', 'email', 'name', 'number', 'job_title', 'department', 'shift', 'deleted', 'completed_date', 'customer', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'DateTime' => 1, 'UserName' => 2, 'Email' => 3, 'Name' => 4, 'Number' => 5, 'JobTitle' => 6, 'Department' => 7, 'Shift' => 8, 'Deleted' => 9, 'CompletedDate' => 10, 'Customer' => 11, ),
		BasePeer::TYPE_COLNAME => array (DeleteuserPeer::ID => 0, DeleteuserPeer::DATE_TIME => 1, DeleteuserPeer::USER_NAME => 2, DeleteuserPeer::EMAIL => 3, DeleteuserPeer::NAME => 4, DeleteuserPeer::NUMBER => 5, DeleteuserPeer::JOB_TITLE => 6, DeleteuserPeer::DEPARTMENT => 7, DeleteuserPeer::SHIFT => 8, DeleteuserPeer::DELETED => 9, DeleteuserPeer::COMPLETED_DATE => 10, DeleteuserPeer::CUSTOMER => 11, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'date_time' => 1, 'user_name' => 2, 'email' => 3, 'name' => 4, 'number' => 5, 'job_title' => 6, 'department' => 7, 'shift' => 8, 'deleted' => 9, 'completed_date' => 10, 'customer' => 11, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/garment/map/DeleteuserMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.garment.map.DeleteuserMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = DeleteuserPeer::getTableMap();
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
		return str_replace(DeleteuserPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(DeleteuserPeer::ID);

		$criteria->addSelectColumn(DeleteuserPeer::DATE_TIME);

		$criteria->addSelectColumn(DeleteuserPeer::USER_NAME);

		$criteria->addSelectColumn(DeleteuserPeer::EMAIL);

		$criteria->addSelectColumn(DeleteuserPeer::NAME);

		$criteria->addSelectColumn(DeleteuserPeer::NUMBER);

		$criteria->addSelectColumn(DeleteuserPeer::JOB_TITLE);

		$criteria->addSelectColumn(DeleteuserPeer::DEPARTMENT);

		$criteria->addSelectColumn(DeleteuserPeer::SHIFT);

		$criteria->addSelectColumn(DeleteuserPeer::DELETED);

		$criteria->addSelectColumn(DeleteuserPeer::COMPLETED_DATE);

		$criteria->addSelectColumn(DeleteuserPeer::CUSTOMER);

	}

	const COUNT = 'COUNT(deleteuser.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT deleteuser.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(DeleteuserPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(DeleteuserPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = DeleteuserPeer::doSelectRS($criteria, $con);
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
		$objects = DeleteuserPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return DeleteuserPeer::populateObjects(DeleteuserPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			DeleteuserPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = DeleteuserPeer::getOMClass();
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
		return DeleteuserPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(DeleteuserPeer::ID); 

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
			$comparison = $criteria->getComparison(DeleteuserPeer::ID);
			$selectCriteria->add(DeleteuserPeer::ID, $criteria->remove(DeleteuserPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(DeleteuserPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(DeleteuserPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Deleteuser) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(DeleteuserPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Deleteuser $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(DeleteuserPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(DeleteuserPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(DeleteuserPeer::DATABASE_NAME, DeleteuserPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = DeleteuserPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(DeleteuserPeer::DATABASE_NAME);

		$criteria->add(DeleteuserPeer::ID, $pk);


		$v = DeleteuserPeer::doSelect($criteria, $con);

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
			$criteria->add(DeleteuserPeer::ID, $pks, Criteria::IN);
			$objs = DeleteuserPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseDeleteuserPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/garment/map/DeleteuserMapBuilder.php';
	Propel::registerMapBuilder('lib.model.garment.map.DeleteuserMapBuilder');
}
