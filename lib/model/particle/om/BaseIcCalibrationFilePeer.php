<?php


abstract class BaseIcCalibrationFilePeer {

	
	const DATABASE_NAME = 'particle';

	
	const TABLE_NAME = 'ic_calibration_file';

	
	const CLASS_DEFAULT = 'lib.model.particle.IcCalibrationFile';

	
	const NUM_COLUMNS = 10;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'ic_calibration_file.ID';

	
	const IC_CALIBRATION_ID = 'ic_calibration_file.IC_CALIBRATION_ID';

	
	const DESCRIPTION = 'ic_calibration_file.DESCRIPTION';

	
	const TRANS_DATE = 'ic_calibration_file.TRANS_DATE';

	
	const FILENAME = 'ic_calibration_file.FILENAME';

	
	const PROOF_NUMBER = 'ic_calibration_file.PROOF_NUMBER';

	
	const CREATED_BY = 'ic_calibration_file.CREATED_BY';

	
	const DATE_CREATED = 'ic_calibration_file.DATE_CREATED';

	
	const MODIFIED_BY = 'ic_calibration_file.MODIFIED_BY';

	
	const DATE_MODIFIED = 'ic_calibration_file.DATE_MODIFIED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'IcCalibrationId', 'Description', 'TransDate', 'Filename', 'ProofNumber', 'CreatedBy', 'DateCreated', 'ModifiedBy', 'DateModified', ),
		BasePeer::TYPE_COLNAME => array (IcCalibrationFilePeer::ID, IcCalibrationFilePeer::IC_CALIBRATION_ID, IcCalibrationFilePeer::DESCRIPTION, IcCalibrationFilePeer::TRANS_DATE, IcCalibrationFilePeer::FILENAME, IcCalibrationFilePeer::PROOF_NUMBER, IcCalibrationFilePeer::CREATED_BY, IcCalibrationFilePeer::DATE_CREATED, IcCalibrationFilePeer::MODIFIED_BY, IcCalibrationFilePeer::DATE_MODIFIED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'ic_calibration_id', 'description', 'trans_date', 'filename', 'proof_number', 'created_by', 'date_created', 'modified_by', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IcCalibrationId' => 1, 'Description' => 2, 'TransDate' => 3, 'Filename' => 4, 'ProofNumber' => 5, 'CreatedBy' => 6, 'DateCreated' => 7, 'ModifiedBy' => 8, 'DateModified' => 9, ),
		BasePeer::TYPE_COLNAME => array (IcCalibrationFilePeer::ID => 0, IcCalibrationFilePeer::IC_CALIBRATION_ID => 1, IcCalibrationFilePeer::DESCRIPTION => 2, IcCalibrationFilePeer::TRANS_DATE => 3, IcCalibrationFilePeer::FILENAME => 4, IcCalibrationFilePeer::PROOF_NUMBER => 5, IcCalibrationFilePeer::CREATED_BY => 6, IcCalibrationFilePeer::DATE_CREATED => 7, IcCalibrationFilePeer::MODIFIED_BY => 8, IcCalibrationFilePeer::DATE_MODIFIED => 9, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'ic_calibration_id' => 1, 'description' => 2, 'trans_date' => 3, 'filename' => 4, 'proof_number' => 5, 'created_by' => 6, 'date_created' => 7, 'modified_by' => 8, 'date_modified' => 9, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/particle/map/IcCalibrationFileMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.particle.map.IcCalibrationFileMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = IcCalibrationFilePeer::getTableMap();
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
		return str_replace(IcCalibrationFilePeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(IcCalibrationFilePeer::ID);

		$criteria->addSelectColumn(IcCalibrationFilePeer::IC_CALIBRATION_ID);

		$criteria->addSelectColumn(IcCalibrationFilePeer::DESCRIPTION);

		$criteria->addSelectColumn(IcCalibrationFilePeer::TRANS_DATE);

		$criteria->addSelectColumn(IcCalibrationFilePeer::FILENAME);

		$criteria->addSelectColumn(IcCalibrationFilePeer::PROOF_NUMBER);

		$criteria->addSelectColumn(IcCalibrationFilePeer::CREATED_BY);

		$criteria->addSelectColumn(IcCalibrationFilePeer::DATE_CREATED);

		$criteria->addSelectColumn(IcCalibrationFilePeer::MODIFIED_BY);

		$criteria->addSelectColumn(IcCalibrationFilePeer::DATE_MODIFIED);

	}

	const COUNT = 'COUNT(ic_calibration_file.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT ic_calibration_file.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(IcCalibrationFilePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(IcCalibrationFilePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = IcCalibrationFilePeer::doSelectRS($criteria, $con);
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
		$objects = IcCalibrationFilePeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return IcCalibrationFilePeer::populateObjects(IcCalibrationFilePeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			IcCalibrationFilePeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = IcCalibrationFilePeer::getOMClass();
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
		return IcCalibrationFilePeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(IcCalibrationFilePeer::ID); 

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
			$comparison = $criteria->getComparison(IcCalibrationFilePeer::ID);
			$selectCriteria->add(IcCalibrationFilePeer::ID, $criteria->remove(IcCalibrationFilePeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(IcCalibrationFilePeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(IcCalibrationFilePeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof IcCalibrationFile) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(IcCalibrationFilePeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(IcCalibrationFile $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(IcCalibrationFilePeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(IcCalibrationFilePeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(IcCalibrationFilePeer::DATABASE_NAME, IcCalibrationFilePeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = IcCalibrationFilePeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(IcCalibrationFilePeer::DATABASE_NAME);

		$criteria->add(IcCalibrationFilePeer::ID, $pk);


		$v = IcCalibrationFilePeer::doSelect($criteria, $con);

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
			$criteria->add(IcCalibrationFilePeer::ID, $pks, Criteria::IN);
			$objs = IcCalibrationFilePeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseIcCalibrationFilePeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/particle/map/IcCalibrationFileMapBuilder.php';
	Propel::registerMapBuilder('lib.model.particle.map.IcCalibrationFileMapBuilder');
}
