<?php


abstract class BaseManagementReviewDiscussion extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $management_review_id;


	
	protected $discussion;


	
	protected $prop_action;


	
	protected $action_date;


	
	protected $index_no;


	
	protected $date_created;


	
	protected $created_by;


	
	protected $date_modified;


	
	protected $modified_by;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getManagementReviewId()
	{

		return $this->management_review_id;
	}

	
	public function getDiscussion()
	{

		return $this->discussion;
	}

	
	public function getPropAction()
	{

		return $this->prop_action;
	}

	
	public function getActionDate()
	{

		return $this->action_date;
	}

	
	public function getIndexNo()
	{

		return $this->index_no;
	}

	
	public function getDateCreated($format = 'Y-m-d H:i:s')
	{

		if ($this->date_created === null || $this->date_created === '') {
			return null;
		} elseif (!is_int($this->date_created)) {
						$ts = strtotime($this->date_created);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_created] as date/time value: " . var_export($this->date_created, true));
			}
		} else {
			$ts = $this->date_created;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getCreatedBy()
	{

		return $this->created_by;
	}

	
	public function getDateModified($format = 'Y-m-d H:i:s')
	{

		if ($this->date_modified === null || $this->date_modified === '') {
			return null;
		} elseif (!is_int($this->date_modified)) {
						$ts = strtotime($this->date_modified);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_modified] as date/time value: " . var_export($this->date_modified, true));
			}
		} else {
			$ts = $this->date_modified;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getModifiedBy()
	{

		return $this->modified_by;
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ManagementReviewDiscussionPeer::ID;
		}

	} 
	
	public function setManagementReviewId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->management_review_id !== $v) {
			$this->management_review_id = $v;
			$this->modifiedColumns[] = ManagementReviewDiscussionPeer::MANAGEMENT_REVIEW_ID;
		}

	} 
	
	public function setDiscussion($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->discussion !== $v) {
			$this->discussion = $v;
			$this->modifiedColumns[] = ManagementReviewDiscussionPeer::DISCUSSION;
		}

	} 
	
	public function setPropAction($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->prop_action !== $v) {
			$this->prop_action = $v;
			$this->modifiedColumns[] = ManagementReviewDiscussionPeer::PROP_ACTION;
		}

	} 
	
	public function setActionDate($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->action_date !== $v) {
			$this->action_date = $v;
			$this->modifiedColumns[] = ManagementReviewDiscussionPeer::ACTION_DATE;
		}

	} 
	
	public function setIndexNo($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->index_no !== $v) {
			$this->index_no = $v;
			$this->modifiedColumns[] = ManagementReviewDiscussionPeer::INDEX_NO;
		}

	} 
	
	public function setDateCreated($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_created] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_created !== $ts) {
			$this->date_created = $ts;
			$this->modifiedColumns[] = ManagementReviewDiscussionPeer::DATE_CREATED;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = ManagementReviewDiscussionPeer::CREATED_BY;
		}

	} 
	
	public function setDateModified($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_modified] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_modified !== $ts) {
			$this->date_modified = $ts;
			$this->modifiedColumns[] = ManagementReviewDiscussionPeer::DATE_MODIFIED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = ManagementReviewDiscussionPeer::MODIFIED_BY;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->management_review_id = $rs->getInt($startcol + 1);

			$this->discussion = $rs->getString($startcol + 2);

			$this->prop_action = $rs->getString($startcol + 3);

			$this->action_date = $rs->getString($startcol + 4);

			$this->index_no = $rs->getInt($startcol + 5);

			$this->date_created = $rs->getTimestamp($startcol + 6, null);

			$this->created_by = $rs->getString($startcol + 7);

			$this->date_modified = $rs->getTimestamp($startcol + 8, null);

			$this->modified_by = $rs->getString($startcol + 9);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 10; 
		} catch (Exception $e) {
			throw new PropelException("Error populating ManagementReviewDiscussion object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ManagementReviewDiscussionPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ManagementReviewDiscussionPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ManagementReviewDiscussionPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			$affectedRows = $this->doSave($con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	protected function doSave($con)
	{
		$affectedRows = 0; 		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = ManagementReviewDiscussionPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ManagementReviewDiscussionPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			$this->alreadyInSave = false;
		}
		return $affectedRows;
	} 
	
	protected $validationFailures = array();

	
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = ManagementReviewDiscussionPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ManagementReviewDiscussionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getManagementReviewId();
				break;
			case 2:
				return $this->getDiscussion();
				break;
			case 3:
				return $this->getPropAction();
				break;
			case 4:
				return $this->getActionDate();
				break;
			case 5:
				return $this->getIndexNo();
				break;
			case 6:
				return $this->getDateCreated();
				break;
			case 7:
				return $this->getCreatedBy();
				break;
			case 8:
				return $this->getDateModified();
				break;
			case 9:
				return $this->getModifiedBy();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ManagementReviewDiscussionPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getManagementReviewId(),
			$keys[2] => $this->getDiscussion(),
			$keys[3] => $this->getPropAction(),
			$keys[4] => $this->getActionDate(),
			$keys[5] => $this->getIndexNo(),
			$keys[6] => $this->getDateCreated(),
			$keys[7] => $this->getCreatedBy(),
			$keys[8] => $this->getDateModified(),
			$keys[9] => $this->getModifiedBy(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ManagementReviewDiscussionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setManagementReviewId($value);
				break;
			case 2:
				$this->setDiscussion($value);
				break;
			case 3:
				$this->setPropAction($value);
				break;
			case 4:
				$this->setActionDate($value);
				break;
			case 5:
				$this->setIndexNo($value);
				break;
			case 6:
				$this->setDateCreated($value);
				break;
			case 7:
				$this->setCreatedBy($value);
				break;
			case 8:
				$this->setDateModified($value);
				break;
			case 9:
				$this->setModifiedBy($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ManagementReviewDiscussionPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setManagementReviewId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDiscussion($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setPropAction($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setActionDate($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setIndexNo($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDateCreated($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCreatedBy($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setDateModified($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setModifiedBy($arr[$keys[9]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ManagementReviewDiscussionPeer::DATABASE_NAME);

		if ($this->isColumnModified(ManagementReviewDiscussionPeer::ID)) $criteria->add(ManagementReviewDiscussionPeer::ID, $this->id);
		if ($this->isColumnModified(ManagementReviewDiscussionPeer::MANAGEMENT_REVIEW_ID)) $criteria->add(ManagementReviewDiscussionPeer::MANAGEMENT_REVIEW_ID, $this->management_review_id);
		if ($this->isColumnModified(ManagementReviewDiscussionPeer::DISCUSSION)) $criteria->add(ManagementReviewDiscussionPeer::DISCUSSION, $this->discussion);
		if ($this->isColumnModified(ManagementReviewDiscussionPeer::PROP_ACTION)) $criteria->add(ManagementReviewDiscussionPeer::PROP_ACTION, $this->prop_action);
		if ($this->isColumnModified(ManagementReviewDiscussionPeer::ACTION_DATE)) $criteria->add(ManagementReviewDiscussionPeer::ACTION_DATE, $this->action_date);
		if ($this->isColumnModified(ManagementReviewDiscussionPeer::INDEX_NO)) $criteria->add(ManagementReviewDiscussionPeer::INDEX_NO, $this->index_no);
		if ($this->isColumnModified(ManagementReviewDiscussionPeer::DATE_CREATED)) $criteria->add(ManagementReviewDiscussionPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(ManagementReviewDiscussionPeer::CREATED_BY)) $criteria->add(ManagementReviewDiscussionPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(ManagementReviewDiscussionPeer::DATE_MODIFIED)) $criteria->add(ManagementReviewDiscussionPeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(ManagementReviewDiscussionPeer::MODIFIED_BY)) $criteria->add(ManagementReviewDiscussionPeer::MODIFIED_BY, $this->modified_by);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ManagementReviewDiscussionPeer::DATABASE_NAME);

		$criteria->add(ManagementReviewDiscussionPeer::ID, $this->id);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setManagementReviewId($this->management_review_id);

		$copyObj->setDiscussion($this->discussion);

		$copyObj->setPropAction($this->prop_action);

		$copyObj->setActionDate($this->action_date);

		$copyObj->setIndexNo($this->index_no);

		$copyObj->setDateCreated($this->date_created);

		$copyObj->setCreatedBy($this->created_by);

		$copyObj->setDateModified($this->date_modified);

		$copyObj->setModifiedBy($this->modified_by);


		$copyObj->setNew(true);

		$copyObj->setId(NULL); 
	}

	
	public function copy($deepCopy = false)
	{
				$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new ManagementReviewDiscussionPeer();
		}
		return self::$peer;
	}

} 