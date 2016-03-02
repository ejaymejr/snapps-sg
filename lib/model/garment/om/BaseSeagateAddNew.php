<?php


abstract class BaseSeagateAddNew extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id = 0;


	
	protected $index_no;


	
	protected $date_time;


	
	protected $user_name = 'null';


	
	protected $email = 'null';


	
	protected $name = 'null';


	
	protected $number = 'null';


	
	protected $job_title = 'null';


	
	protected $department = 'null';


	
	protected $shift = 'null';


	
	protected $date_employed;


	
	protected $added = 'null';


	
	protected $completed_date;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getIndexNo()
	{

		return $this->index_no;
	}

	
	public function getDateTime($format = 'Y-m-d H:i:s')
	{

		if ($this->date_time === null || $this->date_time === '') {
			return null;
		} elseif (!is_int($this->date_time)) {
						$ts = strtotime($this->date_time);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_time] as date/time value: " . var_export($this->date_time, true));
			}
		} else {
			$ts = $this->date_time;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getUserName()
	{

		return $this->user_name;
	}

	
	public function getEmail()
	{

		return $this->email;
	}

	
	public function getName()
	{

		return $this->name;
	}

	
	public function getNumber()
	{

		return $this->number;
	}

	
	public function getJobTitle()
	{

		return $this->job_title;
	}

	
	public function getDepartment()
	{

		return $this->department;
	}

	
	public function getShift()
	{

		return $this->shift;
	}

	
	public function getDateEmployed($format = 'Y-m-d')
	{

		if ($this->date_employed === null || $this->date_employed === '') {
			return null;
		} elseif (!is_int($this->date_employed)) {
						$ts = strtotime($this->date_employed);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_employed] as date/time value: " . var_export($this->date_employed, true));
			}
		} else {
			$ts = $this->date_employed;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getAdded()
	{

		return $this->added;
	}

	
	public function getCompletedDate($format = 'Y-m-d')
	{

		if ($this->completed_date === null || $this->completed_date === '') {
			return null;
		} elseif (!is_int($this->completed_date)) {
						$ts = strtotime($this->completed_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [completed_date] as date/time value: " . var_export($this->completed_date, true));
			}
		} else {
			$ts = $this->completed_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v || $v === 0) {
			$this->id = $v;
			$this->modifiedColumns[] = SeagateAddNewPeer::ID;
		}

	} 
	
	public function setIndexNo($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->index_no !== $v) {
			$this->index_no = $v;
			$this->modifiedColumns[] = SeagateAddNewPeer::INDEX_NO;
		}

	} 
	
	public function setDateTime($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_time] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_time !== $ts) {
			$this->date_time = $ts;
			$this->modifiedColumns[] = SeagateAddNewPeer::DATE_TIME;
		}

	} 
	
	public function setUserName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->user_name !== $v || $v === 'null') {
			$this->user_name = $v;
			$this->modifiedColumns[] = SeagateAddNewPeer::USER_NAME;
		}

	} 
	
	public function setEmail($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->email !== $v || $v === 'null') {
			$this->email = $v;
			$this->modifiedColumns[] = SeagateAddNewPeer::EMAIL;
		}

	} 
	
	public function setName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v || $v === 'null') {
			$this->name = $v;
			$this->modifiedColumns[] = SeagateAddNewPeer::NAME;
		}

	} 
	
	public function setNumber($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->number !== $v || $v === 'null') {
			$this->number = $v;
			$this->modifiedColumns[] = SeagateAddNewPeer::NUMBER;
		}

	} 
	
	public function setJobTitle($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->job_title !== $v || $v === 'null') {
			$this->job_title = $v;
			$this->modifiedColumns[] = SeagateAddNewPeer::JOB_TITLE;
		}

	} 
	
	public function setDepartment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->department !== $v || $v === 'null') {
			$this->department = $v;
			$this->modifiedColumns[] = SeagateAddNewPeer::DEPARTMENT;
		}

	} 
	
	public function setShift($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->shift !== $v || $v === 'null') {
			$this->shift = $v;
			$this->modifiedColumns[] = SeagateAddNewPeer::SHIFT;
		}

	} 
	
	public function setDateEmployed($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_employed] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_employed !== $ts) {
			$this->date_employed = $ts;
			$this->modifiedColumns[] = SeagateAddNewPeer::DATE_EMPLOYED;
		}

	} 
	
	public function setAdded($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->added !== $v || $v === 'null') {
			$this->added = $v;
			$this->modifiedColumns[] = SeagateAddNewPeer::ADDED;
		}

	} 
	
	public function setCompletedDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [completed_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->completed_date !== $ts) {
			$this->completed_date = $ts;
			$this->modifiedColumns[] = SeagateAddNewPeer::COMPLETED_DATE;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->index_no = $rs->getInt($startcol + 1);

			$this->date_time = $rs->getTimestamp($startcol + 2, null);

			$this->user_name = $rs->getString($startcol + 3);

			$this->email = $rs->getString($startcol + 4);

			$this->name = $rs->getString($startcol + 5);

			$this->number = $rs->getString($startcol + 6);

			$this->job_title = $rs->getString($startcol + 7);

			$this->department = $rs->getString($startcol + 8);

			$this->shift = $rs->getString($startcol + 9);

			$this->date_employed = $rs->getDate($startcol + 10, null);

			$this->added = $rs->getString($startcol + 11);

			$this->completed_date = $rs->getDate($startcol + 12, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 13; 
		} catch (Exception $e) {
			throw new PropelException("Error populating SeagateAddNew object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SeagateAddNewPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			SeagateAddNewPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(SeagateAddNewPeer::DATABASE_NAME);
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
					$pk = SeagateAddNewPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setIndexNo($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += SeagateAddNewPeer::doUpdate($this, $con);
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


			if (($retval = SeagateAddNewPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SeagateAddNewPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getIndexNo();
				break;
			case 2:
				return $this->getDateTime();
				break;
			case 3:
				return $this->getUserName();
				break;
			case 4:
				return $this->getEmail();
				break;
			case 5:
				return $this->getName();
				break;
			case 6:
				return $this->getNumber();
				break;
			case 7:
				return $this->getJobTitle();
				break;
			case 8:
				return $this->getDepartment();
				break;
			case 9:
				return $this->getShift();
				break;
			case 10:
				return $this->getDateEmployed();
				break;
			case 11:
				return $this->getAdded();
				break;
			case 12:
				return $this->getCompletedDate();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SeagateAddNewPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getIndexNo(),
			$keys[2] => $this->getDateTime(),
			$keys[3] => $this->getUserName(),
			$keys[4] => $this->getEmail(),
			$keys[5] => $this->getName(),
			$keys[6] => $this->getNumber(),
			$keys[7] => $this->getJobTitle(),
			$keys[8] => $this->getDepartment(),
			$keys[9] => $this->getShift(),
			$keys[10] => $this->getDateEmployed(),
			$keys[11] => $this->getAdded(),
			$keys[12] => $this->getCompletedDate(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SeagateAddNewPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setIndexNo($value);
				break;
			case 2:
				$this->setDateTime($value);
				break;
			case 3:
				$this->setUserName($value);
				break;
			case 4:
				$this->setEmail($value);
				break;
			case 5:
				$this->setName($value);
				break;
			case 6:
				$this->setNumber($value);
				break;
			case 7:
				$this->setJobTitle($value);
				break;
			case 8:
				$this->setDepartment($value);
				break;
			case 9:
				$this->setShift($value);
				break;
			case 10:
				$this->setDateEmployed($value);
				break;
			case 11:
				$this->setAdded($value);
				break;
			case 12:
				$this->setCompletedDate($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SeagateAddNewPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIndexNo($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDateTime($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setUserName($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setEmail($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setName($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setNumber($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setJobTitle($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setDepartment($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setShift($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setDateEmployed($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setAdded($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setCompletedDate($arr[$keys[12]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(SeagateAddNewPeer::DATABASE_NAME);

		if ($this->isColumnModified(SeagateAddNewPeer::ID)) $criteria->add(SeagateAddNewPeer::ID, $this->id);
		if ($this->isColumnModified(SeagateAddNewPeer::INDEX_NO)) $criteria->add(SeagateAddNewPeer::INDEX_NO, $this->index_no);
		if ($this->isColumnModified(SeagateAddNewPeer::DATE_TIME)) $criteria->add(SeagateAddNewPeer::DATE_TIME, $this->date_time);
		if ($this->isColumnModified(SeagateAddNewPeer::USER_NAME)) $criteria->add(SeagateAddNewPeer::USER_NAME, $this->user_name);
		if ($this->isColumnModified(SeagateAddNewPeer::EMAIL)) $criteria->add(SeagateAddNewPeer::EMAIL, $this->email);
		if ($this->isColumnModified(SeagateAddNewPeer::NAME)) $criteria->add(SeagateAddNewPeer::NAME, $this->name);
		if ($this->isColumnModified(SeagateAddNewPeer::NUMBER)) $criteria->add(SeagateAddNewPeer::NUMBER, $this->number);
		if ($this->isColumnModified(SeagateAddNewPeer::JOB_TITLE)) $criteria->add(SeagateAddNewPeer::JOB_TITLE, $this->job_title);
		if ($this->isColumnModified(SeagateAddNewPeer::DEPARTMENT)) $criteria->add(SeagateAddNewPeer::DEPARTMENT, $this->department);
		if ($this->isColumnModified(SeagateAddNewPeer::SHIFT)) $criteria->add(SeagateAddNewPeer::SHIFT, $this->shift);
		if ($this->isColumnModified(SeagateAddNewPeer::DATE_EMPLOYED)) $criteria->add(SeagateAddNewPeer::DATE_EMPLOYED, $this->date_employed);
		if ($this->isColumnModified(SeagateAddNewPeer::ADDED)) $criteria->add(SeagateAddNewPeer::ADDED, $this->added);
		if ($this->isColumnModified(SeagateAddNewPeer::COMPLETED_DATE)) $criteria->add(SeagateAddNewPeer::COMPLETED_DATE, $this->completed_date);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(SeagateAddNewPeer::DATABASE_NAME);

		$criteria->add(SeagateAddNewPeer::INDEX_NO, $this->index_no);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getIndexNo();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setIndexNo($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setId($this->id);

		$copyObj->setDateTime($this->date_time);

		$copyObj->setUserName($this->user_name);

		$copyObj->setEmail($this->email);

		$copyObj->setName($this->name);

		$copyObj->setNumber($this->number);

		$copyObj->setJobTitle($this->job_title);

		$copyObj->setDepartment($this->department);

		$copyObj->setShift($this->shift);

		$copyObj->setDateEmployed($this->date_employed);

		$copyObj->setAdded($this->added);

		$copyObj->setCompletedDate($this->completed_date);


		$copyObj->setNew(true);

		$copyObj->setIndexNo(NULL); 
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
			self::$peer = new SeagateAddNewPeer();
		}
		return self::$peer;
	}

} 