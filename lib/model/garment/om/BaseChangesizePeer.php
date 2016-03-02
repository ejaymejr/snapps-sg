<?php


abstract class BaseChangesizePeer {

	
	const DATABASE_NAME = 'garment';

	
	const TABLE_NAME = 'changesize';

	
	const CLASS_DEFAULT = 'lib.model.garment.Changesize';

	
	const NUM_COLUMNS = 18;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'changesize.ID';

	
	const DATE_TIME = 'changesize.DATE_TIME';

	
	const USER_NAME = 'changesize.USER_NAME';

	
	const EMAIL = 'changesize.EMAIL';

	
	const NAME = 'changesize.NAME';

	
	const NUMBER = 'changesize.NUMBER';

	
	const DEPARTMENT = 'changesize.DEPARTMENT';

	
	const SHIFT = 'changesize.SHIFT';

	
	const JUMPSUIT_W_HOOD_SIZE = 'changesize.JUMPSUIT_W_HOOD_SIZE';

	
	const JUMPSUIT_SIZE = 'changesize.JUMPSUIT_SIZE';

	
	const BOOTIES_SIZE = 'changesize.BOOTIES_SIZE';

	
	const HOOD_SIZE = 'changesize.HOOD_SIZE';

	
	const LABCOAT_SIZE = 'changesize.LABCOAT_SIZE';

	
	const SHOE_SIZE = 'changesize.SHOE_SIZE';

	
	const SAFETY_SHOE_SIZE = 'changesize.SAFETY_SHOE_SIZE';

	
	const CHANGED = 'changesize.CHANGED';

	
	const COMPLETED_DATE = 'changesize.COMPLETED_DATE';

	
	const CUSTOMER = 'changesize.CUSTOMER';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'DateTime', 'UserName', 'Email', 'Name', 'Number', 'Department', 'Shift', 'JumpsuitWHoodSize', 'JumpsuitSize', 'BootiesSize', 'HoodSize', 'LabcoatSize', 'ShoeSize', 'SafetyShoeSize', 'Changed', 'CompletedDate', 'Customer', ),
		BasePeer::TYPE_COLNAME => array (ChangesizePeer::ID, ChangesizePeer::DATE_TIME, ChangesizePeer::USER_NAME, ChangesizePeer::EMAIL, ChangesizePeer::NAME, ChangesizePeer::NUMBER, ChangesizePeer::DEPARTMENT, ChangesizePeer::SHIFT, ChangesizePeer::JUMPSUIT_W_HOOD_SIZE, ChangesizePeer::JUMPSUIT_SIZE, ChangesizePeer::BOOTIES_SIZE, ChangesizePeer::HOOD_SIZE, ChangesizePeer::LABCOAT_SIZE, ChangesizePeer::SHOE_SIZE, ChangesizePeer::SAFETY_SHOE_SIZE, ChangesizePeer::CHANGED, ChangesizePeer::COMPLETED_DATE, ChangesizePeer::CUSTOMER, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'date_time', 'user_name', 'email', 'name', 'number', 'department', 'shift', 'jumpsuit_w_hood_size', 'jumpsuit_size', 'booties_size', 'hood_size', 'labcoat_size', 'shoe_size', 'safety_shoe_size', 'changed', 'completed_date', 'customer', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'DateTime' => 1, 'UserName' => 2, 'Email' => 3, 'Name' => 4, 'Number' => 5, 'Department' => 6, 'Shift' => 7, 'JumpsuitWHoodSize' => 8, 'JumpsuitSize' => 9, 'BootiesSize' => 10, 'HoodSize' => 11, 'LabcoatSize' => 12, 'ShoeSize' => 13, 'SafetyShoeSize' => 14, 'Changed' => 15, 'CompletedDate' => 16, 'Customer' => 17, ),
		BasePeer::TYPE_COLNAME => array (ChangesizePeer::ID => 0, ChangesizePeer::DATE_TIME => 1, ChangesizePeer::USER_NAME => 2, ChangesizePeer::EMAIL => 3, ChangesizePeer::NAME => 4, ChangesizePeer::NUMBER => 5, ChangesizePeer::DEPARTMENT => 6, ChangesizePeer::SHIFT => 7, ChangesizePeer::JUMPSUIT_W_HOOD_SIZE => 8, ChangesizePeer::JUMPSUIT_SIZE => 9, ChangesizePeer::BOOTIES_SIZE => 10, ChangesizePeer::HOOD_SIZE => 11, ChangesizePeer::LABCOAT_SIZE => 12, ChangesizePeer::SHOE_SIZE => 13, ChangesizePeer::SAFETY_SHOE_SIZE => 14, ChangesizePeer::CHANGED => 15, ChangesizePeer::COMPLETED_DATE => 16, ChangesizePeer::CUSTOMER => 17, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'date_time' => 1, 'user_name' => 2, 'email' => 3, 'name' => 4, 'number' => 5, 'department' => 6, 'shift' => 7, 'jumpsuit_w_hood_size' => 8, 'jumpsuit_size' => 9, 'booties_size' => 10, 'hood_size' => 11, 'labcoat_size' => 12, 'shoe_size' => 13, 'safety_shoe_size' => 14, 'changed' => 15, 'completed_date' => 16, 'customer' => 17, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/garment/map/ChangesizeMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.garment.map.ChangesizeMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = ChangesizePeer::getTableMap();
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
		return str_replace(ChangesizePeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(ChangesizePeer::ID);

		$criteria->addSelectColumn(ChangesizePeer::DATE_TIME);

		$criteria->addSelectColumn(ChangesizePeer::USER_NAME);

		$criteria->addSelectColumn(ChangesizePeer::EMAIL);

		$criteria->addSelectColumn(ChangesizePeer::NAME);

		$criteria->addSelectColumn(ChangesizePeer::NUMBER);

		$criteria->addSelectColumn(ChangesizePeer::DEPARTMENT);

		$criteria->addSelectColumn(ChangesizePeer::SHIFT);

		$criteria->addSelectColumn(ChangesizePeer::JUMPSUIT_W_HOOD_SIZE);

		$criteria->addSelectColumn(ChangesizePeer::JUMPSUIT_SIZE);

		$criteria->addSelectColumn(ChangesizePeer::BOOTIES_SIZE);

		$criteria->addSelectColumn(ChangesizePeer::HOOD_SIZE);

		$criteria->addSelectColumn(ChangesizePeer::LABCOAT_SIZE);

		$criteria->addSelectColumn(ChangesizePeer::SHOE_SIZE);

		$criteria->addSelectColumn(ChangesizePeer::SAFETY_SHOE_SIZE);

		$criteria->addSelectColumn(ChangesizePeer::CHANGED);

		$criteria->addSelectColumn(ChangesizePeer::COMPLETED_DATE);

		$criteria->addSelectColumn(ChangesizePeer::CUSTOMER);

	}

	const COUNT = 'COUNT(changesize.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT changesize.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ChangesizePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ChangesizePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = ChangesizePeer::doSelectRS($criteria, $con);
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
		$objects = ChangesizePeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return ChangesizePeer::populateObjects(ChangesizePeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			ChangesizePeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = ChangesizePeer::getOMClass();
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
		return ChangesizePeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(ChangesizePeer::ID); 

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
			$comparison = $criteria->getComparison(ChangesizePeer::ID);
			$selectCriteria->add(ChangesizePeer::ID, $criteria->remove(ChangesizePeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(ChangesizePeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(ChangesizePeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Changesize) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ChangesizePeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Changesize $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ChangesizePeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ChangesizePeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(ChangesizePeer::DATABASE_NAME, ChangesizePeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = ChangesizePeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(ChangesizePeer::DATABASE_NAME);

		$criteria->add(ChangesizePeer::ID, $pk);


		$v = ChangesizePeer::doSelect($criteria, $con);

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
			$criteria->add(ChangesizePeer::ID, $pks, Criteria::IN);
			$objs = ChangesizePeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseChangesizePeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/garment/map/ChangesizeMapBuilder.php';
	Propel::registerMapBuilder('lib.model.garment.map.ChangesizeMapBuilder');
}
