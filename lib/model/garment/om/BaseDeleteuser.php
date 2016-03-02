<?php


abstract class BaseDeleteuser extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $date_time;


	
	protected $user_name = 'null';


	
	protected $email = 'null';


	
	protected $name = 'null';


	
	protected $number = 'null';


	
	protected $job_title = 'null';


	
	protected $department = 'null';


	
	protected $shift = 'null';


	
	protected $deleted = 'null';


	
	protected $completed_date;


	
	protected $customer = 'null';

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
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

	
	public function getDeleted()
	{

		return $this->deleted;
	}

	
	public function getCompletedDate($format = 'Y-m-d H:i:s')
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

	
	public function getCustomer()
	{

		return $this->customer;
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = DeleteuserPeer::ID;
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
			$this->modifiedColumns[] = DeleteuserPeer::DATE_TIME;
		}

	} 
	
	public function setUserName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->user_name !== $v || $v === 'null') {
			$this->user_name = $v;
			$this->modifiedColumns[] = DeleteuserPeer::USER_NAME;
		}

	} 
	
	public function setEmail($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->email !== $v || $v === 'null') {
			$this->email = $v;
			$this->modifiedColumns[] = DeleteuserPeer::EMAIL;
		}

	} 
	
	public function setName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v || $v === 'null') {
			$this->name = $v;
			$this->modifiedColumns[] = DeleteuserPeer::NAME;
		}

	} 
	
	public function setNumber($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->number !== $v || $v === 'null') {
			$this->number = $v;
			$this->modifiedColumns[] = DeleteuserPeer::NUMBER;
		}

	} 
	
	public function setJobTitle($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->job_title !== $v || $v === 'null') {
			$this->job_title = $v;
			$this->modifiedColumns[] = DeleteuserPeer::JOB_TITLE;
		}

	} 
	
	public function setDepartment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->department !== $v || $v === 'null') {
			$this->department = $v;
			$this->modifiedColumns[] = DeleteuserPeer::DEPARTMENT;
		}

	} 
	
	public function setShift($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->shift !== $v || $v === 'null') {
			$this->shift = $v;
			$this->modifiedColumns[] = DeleteuserPeer::SHIFT;
		}

	} 
	
	public function setDeleted($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->deleted !== $v || $v === 'null') {
			$this->deleted = $v;
			$this->modifiedColumns[] = DeleteuserPeer::DELETED;
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
			$this->modifiedColumns[] = DeleteuserPeer::COMPLETED_DATE;
		}

	} 
	
	public function setCustomer($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->customer !== $v || $v === 'null') {
			$this->customer = $v;
			$this->modifiedColumns[] = DeleteuserPeer::CUSTOMER;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->date_time = $rs->getTimestamp($startcol + 1, null);

			$this->user_name = $rs->getString($startcol + 2);

			$this->email = $rs->getString($startcol + 3);

			$this->name = $rs->getString($startcol + 4);

			$this->number = $rs->getString($startcol + 5);

			$this->job_title = $rs->getString($startcol + 6);

			$this->department = $rs->getString($startcol + 7);

			$this->shift = $rs->getString($startcol + 8);

			$this->deleted = $rs->getString($startcol + 9);

			$this->completed_date = $rs->getTimestamp($startcol + 10, null);

			$this->customer = $rs->getString($startcol + 11);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 12; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Deleteuser object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(DeleteuserPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			DeleteuserPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(DeleteuserPeer::DATABASE_NAME);
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
					$pk = DeleteuserPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += DeleteuserPeer::doUpdate($this, $con);
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


			if (($retval = DeleteuserPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = DeleteuserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getDateTime();
				break;
			case 2:
				return $this->getUserName();
				break;
			case 3:
				return $this->getEmail();
				break;
			case 4:
				return $this->getName();
				break;
			case 5:
				return $this->getNumber();
				break;
			case 6:
				return $this->getJobTitle();
				break;
			case 7:
				return $this->getDepartment();
				break;
			case 8:
				return $this->getShift();
				break;
			case 9:
				return $this->getDeleted();
				break;
			case 10:
				return $this->getCompletedDate();
				break;
			case 11:
				return $this->getCustomer();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = DeleteuserPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDateTime(),
			$keys[2] => $this->getUserName(),
			$keys[3] => $this->getEmail(),
			$keys[4] => $this->getName(),
			$keys[5] => $this->getNumber(),
			$keys[6] => $this->getJobTitle(),
			$keys[7] => $this->getDepartment(),
			$keys[8] => $this->getShift(),
			$keys[9] => $this->getDeleted(),
			$keys[10] => $this->getCompletedDate(),
			$keys[11] => $this->getCustomer(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = DeleteuserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setDateTime($value);
				break;
			case 2:
				$this->setUserName($value);
				break;
			case 3:
				$this->setEmail($value);
				break;
			case 4:
				$this->setName($value);
				break;
			case 5:
				$this->setNumber($value);
				break;
			case 6:
				$this->setJobTitle($value);
				break;
			case 7:
				$this->setDepartment($value);
				break;
			case 8:
				$this->setShift($value);
				break;
			case 9:
				$this->setDeleted($value);
				break;
			case 10:
				$this->setCompletedDate($value);
				break;
			case 11:
				$this->setCustomer($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = DeleteuserPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDateTime($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setUserName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setEmail($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setName($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setNumber($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setJobTitle($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setDepartment($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setShift($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setDeleted($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setCompletedDate($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setCustomer($arr[$keys[11]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(DeleteuserPeer::DATABASE_NAME);

		if ($this->isColumnModified(DeleteuserPeer::ID)) $criteria->add(DeleteuserPeer::ID, $this->id);
		if ($this->isColumnModified(DeleteuserPeer::DATE_TIME)) $criteria->add(DeleteuserPeer::DATE_TIME, $this->date_time);
		if ($this->isColumnModified(DeleteuserPeer::USER_NAME)) $criteria->add(DeleteuserPeer::USER_NAME, $this->user_name);
		if ($this->isColumnModified(DeleteuserPeer::EMAIL)) $criteria->add(DeleteuserPeer::EMAIL, $this->email);
		if ($this->isColumnModified(DeleteuserPeer::NAME)) $criteria->add(DeleteuserPeer::NAME, $this->name);
		if ($this->isColumnModified(DeleteuserPeer::NUMBER)) $criteria->add(DeleteuserPeer::NUMBER, $this->number);
		if ($this->isColumnModified(DeleteuserPeer::JOB_TITLE)) $criteria->add(DeleteuserPeer::JOB_TITLE, $this->job_title);
		if ($this->isColumnModified(DeleteuserPeer::DEPARTMENT)) $criteria->add(DeleteuserPeer::DEPARTMENT, $this->department);
		if ($this->isColumnModified(DeleteuserPeer::SHIFT)) $criteria->add(DeleteuserPeer::SHIFT, $this->shift);
		if ($this->isColumnModified(DeleteuserPeer::DELETED)) $criteria->add(DeleteuserPeer::DELETED, $this->deleted);
		if ($this->isColumnModified(DeleteuserPeer::COMPLETED_DATE)) $criteria->add(DeleteuserPeer::COMPLETED_DATE, $this->completed_date);
		if ($this->isColumnModified(DeleteuserPeer::CUSTOMER)) $criteria->add(DeleteuserPeer::CUSTOMER, $this->customer);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(DeleteuserPeer::DATABASE_NAME);

		$criteria->add(DeleteuserPeer::ID, $this->id);

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

		$copyObj->setDateTime($this->date_time);

		$copyObj->setUserName($this->user_name);

		$copyObj->setEmail($this->email);

		$copyObj->setName($this->name);

		$copyObj->setNumber($this->number);

		$copyObj->setJobTitle($this->job_title);

		$copyObj->setDepartment($this->department);

		$copyObj->setShift($this->shift);

		$copyObj->setDeleted($this->deleted);

		$copyObj->setCompletedDate($this->completed_date);

		$copyObj->setCustomer($this->customer);


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
			self::$peer = new DeleteuserPeer();
		}
		return self::$peer;
	}

} 