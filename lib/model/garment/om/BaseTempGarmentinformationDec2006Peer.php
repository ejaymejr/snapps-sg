<?php


abstract class BaseTempGarmentinformationDec2006Peer {

	
	const DATABASE_NAME = 'garment';

	
	const TABLE_NAME = 'temp_garmentInformation_dec_2006';

	
	const CLASS_DEFAULT = 'lib.model.garment.TempGarmentinformationDec2006';

	
	const NUM_COLUMNS = 7;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'temp_garmentInformation_dec_2006.ID';

	
	const GARMENT_CODE = 'temp_garmentInformation_dec_2006.GARMENT_CODE';

	
	const DATE_TIME = 'temp_garmentInformation_dec_2006.DATE_TIME';

	
	const NUMBER = 'temp_garmentInformation_dec_2006.NUMBER';

	
	const HANGER_NO = 'temp_garmentInformation_dec_2006.HANGER_NO';

	
	const TYPE = 'temp_garmentInformation_dec_2006.TYPE';

	
	const COLOR = 'temp_garmentInformation_dec_2006.COLOR';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'GarmentCode', 'DateTime', 'Number', 'HangerNo', 'Type', 'Color', ),
		BasePeer::TYPE_COLNAME => array (TempGarmentinformationDec2006Peer::ID, TempGarmentinformationDec2006Peer::GARMENT_CODE, TempGarmentinformationDec2006Peer::DATE_TIME, TempGarmentinformationDec2006Peer::NUMBER, TempGarmentinformationDec2006Peer::HANGER_NO, TempGarmentinformationDec2006Peer::TYPE, TempGarmentinformationDec2006Peer::COLOR, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'garment_code', 'date_time', 'number', 'hanger_no', 'type', 'color', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'GarmentCode' => 1, 'DateTime' => 2, 'Number' => 3, 'HangerNo' => 4, 'Type' => 5, 'Color' => 6, ),
		BasePeer::TYPE_COLNAME => array (TempGarmentinformationDec2006Peer::ID => 0, TempGarmentinformationDec2006Peer::GARMENT_CODE => 1, TempGarmentinformationDec2006Peer::DATE_TIME => 2, TempGarmentinformationDec2006Peer::NUMBER => 3, TempGarmentinformationDec2006Peer::HANGER_NO => 4, TempGarmentinformationDec2006Peer::TYPE => 5, TempGarmentinformationDec2006Peer::COLOR => 6, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'garment_code' => 1, 'date_time' => 2, 'number' => 3, 'hanger_no' => 4, 'type' => 5, 'color' => 6, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/garment/map/TempGarmentinformationDec2006MapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.garment.map.TempGarmentinformationDec2006MapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = TempGarmentinformationDec2006Peer::getTableMap();
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
		return str_replace(TempGarmentinformationDec2006Peer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(TempGarmentinformationDec2006Peer::ID);

		$criteria->addSelectColumn(TempGarmentinformationDec2006Peer::GARMENT_CODE);

		$criteria->addSelectColumn(TempGarmentinformationDec2006Peer::DATE_TIME);

		$criteria->addSelectColumn(TempGarmentinformationDec2006Peer::NUMBER);

		$criteria->addSelectColumn(TempGarmentinformationDec2006Peer::HANGER_NO);

		$criteria->addSelectColumn(TempGarmentinformationDec2006Peer::TYPE);

		$criteria->addSelectColumn(TempGarmentinformationDec2006Peer::COLOR);

	}

	const COUNT = 'COUNT(temp_garmentInformation_dec_2006.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT temp_garmentInformation_dec_2006.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TempGarmentinformationDec2006Peer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TempGarmentinformationDec2006Peer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = TempGarmentinformationDec2006Peer::doSelectRS($criteria, $con);
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
		$objects = TempGarmentinformationDec2006Peer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return TempGarmentinformationDec2006Peer::populateObjects(TempGarmentinformationDec2006Peer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			TempGarmentinformationDec2006Peer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = TempGarmentinformationDec2006Peer::getOMClass();
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
		return TempGarmentinformationDec2006Peer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(TempGarmentinformationDec2006Peer::ID); 

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
			$comparison = $criteria->getComparison(TempGarmentinformationDec2006Peer::ID);
			$selectCriteria->add(TempGarmentinformationDec2006Peer::ID, $criteria->remove(TempGarmentinformationDec2006Peer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(TempGarmentinformationDec2006Peer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(TempGarmentinformationDec2006Peer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof TempGarmentinformationDec2006) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(TempGarmentinformationDec2006Peer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(TempGarmentinformationDec2006 $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(TempGarmentinformationDec2006Peer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(TempGarmentinformationDec2006Peer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(TempGarmentinformationDec2006Peer::DATABASE_NAME, TempGarmentinformationDec2006Peer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = TempGarmentinformationDec2006Peer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(TempGarmentinformationDec2006Peer::DATABASE_NAME);

		$criteria->add(TempGarmentinformationDec2006Peer::ID, $pk);


		$v = TempGarmentinformationDec2006Peer::doSelect($criteria, $con);

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
			$criteria->add(TempGarmentinformationDec2006Peer::ID, $pks, Criteria::IN);
			$objs = TempGarmentinformationDec2006Peer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseTempGarmentinformationDec2006Peer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/garment/map/TempGarmentinformationDec2006MapBuilder.php';
	Propel::registerMapBuilder('lib.model.garment.map.TempGarmentinformationDec2006MapBuilder');
}
