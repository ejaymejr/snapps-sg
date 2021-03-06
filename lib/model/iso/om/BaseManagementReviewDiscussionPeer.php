<?php


abstract class BaseManagementReviewDiscussionPeer {

	
	const DATABASE_NAME = 'iso';

	
	const TABLE_NAME = 'management_review_discussion';

	
	const CLASS_DEFAULT = 'lib.model.iso.ManagementReviewDiscussion';

	
	const NUM_COLUMNS = 10;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'management_review_discussion.ID';

	
	const MANAGEMENT_REVIEW_ID = 'management_review_discussion.MANAGEMENT_REVIEW_ID';

	
	const DISCUSSION = 'management_review_discussion.DISCUSSION';

	
	const PROP_ACTION = 'management_review_discussion.PROP_ACTION';

	
	const ACTION_DATE = 'management_review_discussion.ACTION_DATE';

	
	const INDEX_NO = 'management_review_discussion.INDEX_NO';

	
	const DATE_CREATED = 'management_review_discussion.DATE_CREATED';

	
	const CREATED_BY = 'management_review_discussion.CREATED_BY';

	
	const DATE_MODIFIED = 'management_review_discussion.DATE_MODIFIED';

	
	const MODIFIED_BY = 'management_review_discussion.MODIFIED_BY';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'ManagementReviewId', 'Discussion', 'PropAction', 'ActionDate', 'IndexNo', 'DateCreated', 'CreatedBy', 'DateModified', 'ModifiedBy', ),
		BasePeer::TYPE_COLNAME => array (ManagementReviewDiscussionPeer::ID, ManagementReviewDiscussionPeer::MANAGEMENT_REVIEW_ID, ManagementReviewDiscussionPeer::DISCUSSION, ManagementReviewDiscussionPeer::PROP_ACTION, ManagementReviewDiscussionPeer::ACTION_DATE, ManagementReviewDiscussionPeer::INDEX_NO, ManagementReviewDiscussionPeer::DATE_CREATED, ManagementReviewDiscussionPeer::CREATED_BY, ManagementReviewDiscussionPeer::DATE_MODIFIED, ManagementReviewDiscussionPeer::MODIFIED_BY, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'management_review_id', 'discussion', 'prop_action', 'action_date', 'index_no', 'date_created', 'created_by', 'date_modified', 'modified_by', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'ManagementReviewId' => 1, 'Discussion' => 2, 'PropAction' => 3, 'ActionDate' => 4, 'IndexNo' => 5, 'DateCreated' => 6, 'CreatedBy' => 7, 'DateModified' => 8, 'ModifiedBy' => 9, ),
		BasePeer::TYPE_COLNAME => array (ManagementReviewDiscussionPeer::ID => 0, ManagementReviewDiscussionPeer::MANAGEMENT_REVIEW_ID => 1, ManagementReviewDiscussionPeer::DISCUSSION => 2, ManagementReviewDiscussionPeer::PROP_ACTION => 3, ManagementReviewDiscussionPeer::ACTION_DATE => 4, ManagementReviewDiscussionPeer::INDEX_NO => 5, ManagementReviewDiscussionPeer::DATE_CREATED => 6, ManagementReviewDiscussionPeer::CREATED_BY => 7, ManagementReviewDiscussionPeer::DATE_MODIFIED => 8, ManagementReviewDiscussionPeer::MODIFIED_BY => 9, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'management_review_id' => 1, 'discussion' => 2, 'prop_action' => 3, 'action_date' => 4, 'index_no' => 5, 'date_created' => 6, 'created_by' => 7, 'date_modified' => 8, 'modified_by' => 9, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/iso/map/ManagementReviewDiscussionMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.iso.map.ManagementReviewDiscussionMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = ManagementReviewDiscussionPeer::getTableMap();
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
		return str_replace(ManagementReviewDiscussionPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(ManagementReviewDiscussionPeer::ID);

		$criteria->addSelectColumn(ManagementReviewDiscussionPeer::MANAGEMENT_REVIEW_ID);

		$criteria->addSelectColumn(ManagementReviewDiscussionPeer::DISCUSSION);

		$criteria->addSelectColumn(ManagementReviewDiscussionPeer::PROP_ACTION);

		$criteria->addSelectColumn(ManagementReviewDiscussionPeer::ACTION_DATE);

		$criteria->addSelectColumn(ManagementReviewDiscussionPeer::INDEX_NO);

		$criteria->addSelectColumn(ManagementReviewDiscussionPeer::DATE_CREATED);

		$criteria->addSelectColumn(ManagementReviewDiscussionPeer::CREATED_BY);

		$criteria->addSelectColumn(ManagementReviewDiscussionPeer::DATE_MODIFIED);

		$criteria->addSelectColumn(ManagementReviewDiscussionPeer::MODIFIED_BY);

	}

	const COUNT = 'COUNT(management_review_discussion.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT management_review_discussion.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ManagementReviewDiscussionPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ManagementReviewDiscussionPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = ManagementReviewDiscussionPeer::doSelectRS($criteria, $con);
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
		$objects = ManagementReviewDiscussionPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return ManagementReviewDiscussionPeer::populateObjects(ManagementReviewDiscussionPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			ManagementReviewDiscussionPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = ManagementReviewDiscussionPeer::getOMClass();
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
		return ManagementReviewDiscussionPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(ManagementReviewDiscussionPeer::ID); 

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
			$comparison = $criteria->getComparison(ManagementReviewDiscussionPeer::ID);
			$selectCriteria->add(ManagementReviewDiscussionPeer::ID, $criteria->remove(ManagementReviewDiscussionPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(ManagementReviewDiscussionPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(ManagementReviewDiscussionPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof ManagementReviewDiscussion) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ManagementReviewDiscussionPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(ManagementReviewDiscussion $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ManagementReviewDiscussionPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ManagementReviewDiscussionPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(ManagementReviewDiscussionPeer::DATABASE_NAME, ManagementReviewDiscussionPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = ManagementReviewDiscussionPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

		$criteria = new Criteria(ManagementReviewDiscussionPeer::DATABASE_NAME);

		$criteria->add(ManagementReviewDiscussionPeer::ID, $pk);


		$v = ManagementReviewDiscussionPeer::doSelect($criteria, $con);

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
			$criteria->add(ManagementReviewDiscussionPeer::ID, $pks, Criteria::IN);
			$objs = ManagementReviewDiscussionPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseManagementReviewDiscussionPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/iso/map/ManagementReviewDiscussionMapBuilder.php';
	Propel::registerMapBuilder('lib.model.iso.map.ManagementReviewDiscussionMapBuilder');
}
