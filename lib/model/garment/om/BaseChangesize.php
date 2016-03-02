<?php


abstract class BaseChangesize extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $date_time;


	
	protected $user_name = 'null';


	
	protected $email = 'null';


	
	protected $name = 'null';


	
	protected $number = 'null';


	
	protected $department = 'null';


	
	protected $shift = 'null';


	
	protected $jumpsuit_w_hood_size;


	
	protected $jumpsuit_size;


	
	protected $booties_size;


	
	protected $hood_size;


	
	protected $labcoat_size;


	
	protected $shoe_size;


	
	protected $safety_shoe_size;


	
	protected $changed = 'null';


	
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

	
	public function getDepartment()
	{

		return $this->department;
	}

	
	public function getShift()
	{

		return $this->shift;
	}

	
	public function getJumpsuitWHoodSize()
	{

		return $this->jumpsuit_w_hood_size;
	}

	
	public function getJumpsuitSize()
	{

		return $this->jumpsuit_size;
	}

	
	public function getBootiesSize()
	{

		return $this->booties_size;
	}

	
	public function getHoodSize()
	{

		return $this->hood_size;
	}

	
	public function getLabcoatSize()
	{

		return $this->labcoat_size;
	}

	
	public function getShoeSize()
	{

		return $this->shoe_size;
	}

	
	public function getSafetyShoeSize()
	{

		return $this->safety_shoe_size;
	}

	
	public function getChanged()
	{

		return $this->changed;
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
			$this->modifiedColumns[] = ChangesizePeer::ID;
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
			$this->modifiedColumns[] = ChangesizePeer::DATE_TIME;
		}

	} 
	
	public function setUserName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->user_name !== $v || $v === 'null') {
			$this->user_name = $v;
			$this->modifiedColumns[] = ChangesizePeer::USER_NAME;
		}

	} 
	
	public function setEmail($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->email !== $v || $v === 'null') {
			$this->email = $v;
			$this->modifiedColumns[] = ChangesizePeer::EMAIL;
		}

	} 
	
	public function setName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v || $v === 'null') {
			$this->name = $v;
			$this->modifiedColumns[] = ChangesizePeer::NAME;
		}

	} 
	
	public function setNumber($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->number !== $v || $v === 'null') {
			$this->number = $v;
			$this->modifiedColumns[] = ChangesizePeer::NUMBER;
		}

	} 
	
	public function setDepartment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->department !== $v || $v === 'null') {
			$this->department = $v;
			$this->modifiedColumns[] = ChangesizePeer::DEPARTMENT;
		}

	} 
	
	public function setShift($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->shift !== $v || $v === 'null') {
			$this->shift = $v;
			$this->modifiedColumns[] = ChangesizePeer::SHIFT;
		}

	} 
	
	public function setJumpsuitWHoodSize($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->jumpsuit_w_hood_size !== $v) {
			$this->jumpsuit_w_hood_size = $v;
			$this->modifiedColumns[] = ChangesizePeer::JUMPSUIT_W_HOOD_SIZE;
		}

	} 
	
	public function setJumpsuitSize($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->jumpsuit_size !== $v) {
			$this->jumpsuit_size = $v;
			$this->modifiedColumns[] = ChangesizePeer::JUMPSUIT_SIZE;
		}

	} 
	
	public function setBootiesSize($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->booties_size !== $v) {
			$this->booties_size = $v;
			$this->modifiedColumns[] = ChangesizePeer::BOOTIES_SIZE;
		}

	} 
	
	public function setHoodSize($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hood_size !== $v) {
			$this->hood_size = $v;
			$this->modifiedColumns[] = ChangesizePeer::HOOD_SIZE;
		}

	} 
	
	public function setLabcoatSize($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->labcoat_size !== $v) {
			$this->labcoat_size = $v;
			$this->modifiedColumns[] = ChangesizePeer::LABCOAT_SIZE;
		}

	} 
	
	public function setShoeSize($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->shoe_size !== $v) {
			$this->shoe_size = $v;
			$this->modifiedColumns[] = ChangesizePeer::SHOE_SIZE;
		}

	} 
	
	public function setSafetyShoeSize($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->safety_shoe_size !== $v) {
			$this->safety_shoe_size = $v;
			$this->modifiedColumns[] = ChangesizePeer::SAFETY_SHOE_SIZE;
		}

	} 
	
	public function setChanged($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->changed !== $v || $v === 'null') {
			$this->changed = $v;
			$this->modifiedColumns[] = ChangesizePeer::CHANGED;
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
			$this->modifiedColumns[] = ChangesizePeer::COMPLETED_DATE;
		}

	} 
	
	public function setCustomer($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->customer !== $v || $v === 'null') {
			$this->customer = $v;
			$this->modifiedColumns[] = ChangesizePeer::CUSTOMER;
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

			$this->department = $rs->getString($startcol + 6);

			$this->shift = $rs->getString($startcol + 7);

			$this->jumpsuit_w_hood_size = $rs->getString($startcol + 8);

			$this->jumpsuit_size = $rs->getString($startcol + 9);

			$this->booties_size = $rs->getString($startcol + 10);

			$this->hood_size = $rs->getString($startcol + 11);

			$this->labcoat_size = $rs->getString($startcol + 12);

			$this->shoe_size = $rs->getString($startcol + 13);

			$this->safety_shoe_size = $rs->getString($startcol + 14);

			$this->changed = $rs->getString($startcol + 15);

			$this->completed_date = $rs->getTimestamp($startcol + 16, null);

			$this->customer = $rs->getString($startcol + 17);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 18; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Changesize object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ChangesizePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ChangesizePeer::doDelete($this, $con);
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
			$con = Propel::getConnection(ChangesizePeer::DATABASE_NAME);
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
					$pk = ChangesizePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ChangesizePeer::doUpdate($this, $con);
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


			if (($retval = ChangesizePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ChangesizePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getDepartment();
				break;
			case 7:
				return $this->getShift();
				break;
			case 8:
				return $this->getJumpsuitWHoodSize();
				break;
			case 9:
				return $this->getJumpsuitSize();
				break;
			case 10:
				return $this->getBootiesSize();
				break;
			case 11:
				return $this->getHoodSize();
				break;
			case 12:
				return $this->getLabcoatSize();
				break;
			case 13:
				return $this->getShoeSize();
				break;
			case 14:
				return $this->getSafetyShoeSize();
				break;
			case 15:
				return $this->getChanged();
				break;
			case 16:
				return $this->getCompletedDate();
				break;
			case 17:
				return $this->getCustomer();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ChangesizePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDateTime(),
			$keys[2] => $this->getUserName(),
			$keys[3] => $this->getEmail(),
			$keys[4] => $this->getName(),
			$keys[5] => $this->getNumber(),
			$keys[6] => $this->getDepartment(),
			$keys[7] => $this->getShift(),
			$keys[8] => $this->getJumpsuitWHoodSize(),
			$keys[9] => $this->getJumpsuitSize(),
			$keys[10] => $this->getBootiesSize(),
			$keys[11] => $this->getHoodSize(),
			$keys[12] => $this->getLabcoatSize(),
			$keys[13] => $this->getShoeSize(),
			$keys[14] => $this->getSafetyShoeSize(),
			$keys[15] => $this->getChanged(),
			$keys[16] => $this->getCompletedDate(),
			$keys[17] => $this->getCustomer(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ChangesizePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setDepartment($value);
				break;
			case 7:
				$this->setShift($value);
				break;
			case 8:
				$this->setJumpsuitWHoodSize($value);
				break;
			case 9:
				$this->setJumpsuitSize($value);
				break;
			case 10:
				$this->setBootiesSize($value);
				break;
			case 11:
				$this->setHoodSize($value);
				break;
			case 12:
				$this->setLabcoatSize($value);
				break;
			case 13:
				$this->setShoeSize($value);
				break;
			case 14:
				$this->setSafetyShoeSize($value);
				break;
			case 15:
				$this->setChanged($value);
				break;
			case 16:
				$this->setCompletedDate($value);
				break;
			case 17:
				$this->setCustomer($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ChangesizePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDateTime($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setUserName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setEmail($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setName($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setNumber($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDepartment($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setShift($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setJumpsuitWHoodSize($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setJumpsuitSize($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setBootiesSize($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setHoodSize($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setLabcoatSize($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setShoeSize($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setSafetyShoeSize($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setChanged($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setCompletedDate($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setCustomer($arr[$keys[17]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ChangesizePeer::DATABASE_NAME);

		if ($this->isColumnModified(ChangesizePeer::ID)) $criteria->add(ChangesizePeer::ID, $this->id);
		if ($this->isColumnModified(ChangesizePeer::DATE_TIME)) $criteria->add(ChangesizePeer::DATE_TIME, $this->date_time);
		if ($this->isColumnModified(ChangesizePeer::USER_NAME)) $criteria->add(ChangesizePeer::USER_NAME, $this->user_name);
		if ($this->isColumnModified(ChangesizePeer::EMAIL)) $criteria->add(ChangesizePeer::EMAIL, $this->email);
		if ($this->isColumnModified(ChangesizePeer::NAME)) $criteria->add(ChangesizePeer::NAME, $this->name);
		if ($this->isColumnModified(ChangesizePeer::NUMBER)) $criteria->add(ChangesizePeer::NUMBER, $this->number);
		if ($this->isColumnModified(ChangesizePeer::DEPARTMENT)) $criteria->add(ChangesizePeer::DEPARTMENT, $this->department);
		if ($this->isColumnModified(ChangesizePeer::SHIFT)) $criteria->add(ChangesizePeer::SHIFT, $this->shift);
		if ($this->isColumnModified(ChangesizePeer::JUMPSUIT_W_HOOD_SIZE)) $criteria->add(ChangesizePeer::JUMPSUIT_W_HOOD_SIZE, $this->jumpsuit_w_hood_size);
		if ($this->isColumnModified(ChangesizePeer::JUMPSUIT_SIZE)) $criteria->add(ChangesizePeer::JUMPSUIT_SIZE, $this->jumpsuit_size);
		if ($this->isColumnModified(ChangesizePeer::BOOTIES_SIZE)) $criteria->add(ChangesizePeer::BOOTIES_SIZE, $this->booties_size);
		if ($this->isColumnModified(ChangesizePeer::HOOD_SIZE)) $criteria->add(ChangesizePeer::HOOD_SIZE, $this->hood_size);
		if ($this->isColumnModified(ChangesizePeer::LABCOAT_SIZE)) $criteria->add(ChangesizePeer::LABCOAT_SIZE, $this->labcoat_size);
		if ($this->isColumnModified(ChangesizePeer::SHOE_SIZE)) $criteria->add(ChangesizePeer::SHOE_SIZE, $this->shoe_size);
		if ($this->isColumnModified(ChangesizePeer::SAFETY_SHOE_SIZE)) $criteria->add(ChangesizePeer::SAFETY_SHOE_SIZE, $this->safety_shoe_size);
		if ($this->isColumnModified(ChangesizePeer::CHANGED)) $criteria->add(ChangesizePeer::CHANGED, $this->changed);
		if ($this->isColumnModified(ChangesizePeer::COMPLETED_DATE)) $criteria->add(ChangesizePeer::COMPLETED_DATE, $this->completed_date);
		if ($this->isColumnModified(ChangesizePeer::CUSTOMER)) $criteria->add(ChangesizePeer::CUSTOMER, $this->customer);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ChangesizePeer::DATABASE_NAME);

		$criteria->add(ChangesizePeer::ID, $this->id);

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

		$copyObj->setDepartment($this->department);

		$copyObj->setShift($this->shift);

		$copyObj->setJumpsuitWHoodSize($this->jumpsuit_w_hood_size);

		$copyObj->setJumpsuitSize($this->jumpsuit_size);

		$copyObj->setBootiesSize($this->booties_size);

		$copyObj->setHoodSize($this->hood_size);

		$copyObj->setLabcoatSize($this->labcoat_size);

		$copyObj->setShoeSize($this->shoe_size);

		$copyObj->setSafetyShoeSize($this->safety_shoe_size);

		$copyObj->setChanged($this->changed);

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
			self::$peer = new ChangesizePeer();
		}
		return self::$peer;
	}

} 