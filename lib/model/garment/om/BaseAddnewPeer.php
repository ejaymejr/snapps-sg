<?php


abstract class BaseAddnewPeer {

	
	const DATABASE_NAME = 'garment';

	
	const TABLE_NAME = 'addnew';

	
	const CLASS_DEFAULT = 'lib.model.garment.Addnew';

	
	const NUM_COLUMNS = 21;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'addnew.ID';

	
	const DATE_TIME = 'addnew.DATE_TIME';

	
	const USER_NAME = 'addnew.USER_NAME';

	
	const EMAIL = 'addnew.EMAIL';

	
	const NAME = 'addnew.NAME';

	
	const NUMBER = 'addnew.NUMBER';

	
	const HANGER_NO = 'addnew.HANGER_NO';

	
	const JOB_TITLE = 'addnew.JOB_TITLE';

	
	const DEPARTMENT = 'addnew.DEPARTMENT';

	
	const SHIFT = 'addnew.SHIFT';

	
	const DATE_EMPLOYED = 'addnew.DATE_EMPLOYED';

	
	const JUMPSUIT_W_HOOD_SIZE = 'addnew.JUMPSUIT_W_HOOD_SIZE';

	
	const JUMPSUIT_SIZE = 'addnew.JUMPSUIT_SIZE';

	
	const BOOTIES_SIZE = 'addnew.BOOTIES_SIZE';

	
	const HOOD_SIZE = 'addnew.HOOD_SIZE';

	
	const LABCOAT_SIZE = 'addnew.LABCOAT_SIZE';

	
	const SHOE_SIZE = 'addnew.SHOE_SIZE';

	
	const SAFETY_SHOE_SIZE = 'addnew.SAFETY_SHOE_SIZE';

	
	const ADDED = 'addnew.ADDED';

	
	const COMPLETED_DATE = 'addnew.COMPLETED_DATE';

	
	const CUSTOMER = 'addnew.CUSTOMER';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'DateTime', 'UserName', 'Email', 'Name', 'Number', 'HangerNo', 'JobTitle', 'Department', 'Shift', 'DateEmployed', 'JumpsuitWHoodSize', 'JumpsuitSize', 'BootiesSize', 'HoodSize', 'LabcoatSize', 'ShoeSize', 'SafetyShoeSize', 'Added', 'CompletedDate', 'Customer', ),
		BasePeer::TYPE_COLNAME => array (AddnewPeer::ID, AddnewPeer::DATE_TIME, AddnewPeer::USER_NAME, AddnewPeer::EMAIL, AddnewPeer::NAME, AddnewPeer::NUMBER, AddnewPeer::HANGER_NO, AddnewPeer::JOB_TITLE, AddnewPeer::DEPARTMENT, AddnewPeer::SHIFT, AddnewPeer::DATE_EMPLOYED, AddnewPeer::JUMPSUIT_W_HOOD_SIZE, AddnewPeer::JUMPSUIT_SIZE, AddnewPeer::BOOTIES_SIZE, AddnewPeer::HOOD_SIZE, AddnewPeer::LABCOAT_SIZE, AddnewPeer::SHOE_SIZE, AddnewPeer::SAFETY_SHOE_SIZE, AddnewPeer::ADDED, AddnewPeer::COMPLETED_DATE, AddnewPeer::CUSTOMER, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'date_time', 'user_name', 'email', 'name', 'number', 'hanger_no', 'job_title', 'department', 'shift', 'date_employed', 'jumpsuit_w_hood_size', 'jumpsuit_size', 'booties_size', 'hood_size', 'labcoat_size', 'shoe_size', 'safety_shoe_size', 'added', 'completed_date', 'customer', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'DateTime' => 1, 'UserName' => 2, 'Email' => 3, 'Name' => 4, 'Number' => 5, 'HangerNo' => 6, 'JobTitle' => 7, 'Department' => 8, 'Shift' => 9, 'DateEmployed' => 10, 'JumpsuitWHoodSize' => 11, 'JumpsuitSize' => 12, 'BootiesSize' => 13, 'HoodSize' => 14, 'LabcoatSize' => 15, 'ShoeSize' => 16, 'SafetyShoeSize' => 17, 'Added' => 18, 'CompletedDate' => 19, 'Customer' => 20, ),
		BasePeer::TYPE_COLNAME => array (AddnewPeer::ID => 0, AddnewPeer::DATE_TIME => 1, AddnewPeer::USER_NAME => 2, AddnewPeer::EMAIL => 3, AddnewPeer::NAME => 4, AddnewPeer::NUMBER => 5, AddnewPeer::HANGER_NO => 6, AddnewPeer::JOB_TITLE => 7, AddnewPeer::DEPARTMENT => 8, AddnewPeer::SHIFT => 9, AddnewPeer::DATE_EMPLOYED => 10, AddnewPeer::JUMPSUIT_W_HOOD_SIZE => 11, AddnewPeer::JUMPSUIT_SIZE => 12, AddnewPeer::BOOTIES_SIZE => 13, AddnewPeer::HOOD_SIZE => 14, AddnewPeer::LABCOAT_SIZE => 15, AddnewPeer::SHOE_SIZE => 16, AddnewPeer::SAFETY_SHOE_SIZE => 17, AddnewPeer::ADDED => 18, AddnewPeer::COMPLETED_DATE => 19, AddnewPeer::CUSTOMER => 20, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'date_time' => 1, 'user_name' => 2, 'email' => 3, 'name' => 4, 'number' => 5, 'hanger_no' => 6, 'job_title' => 7, 'department' => 8, 'shift' => 9, 'date_employed' => 10, 'jumpsuit_w_hood_size' => 11, 'jumpsuit_size' => 12, 'booties_size' => 13, 'hood_size' => 14, 'labcoat_size' => 15, 'shoe_size' => 16, 'safety_shoe_size' => 17, 'added' => 18, 'completed_date' => 19, 'customer' => 20, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/garment/map/AddnewMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.garment.map.AddnewMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = AddnewPeer::getTableMap();
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
		return str_replace(AddnewPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(AddnewPeer::ID);

		$criteria->addSelectColumn(AddnewPeer::DATE_TIME);

		$criteria->addSelectColumn(AddnewPeer::USER_NAME);

		$criteria->addSelectColumn(AddnewPeer::EMAIL);

		$criteria->addSelectColumn(AddnewPeer::NAME);

		$criteria->addSelectColumn(AddnewPeer::NUMBER);

		$criteria->addSelectColumn(AddnewPeer::HANGER_NO);

		$criteria->addSelectColumn(AddnewPeer::JOB_TITLE);

		$criteria->addSelectColumn(AddnewPeer::DEPARTMENT);

		$criteria->addSelectColumn(AddnewPeer::SHIFT);

		$criteria->addSelectColumn(AddnewPeer::DATE_EMPLOYED);

		$criteria->addSelectColumn(AddnewPeer::JUMPSUIT_W_HOOD_SIZE);

		$criteria->addSelectColumn(AddnewPeer::JUMPSUIT_SIZE);

		$criteria->addSelectColumn(AddnewPeer::BOOTIES_SIZE);

		$criteria->addSelectColumn(AddnewPeer::HOOD_SIZE);

		$criteria->addSelectColumn(AddnewPeer::LABCOAT_SIZE);

		$criteria->addSelectColumn(AddnewPeer::SHOE_SIZE);

		$criteria->addSelectColumn(AddnewPeer::SAFETY_SHOE_SIZE);

		$criteria->addSelectColumn(AddnewPeer::ADDED);

		$criteria->addSelectColumn(AddnewPeer::COMPLETED_DATE);

		$criteria->addSelectColumn(AddnewPeer::CUSTOMER);

	}

	const COUNT = 'COUNT(addnew.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT addnew.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(AddnewPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(AddnewPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = AddnewPeer::doSelectRS($criteria, $con);
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
		$objects = AddnewPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return AddnewPeer::populateObjects(AddnewPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			AddnewPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = AddnewPeer::getOMClass();
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
		return AddnewPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(AddnewPeer::ID); 

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
			$comparison = $criteria->getComparison(AddnewPeer::ID);
			$selectCriteria->add(AddnewPeer::ID, $criteria->remove(AddnewPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(AddnewPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(AddnewPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Addnew) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(AddnewPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Addnew $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(AddnewPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(AddnewPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(AddnewPeer::DATABASE_NAME, AddnewPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = AddnewPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(AddnewPeer::DATABASE_NAME);

		$criteria->add(AddnewPeer::ID, $pk);


		$v = AddnewPeer::doSelect($criteria, $con);

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
			$criteria->add(AddnewPeer::ID, $pks, Criteria::IN);
			$objs = AddnewPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseAddnewPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/garment/map/AddnewMapBuilder.php';
	Propel::registerMapBuilder('lib.model.garment.map.AddnewMapBuilder');
}
