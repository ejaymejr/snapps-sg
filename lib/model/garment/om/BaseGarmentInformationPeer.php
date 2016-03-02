<?php


abstract class BaseGarmentInformationPeer {

	
	const DATABASE_NAME = 'garment';

	
	const TABLE_NAME = 'garment_information';

	
	const CLASS_DEFAULT = 'lib.model.garment.GarmentInformation';

	
	const NUM_COLUMNS = 15;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'garment_information.ID';

	
	const GARMENT_CODE = 'garment_information.GARMENT_CODE';

	
	const TYPE = 'garment_information.TYPE';

	
	const SIZE = 'garment_information.SIZE';

	
	const COLOR = 'garment_information.COLOR';

	
	const CUSTOMER = 'garment_information.CUSTOMER';

	
	const NO_OF_TIMES_WASH = 'garment_information.NO_OF_TIMES_WASH';

	
	const NUMBER = 'garment_information.NUMBER';

	
	const HANGER_NO = 'garment_information.HANGER_NO';

	
	const INSERTED_DATE = 'garment_information.INSERTED_DATE';

	
	const STATUS = 'garment_information.STATUS';

	
	const CREATED_BY = 'garment_information.CREATED_BY';

	
	const DATE_CREATED = 'garment_information.DATE_CREATED';

	
	const MODIFIED_BY = 'garment_information.MODIFIED_BY';

	
	const DATE_MODIFIED = 'garment_information.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'GarmentCode', 'Type', 'Size', 'Color', 'Customer', 'NoOfTimesWash', 'Number', 'HangerNo', 'InsertedDate', 'Status', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (GarmentInformationPeer::ID, GarmentInformationPeer::GARMENT_CODE, GarmentInformationPeer::TYPE, GarmentInformationPeer::SIZE, GarmentInformationPeer::COLOR, GarmentInformationPeer::CUSTOMER, GarmentInformationPeer::NO_OF_TIMES_WASH, GarmentInformationPeer::NUMBER, GarmentInformationPeer::HANGER_NO, GarmentInformationPeer::INSERTED_DATE, GarmentInformationPeer::STATUS, GarmentInformationPeer::CREATED_BY, GarmentInformationPeer::DATE_CREATED, GarmentInformationPeer::MODIFIED_BY, GarmentInformationPeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'garment_code', 'type', 'size', 'color', 'customer', 'no_of_times_wash', 'number', 'hanger_no', 'inserted_date', 'status', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'GarmentCode' => 1, 'Type' => 2, 'Size' => 3, 'Color' => 4, 'Customer' => 5, 'NoOfTimesWash' => 6, 'Number' => 7, 'HangerNo' => 8, 'InsertedDate' => 9, 'Status' => 10, 'CreatedBy' => 11, 'DateCreated' => 12, 'ModifiedBy' => 13, 'DateModified' => 14, ),
		BasePeer::TYPE_COLNAME => array (GarmentInformationPeer::ID => 0, GarmentInformationPeer::GARMENT_CODE => 1, GarmentInformationPeer::TYPE => 2, GarmentInformationPeer::SIZE => 3, GarmentInformationPeer::COLOR => 4, GarmentInformationPeer::CUSTOMER => 5, GarmentInformationPeer::NO_OF_TIMES_WASH => 6, GarmentInformationPeer::NUMBER => 7, GarmentInformationPeer::HANGER_NO => 8, GarmentInformationPeer::INSERTED_DATE => 9, GarmentInformationPeer::STATUS => 10, GarmentInformationPeer::CREATED_BY => 11, GarmentInformationPeer::DATE_CREATED => 12, GarmentInformationPeer::MODIFIED_BY => 13, GarmentInformationPeer::DATE_MODIFIED => 14, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'garment_code' => 1, 'type' => 2, 'size' => 3, 'color' => 4, 'customer' => 5, 'no_of_times_wash' => 6, 'number' => 7, 'hanger_no' => 8, 'inserted_date' => 9, 'status' => 10, 'created_by' => 11, 'date_created' => 12, 'modified_by' => 13, 'date_modified' => 14, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/garment/map/GarmentInformationMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.garment.map.GarmentInformationMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = GarmentInformationPeer::getTableMap();
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
		return str_replace(GarmentInformationPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(GarmentInformationPeer::ID);

		$criteria->addSelectColumn(GarmentInformationPeer::GARMENT_CODE);

		$criteria->addSelectColumn(GarmentInformationPeer::TYPE);

		$criteria->addSelectColumn(GarmentInformationPeer::SIZE);

		$criteria->addSelectColumn(GarmentInformationPeer::COLOR);

		$criteria->addSelectColumn(GarmentInformationPeer::CUSTOMER);

		$criteria->addSelectColumn(GarmentInformationPeer::NO_OF_TIMES_WASH);

		$criteria->addSelectColumn(GarmentInformationPeer::NUMBER);

		$criteria->addSelectColumn(GarmentInformationPeer::HANGER_NO);

		$criteria->addSelectColumn(GarmentInformationPeer::INSERTED_DATE);

		$criteria->addSelectColumn(GarmentInformationPeer::STATUS);

		$criteria->addSelectColumn(GarmentInformationPeer::CREATED_BY);

		$criteria->addSelectColumn(GarmentInformationPeer::DATE_CREATED);

		$criteria->addSelectColumn(GarmentInformationPeer::MODIFIED_BY);

		$criteria->addSelectColumn(GarmentInformationPeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(garment_information.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT garment_information.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(GarmentInformationPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(GarmentInformationPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = GarmentInformationPeer::doSelectRS($criteria, $con);
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
		$objects = GarmentInformationPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return GarmentInformationPeer::populateObjects(GarmentInformationPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			GarmentInformationPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = GarmentInformationPeer::getOMClass();
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
		return GarmentInformationPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(GarmentInformationPeer::ID); 

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
			$comparison = $criteria->getComparison(GarmentInformationPeer::ID);
			$selectCriteria->add(GarmentInformationPeer::ID, $criteria->remove(GarmentInformationPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(GarmentInformationPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(GarmentInformationPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof GarmentInformation) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(GarmentInformationPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(GarmentInformation $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(GarmentInformationPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(GarmentInformationPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(GarmentInformationPeer::DATABASE_NAME, GarmentInformationPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = GarmentInformationPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(GarmentInformationPeer::DATABASE_NAME);

		$criteria->add(GarmentInformationPeer::ID, $pk);


		$v = GarmentInformationPeer::doSelect($criteria, $con);

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
			$criteria->add(GarmentInformationPeer::ID, $pks, Criteria::IN);
			$objs = GarmentInformationPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseGarmentInformationPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/garment/map/GarmentInformationMapBuilder.php';
	Propel::registerMapBuilder('lib.model.garment.map.GarmentInformationMapBuilder');
}
