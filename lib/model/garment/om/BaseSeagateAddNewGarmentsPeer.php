<?php


abstract class BaseSeagateAddNewGarmentsPeer {

	
	const DATABASE_NAME = 'garment';

	
	const TABLE_NAME = 'seagate_add_new_garments';

	
	const CLASS_DEFAULT = 'lib.model.garment.SeagateAddNewGarments';

	
	const NUM_COLUMNS = 7;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'seagate_add_new_garments.ID';

	
	const INDEX_NO = 'seagate_add_new_garments.INDEX_NO';

	
	const ADD_NEW_INDEX = 'seagate_add_new_garments.ADD_NEW_INDEX';

	
	const GARMENT_TYPE = 'seagate_add_new_garments.GARMENT_TYPE';

	
	const GARMENT_SIZE = 'seagate_add_new_garments.GARMENT_SIZE';

	
	const GARMENT_COLOR = 'seagate_add_new_garments.GARMENT_COLOR';

	
	const QUANTITY = 'seagate_add_new_garments.QUANTITY';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'IndexNo', 'AddNewIndex', 'GarmentType', 'GarmentSize', 'GarmentColor', 'Quantity', ),
		BasePeer::TYPE_COLNAME => array (SeagateAddNewGarmentsPeer::ID, SeagateAddNewGarmentsPeer::INDEX_NO, SeagateAddNewGarmentsPeer::ADD_NEW_INDEX, SeagateAddNewGarmentsPeer::GARMENT_TYPE, SeagateAddNewGarmentsPeer::GARMENT_SIZE, SeagateAddNewGarmentsPeer::GARMENT_COLOR, SeagateAddNewGarmentsPeer::QUANTITY, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'index_no', 'add_new_index', 'garment_type', 'garment_size', 'garment_color', 'quantity', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IndexNo' => 1, 'AddNewIndex' => 2, 'GarmentType' => 3, 'GarmentSize' => 4, 'GarmentColor' => 5, 'Quantity' => 6, ),
		BasePeer::TYPE_COLNAME => array (SeagateAddNewGarmentsPeer::ID => 0, SeagateAddNewGarmentsPeer::INDEX_NO => 1, SeagateAddNewGarmentsPeer::ADD_NEW_INDEX => 2, SeagateAddNewGarmentsPeer::GARMENT_TYPE => 3, SeagateAddNewGarmentsPeer::GARMENT_SIZE => 4, SeagateAddNewGarmentsPeer::GARMENT_COLOR => 5, SeagateAddNewGarmentsPeer::QUANTITY => 6, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'index_no' => 1, 'add_new_index' => 2, 'garment_type' => 3, 'garment_size' => 4, 'garment_color' => 5, 'quantity' => 6, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/garment/map/SeagateAddNewGarmentsMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.garment.map.SeagateAddNewGarmentsMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = SeagateAddNewGarmentsPeer::getTableMap();
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
		return str_replace(SeagateAddNewGarmentsPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(SeagateAddNewGarmentsPeer::ID);

		$criteria->addSelectColumn(SeagateAddNewGarmentsPeer::INDEX_NO);

		$criteria->addSelectColumn(SeagateAddNewGarmentsPeer::ADD_NEW_INDEX);

		$criteria->addSelectColumn(SeagateAddNewGarmentsPeer::GARMENT_TYPE);

		$criteria->addSelectColumn(SeagateAddNewGarmentsPeer::GARMENT_SIZE);

		$criteria->addSelectColumn(SeagateAddNewGarmentsPeer::GARMENT_COLOR);

		$criteria->addSelectColumn(SeagateAddNewGarmentsPeer::QUANTITY);

	}

	const COUNT = 'COUNT(seagate_add_new_garments.INDEX_NO)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT seagate_add_new_garments.INDEX_NO)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SeagateAddNewGarmentsPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SeagateAddNewGarmentsPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = SeagateAddNewGarmentsPeer::doSelectRS($criteria, $con);
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
		$objects = SeagateAddNewGarmentsPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return SeagateAddNewGarmentsPeer::populateObjects(SeagateAddNewGarmentsPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			SeagateAddNewGarmentsPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = SeagateAddNewGarmentsPeer::getOMClass();
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
		return SeagateAddNewGarmentsPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(SeagateAddNewGarmentsPeer::INDEX_NO); 

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
			$comparison = $criteria->getComparison(SeagateAddNewGarmentsPeer::INDEX_NO);
			$selectCriteria->add(SeagateAddNewGarmentsPeer::INDEX_NO, $criteria->remove(SeagateAddNewGarmentsPeer::INDEX_NO), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(SeagateAddNewGarmentsPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(SeagateAddNewGarmentsPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof SeagateAddNewGarments) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(SeagateAddNewGarmentsPeer::INDEX_NO, (array) $values, Criteria::IN);
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

	
	public static function doValidate(SeagateAddNewGarments $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(SeagateAddNewGarmentsPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(SeagateAddNewGarmentsPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(SeagateAddNewGarmentsPeer::DATABASE_NAME, SeagateAddNewGarmentsPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = SeagateAddNewGarmentsPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(SeagateAddNewGarmentsPeer::DATABASE_NAME);

		$criteria->add(SeagateAddNewGarmentsPeer::INDEX_NO, $pk);


		$v = SeagateAddNewGarmentsPeer::doSelect($criteria, $con);

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
			$criteria->add(SeagateAddNewGarmentsPeer::INDEX_NO, $pks, Criteria::IN);
			$objs = SeagateAddNewGarmentsPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseSeagateAddNewGarmentsPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/garment/map/SeagateAddNewGarmentsMapBuilder.php';
	Propel::registerMapBuilder('lib.model.garment.map.SeagateAddNewGarmentsMapBuilder');
}
