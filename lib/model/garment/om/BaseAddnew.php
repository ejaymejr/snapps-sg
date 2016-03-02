<?php


abstract class BaseAddnew extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $date_time;


	
	protected $user_name = 'null';


	
	protected $email = 'null';


	
	protected $name = 'null';


	
	protected $number = 'null';


	
	protected $hanger_no = 'null';


	
	protected $job_title = 'null';


	
	protected $department = 'null';


	
	protected $shift = 'null';


	
	protected $date_employed;


	
	protected $jumpsuit_w_hood_size;


	
	protected $jumpsuit_size;


	
	protected $booties_size;


	
	protected $hood_size;


	
	protected $labcoat_size;


	
	protected $shoe_size;


	
	protected $safety_shoe_size;


	
	protected $added = 'null';


	
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

	
	public function getHangerNo()
	{

		return $this->hanger_no;
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

	
	public function getDateEmployed($format = 'Y-m-d H:i:s')
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

	
	public function getAdded()
	{

		return $this->added;
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
			$this->modifiedColumns[] = AddnewPeer::ID;
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
			$this->modifiedColumns[] = AddnewPeer::DATE_TIME;
		}

	} 
	
	public function setUserName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->user_name !== $v || $v === 'null') {
			$this->user_name = $v;
			$this->modifiedColumns[] = AddnewPeer::USER_NAME;
		}

	} 
	
	public function setEmail($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->email !== $v || $v === 'null') {
			$this->email = $v;
			$this->modifiedColumns[] = AddnewPeer::EMAIL;
		}

	} 
	
	public function setName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v || $v === 'null') {
			$this->name = $v;
			$this->modifiedColumns[] = AddnewPeer::NAME;
		}

	} 
	
	public function setNumber($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->number !== $v || $v === 'null') {
			$this->number = $v;
			$this->modifiedColumns[] = AddnewPeer::NUMBER;
		}

	} 
	
	public function setHangerNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hanger_no !== $v || $v === 'null') {
			$this->hanger_no = $v;
			$this->modifiedColumns[] = AddnewPeer::HANGER_NO;
		}

	} 
	
	public function setJobTitle($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->job_title !== $v || $v === 'null') {
			$this->job_title = $v;
			$this->modifiedColumns[] = AddnewPeer::JOB_TITLE;
		}

	} 
	
	public function setDepartment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->department !== $v || $v === 'null') {
			$this->department = $v;
			$this->modifiedColumns[] = AddnewPeer::DEPARTMENT;
		}

	} 
	
	public function setShift($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->shift !== $v || $v === 'null') {
			$this->shift = $v;
			$this->modifiedColumns[] = AddnewPeer::SHIFT;
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
			$this->modifiedColumns[] = AddnewPeer::DATE_EMPLOYED;
		}

	} 
	
	public function setJumpsuitWHoodSize($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->jumpsuit_w_hood_size !== $v) {
			$this->jumpsuit_w_hood_size = $v;
			$this->modifiedColumns[] = AddnewPeer::JUMPSUIT_W_HOOD_SIZE;
		}

	} 
	
	public function setJumpsuitSize($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->jumpsuit_size !== $v) {
			$this->jumpsuit_size = $v;
			$this->modifiedColumns[] = AddnewPeer::JUMPSUIT_SIZE;
		}

	} 
	
	public function setBootiesSize($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->booties_size !== $v) {
			$this->booties_size = $v;
			$this->modifiedColumns[] = AddnewPeer::BOOTIES_SIZE;
		}

	} 
	
	public function setHoodSize($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hood_size !== $v) {
			$this->hood_size = $v;
			$this->modifiedColumns[] = AddnewPeer::HOOD_SIZE;
		}

	} 
	
	public function setLabcoatSize($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->labcoat_size !== $v) {
			$this->labcoat_size = $v;
			$this->modifiedColumns[] = AddnewPeer::LABCOAT_SIZE;
		}

	} 
	
	public function setShoeSize($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->shoe_size !== $v) {
			$this->shoe_size = $v;
			$this->modifiedColumns[] = AddnewPeer::SHOE_SIZE;
		}

	} 
	
	public function setSafetyShoeSize($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->safety_shoe_size !== $v) {
			$this->safety_shoe_size = $v;
			$this->modifiedColumns[] = AddnewPeer::SAFETY_SHOE_SIZE;
		}

	} 
	
	public function setAdded($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->added !== $v || $v === 'null') {
			$this->added = $v;
			$this->modifiedColumns[] = AddnewPeer::ADDED;
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
			$this->modifiedColumns[] = AddnewPeer::COMPLETED_DATE;
		}

	} 
	
	public function setCustomer($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->customer !== $v || $v === 'null') {
			$this->customer = $v;
			$this->modifiedColumns[] = AddnewPeer::CUSTOMER;
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

			$this->hanger_no = $rs->getString($startcol + 6);

			$this->job_title = $rs->getString($startcol + 7);

			$this->department = $rs->getString($startcol + 8);

			$this->shift = $rs->getString($startcol + 9);

			$this->date_employed = $rs->getTimestamp($startcol + 10, null);

			$this->jumpsuit_w_hood_size = $rs->getString($startcol + 11);

			$this->jumpsuit_size = $rs->getString($startcol + 12);

			$this->booties_size = $rs->getString($startcol + 13);

			$this->hood_size = $rs->getString($startcol + 14);

			$this->labcoat_size = $rs->getString($startcol + 15);

			$this->shoe_size = $rs->getString($startcol + 16);

			$this->safety_shoe_size = $rs->getString($startcol + 17);

			$this->added = $rs->getString($startcol + 18);

			$this->completed_date = $rs->getTimestamp($startcol + 19, null);

			$this->customer = $rs->getString($startcol + 20);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 21; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Addnew object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(AddnewPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			AddnewPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(AddnewPeer::DATABASE_NAME);
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
					$pk = AddnewPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += AddnewPeer::doUpdate($this, $con);
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


			if (($retval = AddnewPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = AddnewPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getHangerNo();
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
				return $this->getJumpsuitWHoodSize();
				break;
			case 12:
				return $this->getJumpsuitSize();
				break;
			case 13:
				return $this->getBootiesSize();
				break;
			case 14:
				return $this->getHoodSize();
				break;
			case 15:
				return $this->getLabcoatSize();
				break;
			case 16:
				return $this->getShoeSize();
				break;
			case 17:
				return $this->getSafetyShoeSize();
				break;
			case 18:
				return $this->getAdded();
				break;
			case 19:
				return $this->getCompletedDate();
				break;
			case 20:
				return $this->getCustomer();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = AddnewPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDateTime(),
			$keys[2] => $this->getUserName(),
			$keys[3] => $this->getEmail(),
			$keys[4] => $this->getName(),
			$keys[5] => $this->getNumber(),
			$keys[6] => $this->getHangerNo(),
			$keys[7] => $this->getJobTitle(),
			$keys[8] => $this->getDepartment(),
			$keys[9] => $this->getShift(),
			$keys[10] => $this->getDateEmployed(),
			$keys[11] => $this->getJumpsuitWHoodSize(),
			$keys[12] => $this->getJumpsuitSize(),
			$keys[13] => $this->getBootiesSize(),
			$keys[14] => $this->getHoodSize(),
			$keys[15] => $this->getLabcoatSize(),
			$keys[16] => $this->getShoeSize(),
			$keys[17] => $this->getSafetyShoeSize(),
			$keys[18] => $this->getAdded(),
			$keys[19] => $this->getCompletedDate(),
			$keys[20] => $this->getCustomer(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = AddnewPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setHangerNo($value);
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
				$this->setJumpsuitWHoodSize($value);
				break;
			case 12:
				$this->setJumpsuitSize($value);
				break;
			case 13:
				$this->setBootiesSize($value);
				break;
			case 14:
				$this->setHoodSize($value);
				break;
			case 15:
				$this->setLabcoatSize($value);
				break;
			case 16:
				$this->setShoeSize($value);
				break;
			case 17:
				$this->setSafetyShoeSize($value);
				break;
			case 18:
				$this->setAdded($value);
				break;
			case 19:
				$this->setCompletedDate($value);
				break;
			case 20:
				$this->setCustomer($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = AddnewPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDateTime($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setUserName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setEmail($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setName($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setNumber($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setHangerNo($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setJobTitle($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setDepartment($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setShift($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setDateEmployed($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setJumpsuitWHoodSize($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setJumpsuitSize($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setBootiesSize($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setHoodSize($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setLabcoatSize($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setShoeSize($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setSafetyShoeSize($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setAdded($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setCompletedDate($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setCustomer($arr[$keys[20]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(AddnewPeer::DATABASE_NAME);

		if ($this->isColumnModified(AddnewPeer::ID)) $criteria->add(AddnewPeer::ID, $this->id);
		if ($this->isColumnModified(AddnewPeer::DATE_TIME)) $criteria->add(AddnewPeer::DATE_TIME, $this->date_time);
		if ($this->isColumnModified(AddnewPeer::USER_NAME)) $criteria->add(AddnewPeer::USER_NAME, $this->user_name);
		if ($this->isColumnModified(AddnewPeer::EMAIL)) $criteria->add(AddnewPeer::EMAIL, $this->email);
		if ($this->isColumnModified(AddnewPeer::NAME)) $criteria->add(AddnewPeer::NAME, $this->name);
		if ($this->isColumnModified(AddnewPeer::NUMBER)) $criteria->add(AddnewPeer::NUMBER, $this->number);
		if ($this->isColumnModified(AddnewPeer::HANGER_NO)) $criteria->add(AddnewPeer::HANGER_NO, $this->hanger_no);
		if ($this->isColumnModified(AddnewPeer::JOB_TITLE)) $criteria->add(AddnewPeer::JOB_TITLE, $this->job_title);
		if ($this->isColumnModified(AddnewPeer::DEPARTMENT)) $criteria->add(AddnewPeer::DEPARTMENT, $this->department);
		if ($this->isColumnModified(AddnewPeer::SHIFT)) $criteria->add(AddnewPeer::SHIFT, $this->shift);
		if ($this->isColumnModified(AddnewPeer::DATE_EMPLOYED)) $criteria->add(AddnewPeer::DATE_EMPLOYED, $this->date_employed);
		if ($this->isColumnModified(AddnewPeer::JUMPSUIT_W_HOOD_SIZE)) $criteria->add(AddnewPeer::JUMPSUIT_W_HOOD_SIZE, $this->jumpsuit_w_hood_size);
		if ($this->isColumnModified(AddnewPeer::JUMPSUIT_SIZE)) $criteria->add(AddnewPeer::JUMPSUIT_SIZE, $this->jumpsuit_size);
		if ($this->isColumnModified(AddnewPeer::BOOTIES_SIZE)) $criteria->add(AddnewPeer::BOOTIES_SIZE, $this->booties_size);
		if ($this->isColumnModified(AddnewPeer::HOOD_SIZE)) $criteria->add(AddnewPeer::HOOD_SIZE, $this->hood_size);
		if ($this->isColumnModified(AddnewPeer::LABCOAT_SIZE)) $criteria->add(AddnewPeer::LABCOAT_SIZE, $this->labcoat_size);
		if ($this->isColumnModified(AddnewPeer::SHOE_SIZE)) $criteria->add(AddnewPeer::SHOE_SIZE, $this->shoe_size);
		if ($this->isColumnModified(AddnewPeer::SAFETY_SHOE_SIZE)) $criteria->add(AddnewPeer::SAFETY_SHOE_SIZE, $this->safety_shoe_size);
		if ($this->isColumnModified(AddnewPeer::ADDED)) $criteria->add(AddnewPeer::ADDED, $this->added);
		if ($this->isColumnModified(AddnewPeer::COMPLETED_DATE)) $criteria->add(AddnewPeer::COMPLETED_DATE, $this->completed_date);
		if ($this->isColumnModified(AddnewPeer::CUSTOMER)) $criteria->add(AddnewPeer::CUSTOMER, $this->customer);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(AddnewPeer::DATABASE_NAME);

		$criteria->add(AddnewPeer::ID, $this->id);

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

		$copyObj->setHangerNo($this->hanger_no);

		$copyObj->setJobTitle($this->job_title);

		$copyObj->setDepartment($this->department);

		$copyObj->setShift($this->shift);

		$copyObj->setDateEmployed($this->date_employed);

		$copyObj->setJumpsuitWHoodSize($this->jumpsuit_w_hood_size);

		$copyObj->setJumpsuitSize($this->jumpsuit_size);

		$copyObj->setBootiesSize($this->booties_size);

		$copyObj->setHoodSize($this->hood_size);

		$copyObj->setLabcoatSize($this->labcoat_size);

		$copyObj->setShoeSize($this->shoe_size);

		$copyObj->setSafetyShoeSize($this->safety_shoe_size);

		$copyObj->setAdded($this->added);

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
			self::$peer = new AddnewPeer();
		}
		return self::$peer;
	}

} 