<?php


abstract class BaseVisitorsPeer {

	
	const DATABASE_NAME = 'garment';

	
	const TABLE_NAME = 'visitors';

	
	const CLASS_DEFAULT = 'lib.model.garment.Visitors';

	
	const NUM_COLUMNS = 55;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'visitors.ID';

	
	const DATE_TIME = 'visitors.DATE_TIME';

	
	const USER_NAME = 'visitors.USER_NAME';

	
	const EMAIL = 'visitors.EMAIL';

	
	const DEPARTMENT = 'visitors.DEPARTMENT';

	
	const DATE_DELIVER = 'visitors.DATE_DELIVER';

	
	const DATE_RETURN = 'visitors.DATE_RETURN';

	
	const JHXS = 'visitors.JHXS';

	
	const JHS = 'visitors.JHS';

	
	const JHM = 'visitors.JHM';

	
	const JHL = 'visitors.JHL';

	
	const JHXL = 'visitors.JHXL';

	
	const JHXXL = 'visitors.JHXXL';

	
	const JHXXXL = 'visitors.JHXXXL';

	
	const JXS = 'visitors.JXS';

	
	const JS = 'visitors.JS';

	
	const JM = 'visitors.JM';

	
	const JL = 'visitors.JL';

	
	const JXL = 'visitors.JXL';

	
	const JXXL = 'visitors.JXXL';

	
	const JXXXL = 'visitors.JXXXL';

	
	const BXS = 'visitors.BXS';

	
	const BS = 'visitors.BS';

	
	const BM = 'visitors.BM';

	
	const BL = 'visitors.BL';

	
	const BXL = 'visitors.BXL';

	
	const BXXL = 'visitors.BXXL';

	
	const BXXXL = 'visitors.BXXXL';

	
	const HL = 'visitors.HL';

	
	const H2L = 'visitors.H2L';

	
	const H3L = 'visitors.H3L';

	
	const LXS = 'visitors.LXS';

	
	const LS = 'visitors.LS';

	
	const LM = 'visitors.LM';

	
	const LL = 'visitors.LL';

	
	const LXL = 'visitors.LXL';

	
	const LXXL = 'visitors.LXXL';

	
	const LXXXL = 'visitors.LXXXL';

	
	const S24 = 'visitors.S24';

	
	const S25 = 'visitors.S25';

	
	const S26 = 'visitors.S26';

	
	const S27 = 'visitors.S27';

	
	const S28 = 'visitors.S28';

	
	const S29 = 'visitors.S29';

	
	const S30 = 'visitors.S30';

	
	const SS24 = 'visitors.SS24';

	
	const SS25 = 'visitors.SS25';

	
	const SS26 = 'visitors.SS26';

	
	const SS27 = 'visitors.SS27';

	
	const SS28 = 'visitors.SS28';

	
	const SS29 = 'visitors.SS29';

	
	const SS30 = 'visitors.SS30';

	
	const REQUESTED = 'visitors.REQUESTED';

	
	const COMPLETED_DATE = 'visitors.COMPLETED_DATE';

	
	const CUSTOMER = 'visitors.CUSTOMER';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'DateTime', 'UserName', 'Email', 'Department', 'DateDeliver', 'DateReturn', 'Jhxs', 'Jhs', 'Jhm', 'Jhl', 'Jhxl', 'Jhxxl', 'Jhxxxl', 'Jxs', 'Js', 'Jm', 'Jl', 'Jxl', 'Jxxl', 'Jxxxl', 'Bxs', 'Bs', 'Bm', 'Bl', 'Bxl', 'Bxxl', 'Bxxxl', 'Hl', 'H2l', 'H3l', 'Lxs', 'Ls', 'Lm', 'Ll', 'Lxl', 'Lxxl', 'Lxxxl', 'S24', 'S25', 'S26', 'S27', 'S28', 'S29', 'S30', 'Ss24', 'Ss25', 'Ss26', 'Ss27', 'Ss28', 'Ss29', 'Ss30', 'Requested', 'CompletedDate', 'Customer', ),
		BasePeer::TYPE_COLNAME => array (VisitorsPeer::ID, VisitorsPeer::DATE_TIME, VisitorsPeer::USER_NAME, VisitorsPeer::EMAIL, VisitorsPeer::DEPARTMENT, VisitorsPeer::DATE_DELIVER, VisitorsPeer::DATE_RETURN, VisitorsPeer::JHXS, VisitorsPeer::JHS, VisitorsPeer::JHM, VisitorsPeer::JHL, VisitorsPeer::JHXL, VisitorsPeer::JHXXL, VisitorsPeer::JHXXXL, VisitorsPeer::JXS, VisitorsPeer::JS, VisitorsPeer::JM, VisitorsPeer::JL, VisitorsPeer::JXL, VisitorsPeer::JXXL, VisitorsPeer::JXXXL, VisitorsPeer::BXS, VisitorsPeer::BS, VisitorsPeer::BM, VisitorsPeer::BL, VisitorsPeer::BXL, VisitorsPeer::BXXL, VisitorsPeer::BXXXL, VisitorsPeer::HL, VisitorsPeer::H2L, VisitorsPeer::H3L, VisitorsPeer::LXS, VisitorsPeer::LS, VisitorsPeer::LM, VisitorsPeer::LL, VisitorsPeer::LXL, VisitorsPeer::LXXL, VisitorsPeer::LXXXL, VisitorsPeer::S24, VisitorsPeer::S25, VisitorsPeer::S26, VisitorsPeer::S27, VisitorsPeer::S28, VisitorsPeer::S29, VisitorsPeer::S30, VisitorsPeer::SS24, VisitorsPeer::SS25, VisitorsPeer::SS26, VisitorsPeer::SS27, VisitorsPeer::SS28, VisitorsPeer::SS29, VisitorsPeer::SS30, VisitorsPeer::REQUESTED, VisitorsPeer::COMPLETED_DATE, VisitorsPeer::CUSTOMER, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'date_time', 'user_name', 'email', 'department', 'date_deliver', 'date_return', 'jhXS', 'jhS', 'jhM', 'jhL', 'jhXL', 'jhXXL', 'jhXXXL', 'jXS', 'jS', 'jM', 'jL', 'jXL', 'jXXL', 'jXXXL', 'bXS', 'bS', 'bM', 'bL', 'bXL', 'bXXL', 'bXXXL', 'hL', 'h2L', 'h3L', 'lXS', 'lS', 'lM', 'lL', 'lXL', 'lXXL', 'lXXXL', 's24', 's25', 's26', 's27', 's28', 's29', 's30', 'ss24', 'ss25', 'ss26', 'ss27', 'ss28', 'ss29', 'ss30', 'requested', 'completed_date', 'customer', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'DateTime' => 1, 'UserName' => 2, 'Email' => 3, 'Department' => 4, 'DateDeliver' => 5, 'DateReturn' => 6, 'Jhxs' => 7, 'Jhs' => 8, 'Jhm' => 9, 'Jhl' => 10, 'Jhxl' => 11, 'Jhxxl' => 12, 'Jhxxxl' => 13, 'Jxs' => 14, 'Js' => 15, 'Jm' => 16, 'Jl' => 17, 'Jxl' => 18, 'Jxxl' => 19, 'Jxxxl' => 20, 'Bxs' => 21, 'Bs' => 22, 'Bm' => 23, 'Bl' => 24, 'Bxl' => 25, 'Bxxl' => 26, 'Bxxxl' => 27, 'Hl' => 28, 'H2l' => 29, 'H3l' => 30, 'Lxs' => 31, 'Ls' => 32, 'Lm' => 33, 'Ll' => 34, 'Lxl' => 35, 'Lxxl' => 36, 'Lxxxl' => 37, 'S24' => 38, 'S25' => 39, 'S26' => 40, 'S27' => 41, 'S28' => 42, 'S29' => 43, 'S30' => 44, 'Ss24' => 45, 'Ss25' => 46, 'Ss26' => 47, 'Ss27' => 48, 'Ss28' => 49, 'Ss29' => 50, 'Ss30' => 51, 'Requested' => 52, 'CompletedDate' => 53, 'Customer' => 54, ),
		BasePeer::TYPE_COLNAME => array (VisitorsPeer::ID => 0, VisitorsPeer::DATE_TIME => 1, VisitorsPeer::USER_NAME => 2, VisitorsPeer::EMAIL => 3, VisitorsPeer::DEPARTMENT => 4, VisitorsPeer::DATE_DELIVER => 5, VisitorsPeer::DATE_RETURN => 6, VisitorsPeer::JHXS => 7, VisitorsPeer::JHS => 8, VisitorsPeer::JHM => 9, VisitorsPeer::JHL => 10, VisitorsPeer::JHXL => 11, VisitorsPeer::JHXXL => 12, VisitorsPeer::JHXXXL => 13, VisitorsPeer::JXS => 14, VisitorsPeer::JS => 15, VisitorsPeer::JM => 16, VisitorsPeer::JL => 17, VisitorsPeer::JXL => 18, VisitorsPeer::JXXL => 19, VisitorsPeer::JXXXL => 20, VisitorsPeer::BXS => 21, VisitorsPeer::BS => 22, VisitorsPeer::BM => 23, VisitorsPeer::BL => 24, VisitorsPeer::BXL => 25, VisitorsPeer::BXXL => 26, VisitorsPeer::BXXXL => 27, VisitorsPeer::HL => 28, VisitorsPeer::H2L => 29, VisitorsPeer::H3L => 30, VisitorsPeer::LXS => 31, VisitorsPeer::LS => 32, VisitorsPeer::LM => 33, VisitorsPeer::LL => 34, VisitorsPeer::LXL => 35, VisitorsPeer::LXXL => 36, VisitorsPeer::LXXXL => 37, VisitorsPeer::S24 => 38, VisitorsPeer::S25 => 39, VisitorsPeer::S26 => 40, VisitorsPeer::S27 => 41, VisitorsPeer::S28 => 42, VisitorsPeer::S29 => 43, VisitorsPeer::S30 => 44, VisitorsPeer::SS24 => 45, VisitorsPeer::SS25 => 46, VisitorsPeer::SS26 => 47, VisitorsPeer::SS27 => 48, VisitorsPeer::SS28 => 49, VisitorsPeer::SS29 => 50, VisitorsPeer::SS30 => 51, VisitorsPeer::REQUESTED => 52, VisitorsPeer::COMPLETED_DATE => 53, VisitorsPeer::CUSTOMER => 54, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'date_time' => 1, 'user_name' => 2, 'email' => 3, 'department' => 4, 'date_deliver' => 5, 'date_return' => 6, 'jhXS' => 7, 'jhS' => 8, 'jhM' => 9, 'jhL' => 10, 'jhXL' => 11, 'jhXXL' => 12, 'jhXXXL' => 13, 'jXS' => 14, 'jS' => 15, 'jM' => 16, 'jL' => 17, 'jXL' => 18, 'jXXL' => 19, 'jXXXL' => 20, 'bXS' => 21, 'bS' => 22, 'bM' => 23, 'bL' => 24, 'bXL' => 25, 'bXXL' => 26, 'bXXXL' => 27, 'hL' => 28, 'h2L' => 29, 'h3L' => 30, 'lXS' => 31, 'lS' => 32, 'lM' => 33, 'lL' => 34, 'lXL' => 35, 'lXXL' => 36, 'lXXXL' => 37, 's24' => 38, 's25' => 39, 's26' => 40, 's27' => 41, 's28' => 42, 's29' => 43, 's30' => 44, 'ss24' => 45, 'ss25' => 46, 'ss26' => 47, 'ss27' => 48, 'ss28' => 49, 'ss29' => 50, 'ss30' => 51, 'requested' => 52, 'completed_date' => 53, 'customer' => 54, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/garment/map/VisitorsMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.garment.map.VisitorsMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = VisitorsPeer::getTableMap();
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
		return str_replace(VisitorsPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(VisitorsPeer::ID);

		$criteria->addSelectColumn(VisitorsPeer::DATE_TIME);

		$criteria->addSelectColumn(VisitorsPeer::USER_NAME);

		$criteria->addSelectColumn(VisitorsPeer::EMAIL);

		$criteria->addSelectColumn(VisitorsPeer::DEPARTMENT);

		$criteria->addSelectColumn(VisitorsPeer::DATE_DELIVER);

		$criteria->addSelectColumn(VisitorsPeer::DATE_RETURN);

		$criteria->addSelectColumn(VisitorsPeer::JHXS);

		$criteria->addSelectColumn(VisitorsPeer::JHS);

		$criteria->addSelectColumn(VisitorsPeer::JHM);

		$criteria->addSelectColumn(VisitorsPeer::JHL);

		$criteria->addSelectColumn(VisitorsPeer::JHXL);

		$criteria->addSelectColumn(VisitorsPeer::JHXXL);

		$criteria->addSelectColumn(VisitorsPeer::JHXXXL);

		$criteria->addSelectColumn(VisitorsPeer::JXS);

		$criteria->addSelectColumn(VisitorsPeer::JS);

		$criteria->addSelectColumn(VisitorsPeer::JM);

		$criteria->addSelectColumn(VisitorsPeer::JL);

		$criteria->addSelectColumn(VisitorsPeer::JXL);

		$criteria->addSelectColumn(VisitorsPeer::JXXL);

		$criteria->addSelectColumn(VisitorsPeer::JXXXL);

		$criteria->addSelectColumn(VisitorsPeer::BXS);

		$criteria->addSelectColumn(VisitorsPeer::BS);

		$criteria->addSelectColumn(VisitorsPeer::BM);

		$criteria->addSelectColumn(VisitorsPeer::BL);

		$criteria->addSelectColumn(VisitorsPeer::BXL);

		$criteria->addSelectColumn(VisitorsPeer::BXXL);

		$criteria->addSelectColumn(VisitorsPeer::BXXXL);

		$criteria->addSelectColumn(VisitorsPeer::HL);

		$criteria->addSelectColumn(VisitorsPeer::H2L);

		$criteria->addSelectColumn(VisitorsPeer::H3L);

		$criteria->addSelectColumn(VisitorsPeer::LXS);

		$criteria->addSelectColumn(VisitorsPeer::LS);

		$criteria->addSelectColumn(VisitorsPeer::LM);

		$criteria->addSelectColumn(VisitorsPeer::LL);

		$criteria->addSelectColumn(VisitorsPeer::LXL);

		$criteria->addSelectColumn(VisitorsPeer::LXXL);

		$criteria->addSelectColumn(VisitorsPeer::LXXXL);

		$criteria->addSelectColumn(VisitorsPeer::S24);

		$criteria->addSelectColumn(VisitorsPeer::S25);

		$criteria->addSelectColumn(VisitorsPeer::S26);

		$criteria->addSelectColumn(VisitorsPeer::S27);

		$criteria->addSelectColumn(VisitorsPeer::S28);

		$criteria->addSelectColumn(VisitorsPeer::S29);

		$criteria->addSelectColumn(VisitorsPeer::S30);

		$criteria->addSelectColumn(VisitorsPeer::SS24);

		$criteria->addSelectColumn(VisitorsPeer::SS25);

		$criteria->addSelectColumn(VisitorsPeer::SS26);

		$criteria->addSelectColumn(VisitorsPeer::SS27);

		$criteria->addSelectColumn(VisitorsPeer::SS28);

		$criteria->addSelectColumn(VisitorsPeer::SS29);

		$criteria->addSelectColumn(VisitorsPeer::SS30);

		$criteria->addSelectColumn(VisitorsPeer::REQUESTED);

		$criteria->addSelectColumn(VisitorsPeer::COMPLETED_DATE);

		$criteria->addSelectColumn(VisitorsPeer::CUSTOMER);

	}

	const COUNT = 'COUNT(visitors.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT visitors.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(VisitorsPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(VisitorsPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = VisitorsPeer::doSelectRS($criteria, $con);
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
		$objects = VisitorsPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return VisitorsPeer::populateObjects(VisitorsPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			VisitorsPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = VisitorsPeer::getOMClass();
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
		return VisitorsPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(VisitorsPeer::ID); 

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
			$comparison = $criteria->getComparison(VisitorsPeer::ID);
			$selectCriteria->add(VisitorsPeer::ID, $criteria->remove(VisitorsPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(VisitorsPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(VisitorsPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Visitors) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(VisitorsPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Visitors $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(VisitorsPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(VisitorsPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(VisitorsPeer::DATABASE_NAME, VisitorsPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = VisitorsPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(VisitorsPeer::DATABASE_NAME);

		$criteria->add(VisitorsPeer::ID, $pk);


		$v = VisitorsPeer::doSelect($criteria, $con);

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
			$criteria->add(VisitorsPeer::ID, $pks, Criteria::IN);
			$objs = VisitorsPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseVisitorsPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/garment/map/VisitorsMapBuilder.php';
	Propel::registerMapBuilder('lib.model.garment.map.VisitorsMapBuilder');
}
