<?php


abstract class BaseSeagateDamagePeer {

	
	const DATABASE_NAME = 'garment';

	
	const TABLE_NAME = 'seagate_damage';

	
	const CLASS_DEFAULT = 'lib.model.garment.SeagateDamage';

	
	const NUM_COLUMNS = 14;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'seagate_damage.ID';

	
	const INDEX_NO = 'seagate_damage.INDEX_NO';

	
	const MONTH = 'seagate_damage.MONTH';

	
	const YEAR = 'seagate_damage.YEAR';

	
	const SEAGATE1_GARMENT = 'seagate_damage.SEAGATE1_GARMENT';

	
	const SEAGATE1_MISSING_QUANTITY = 'seagate_damage.SEAGATE1_MISSING_QUANTITY';

	
	const SEAGATE1_DAMAGE_QUANTITY = 'seagate_damage.SEAGATE1_DAMAGE_QUANTITY';

	
	const SEAGATE1_DAMAGE_REPAIR_QUANTITY = 'seagate_damage.SEAGATE1_DAMAGE_REPAIR_QUANTITY';

	
	const SEAGATE1_DAMAGE_REPLACE_QUANTITY = 'seagate_damage.SEAGATE1_DAMAGE_REPLACE_QUANTITY';

	
	const SEAGATE2_GARMENT = 'seagate_damage.SEAGATE2_GARMENT';

	
	const SEAGATE2_MISSING_QUANTITY = 'seagate_damage.SEAGATE2_MISSING_QUANTITY';

	
	const SEAGATE2_DAMAGE_QUANTITY = 'seagate_damage.SEAGATE2_DAMAGE_QUANTITY';

	
	const SEAGATE2_DAMAGE_REPAIR_QUANTITY = 'seagate_damage.SEAGATE2_DAMAGE_REPAIR_QUANTITY';

	
	const SEAGATE2_DAMAGE_REPLACE_QUANTITY = 'seagate_damage.SEAGATE2_DAMAGE_REPLACE_QUANTITY';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'IndexNo', 'Month', 'Year', 'Seagate1Garment', 'Seagate1MissingQuantity', 'Seagate1DamageQuantity', 'Seagate1DamageRepairQuantity', 'Seagate1DamageReplaceQuantity', 'Seagate2Garment', 'Seagate2MissingQuantity', 'Seagate2DamageQuantity', 'Seagate2DamageRepairQuantity', 'Seagate2DamageReplaceQuantity', ),
		BasePeer::TYPE_COLNAME => array (SeagateDamagePeer::ID, SeagateDamagePeer::INDEX_NO, SeagateDamagePeer::MONTH, SeagateDamagePeer::YEAR, SeagateDamagePeer::SEAGATE1_GARMENT, SeagateDamagePeer::SEAGATE1_MISSING_QUANTITY, SeagateDamagePeer::SEAGATE1_DAMAGE_QUANTITY, SeagateDamagePeer::SEAGATE1_DAMAGE_REPAIR_QUANTITY, SeagateDamagePeer::SEAGATE1_DAMAGE_REPLACE_QUANTITY, SeagateDamagePeer::SEAGATE2_GARMENT, SeagateDamagePeer::SEAGATE2_MISSING_QUANTITY, SeagateDamagePeer::SEAGATE2_DAMAGE_QUANTITY, SeagateDamagePeer::SEAGATE2_DAMAGE_REPAIR_QUANTITY, SeagateDamagePeer::SEAGATE2_DAMAGE_REPLACE_QUANTITY, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'index_no', 'month', 'year', 'seagate1_garment', 'seagate1_missing_quantity', 'seagate1_damage_quantity', 'seagate1_damage_repair_quantity', 'seagate1_damage_replace_quantity', 'seagate2_garment', 'seagate2_missing_quantity', 'seagate2_damage_quantity', 'seagate2_damage_repair_quantity', 'seagate2_damage_replace_quantity', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IndexNo' => 1, 'Month' => 2, 'Year' => 3, 'Seagate1Garment' => 4, 'Seagate1MissingQuantity' => 5, 'Seagate1DamageQuantity' => 6, 'Seagate1DamageRepairQuantity' => 7, 'Seagate1DamageReplaceQuantity' => 8, 'Seagate2Garment' => 9, 'Seagate2MissingQuantity' => 10, 'Seagate2DamageQuantity' => 11, 'Seagate2DamageRepairQuantity' => 12, 'Seagate2DamageReplaceQuantity' => 13, ),
		BasePeer::TYPE_COLNAME => array (SeagateDamagePeer::ID => 0, SeagateDamagePeer::INDEX_NO => 1, SeagateDamagePeer::MONTH => 2, SeagateDamagePeer::YEAR => 3, SeagateDamagePeer::SEAGATE1_GARMENT => 4, SeagateDamagePeer::SEAGATE1_MISSING_QUANTITY => 5, SeagateDamagePeer::SEAGATE1_DAMAGE_QUANTITY => 6, SeagateDamagePeer::SEAGATE1_DAMAGE_REPAIR_QUANTITY => 7, SeagateDamagePeer::SEAGATE1_DAMAGE_REPLACE_QUANTITY => 8, SeagateDamagePeer::SEAGATE2_GARMENT => 9, SeagateDamagePeer::SEAGATE2_MISSING_QUANTITY => 10, SeagateDamagePeer::SEAGATE2_DAMAGE_QUANTITY => 11, SeagateDamagePeer::SEAGATE2_DAMAGE_REPAIR_QUANTITY => 12, SeagateDamagePeer::SEAGATE2_DAMAGE_REPLACE_QUANTITY => 13, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'index_no' => 1, 'month' => 2, 'year' => 3, 'seagate1_garment' => 4, 'seagate1_missing_quantity' => 5, 'seagate1_damage_quantity' => 6, 'seagate1_damage_repair_quantity' => 7, 'seagate1_damage_replace_quantity' => 8, 'seagate2_garment' => 9, 'seagate2_missing_quantity' => 10, 'seagate2_damage_quantity' => 11, 'seagate2_damage_repair_quantity' => 12, 'seagate2_damage_replace_quantity' => 13, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/garment/map/SeagateDamageMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.garment.map.SeagateDamageMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = SeagateDamagePeer::getTableMap();
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
		return str_replace(SeagateDamagePeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(SeagateDamagePeer::ID);

		$criteria->addSelectColumn(SeagateDamagePeer::INDEX_NO);

		$criteria->addSelectColumn(SeagateDamagePeer::MONTH);

		$criteria->addSelectColumn(SeagateDamagePeer::YEAR);

		$criteria->addSelectColumn(SeagateDamagePeer::SEAGATE1_GARMENT);

		$criteria->addSelectColumn(SeagateDamagePeer::SEAGATE1_MISSING_QUANTITY);

		$criteria->addSelectColumn(SeagateDamagePeer::SEAGATE1_DAMAGE_QUANTITY);

		$criteria->addSelectColumn(SeagateDamagePeer::SEAGATE1_DAMAGE_REPAIR_QUANTITY);

		$criteria->addSelectColumn(SeagateDamagePeer::SEAGATE1_DAMAGE_REPLACE_QUANTITY);

		$criteria->addSelectColumn(SeagateDamagePeer::SEAGATE2_GARMENT);

		$criteria->addSelectColumn(SeagateDamagePeer::SEAGATE2_MISSING_QUANTITY);

		$criteria->addSelectColumn(SeagateDamagePeer::SEAGATE2_DAMAGE_QUANTITY);

		$criteria->addSelectColumn(SeagateDamagePeer::SEAGATE2_DAMAGE_REPAIR_QUANTITY);

		$criteria->addSelectColumn(SeagateDamagePeer::SEAGATE2_DAMAGE_REPLACE_QUANTITY);

	}

	const COUNT = 'COUNT(seagate_damage.INDEX_NO)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT seagate_damage.INDEX_NO)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(SeagateDamagePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(SeagateDamagePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = SeagateDamagePeer::doSelectRS($criteria, $con);
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
		$objects = SeagateDamagePeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return SeagateDamagePeer::populateObjects(SeagateDamagePeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			SeagateDamagePeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = SeagateDamagePeer::getOMClass();
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
		return SeagateDamagePeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(SeagateDamagePeer::INDEX_NO); 

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
			$comparison = $criteria->getComparison(SeagateDamagePeer::INDEX_NO);
			$selectCriteria->add(SeagateDamagePeer::INDEX_NO, $criteria->remove(SeagateDamagePeer::INDEX_NO), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(SeagateDamagePeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(SeagateDamagePeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof SeagateDamage) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(SeagateDamagePeer::INDEX_NO, (array) $values, Criteria::IN);
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

	
	public static function doValidate(SeagateDamage $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(SeagateDamagePeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(SeagateDamagePeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(SeagateDamagePeer::DATABASE_NAME, SeagateDamagePeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = SeagateDamagePeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(SeagateDamagePeer::DATABASE_NAME);

		$criteria->add(SeagateDamagePeer::INDEX_NO, $pk);


		$v = SeagateDamagePeer::doSelect($criteria, $con);

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
			$criteria->add(SeagateDamagePeer::INDEX_NO, $pks, Criteria::IN);
			$objs = SeagateDamagePeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseSeagateDamagePeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/garment/map/SeagateDamageMapBuilder.php';
	Propel::registerMapBuilder('lib.model.garment.map.SeagateDamageMapBuilder');
}
