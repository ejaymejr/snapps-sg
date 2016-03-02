<?php


abstract class BaseCheckDoWearerinformation extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $number = 'null';


	
	protected $name = 'null';


	
	protected $job_title = 'null';


	
	protected $access_level = 'null';


	
	protected $password = 'null';


	
	protected $email = 'null';


	
	protected $customer_id;


	
	protected $customer = 'null';


	
	protected $allow_access = 'null';


	
	protected $department = 'null';


	
	protected $shift = 'null';

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getNumber()
	{

		return $this->number;
	}

	
	public function getName()
	{

		return $this->name;
	}

	
	public function getJobTitle()
	{

		return $this->job_title;
	}

	
	public function getAccessLevel()
	{

		return $this->access_level;
	}

	
	public function getPassword()
	{

		return $this->password;
	}

	
	public function getEmail()
	{

		return $this->email;
	}

	
	public function getCustomerId()
	{

		return $this->customer_id;
	}

	
	public function getCustomer()
	{

		return $this->customer;
	}

	
	public function getAllowAccess()
	{

		return $this->allow_access;
	}

	
	public function getDepartment()
	{

		return $this->department;
	}

	
	public function getShift()
	{

		return $this->shift;
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = CheckDoWearerinformationPeer::ID;
		}

	} 
	
	public function setNumber($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->number !== $v || $v === 'null') {
			$this->number = $v;
			$this->modifiedColumns[] = CheckDoWearerinformationPeer::NUMBER;
		}

	} 
	
	public function setName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v || $v === 'null') {
			$this->name = $v;
			$this->modifiedColumns[] = CheckDoWearerinformationPeer::NAME;
		}

	} 
	
	public function setJobTitle($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->job_title !== $v || $v === 'null') {
			$this->job_title = $v;
			$this->modifiedColumns[] = CheckDoWearerinformationPeer::JOB_TITLE;
		}

	} 
	
	public function setAccessLevel($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->access_level !== $v || $v === 'null') {
			$this->access_level = $v;
			$this->modifiedColumns[] = CheckDoWearerinformationPeer::ACCESS_LEVEL;
		}

	} 
	
	public function setPassword($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->password !== $v || $v === 'null') {
			$this->password = $v;
			$this->modifiedColumns[] = CheckDoWearerinformationPeer::PASSWORD;
		}

	} 
	
	public function setEmail($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->email !== $v || $v === 'null') {
			$this->email = $v;
			$this->modifiedColumns[] = CheckDoWearerinformationPeer::EMAIL;
		}

	} 
	
	public function setCustomerId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->customer_id !== $v) {
			$this->customer_id = $v;
			$this->modifiedColumns[] = CheckDoWearerinformationPeer::CUSTOMER_ID;
		}

	} 
	
	public function setCustomer($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->customer !== $v || $v === 'null') {
			$this->customer = $v;
			$this->modifiedColumns[] = CheckDoWearerinformationPeer::CUSTOMER;
		}

	} 
	
	public function setAllowAccess($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->allow_access !== $v || $v === 'null') {
			$this->allow_access = $v;
			$this->modifiedColumns[] = CheckDoWearerinformationPeer::ALLOW_ACCESS;
		}

	} 
	
	public function setDepartment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->department !== $v || $v === 'null') {
			$this->department = $v;
			$this->modifiedColumns[] = CheckDoWearerinformationPeer::DEPARTMENT;
		}

	} 
	
	public function setShift($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->shift !== $v || $v === 'null') {
			$this->shift = $v;
			$this->modifiedColumns[] = CheckDoWearerinformationPeer::SHIFT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->number = $rs->getString($startcol + 1);

			$this->name = $rs->getString($startcol + 2);

			$this->job_title = $rs->getString($startcol + 3);

			$this->access_level = $rs->getString($startcol + 4);

			$this->password = $rs->getString($startcol + 5);

			$this->email = $rs->getString($startcol + 6);

			$this->customer_id = $rs->getString($startcol + 7);

			$this->customer = $rs->getString($startcol + 8);

			$this->allow_access = $rs->getString($startcol + 9);

			$this->department = $rs->getString($startcol + 10);

			$this->shift = $rs->getString($startcol + 11);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 12; 
		} catch (Exception $e) {
			throw new PropelException("Error populating CheckDoWearerinformation object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CheckDoWearerinformationPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			CheckDoWearerinformationPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(CheckDoWearerinformationPeer::DATABASE_NAME);
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
					$pk = CheckDoWearerinformationPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += CheckDoWearerinformationPeer::doUpdate($this, $con);
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


			if (($retval = CheckDoWearerinformationPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CheckDoWearerinformationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getNumber();
				break;
			case 2:
				return $this->getName();
				break;
			case 3:
				return $this->getJobTitle();
				break;
			case 4:
				return $this->getAccessLevel();
				break;
			case 5:
				return $this->getPassword();
				break;
			case 6:
				return $this->getEmail();
				break;
			case 7:
				return $this->getCustomerId();
				break;
			case 8:
				return $this->getCustomer();
				break;
			case 9:
				return $this->getAllowAccess();
				break;
			case 10:
				return $this->getDepartment();
				break;
			case 11:
				return $this->getShift();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CheckDoWearerinformationPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getNumber(),
			$keys[2] => $this->getName(),
			$keys[3] => $this->getJobTitle(),
			$keys[4] => $this->getAccessLevel(),
			$keys[5] => $this->getPassword(),
			$keys[6] => $this->getEmail(),
			$keys[7] => $this->getCustomerId(),
			$keys[8] => $this->getCustomer(),
			$keys[9] => $this->getAllowAccess(),
			$keys[10] => $this->getDepartment(),
			$keys[11] => $this->getShift(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CheckDoWearerinformationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setNumber($value);
				break;
			case 2:
				$this->setName($value);
				break;
			case 3:
				$this->setJobTitle($value);
				break;
			case 4:
				$this->setAccessLevel($value);
				break;
			case 5:
				$this->setPassword($value);
				break;
			case 6:
				$this->setEmail($value);
				break;
			case 7:
				$this->setCustomerId($value);
				break;
			case 8:
				$this->setCustomer($value);
				break;
			case 9:
				$this->setAllowAccess($value);
				break;
			case 10:
				$this->setDepartment($value);
				break;
			case 11:
				$this->setShift($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CheckDoWearerinformationPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setNumber($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setJobTitle($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setAccessLevel($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setPassword($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setEmail($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCustomerId($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setCustomer($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setAllowAccess($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setDepartment($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setShift($arr[$keys[11]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(CheckDoWearerinformationPeer::DATABASE_NAME);

		if ($this->isColumnModified(CheckDoWearerinformationPeer::ID)) $criteria->add(CheckDoWearerinformationPeer::ID, $this->id);
		if ($this->isColumnModified(CheckDoWearerinformationPeer::NUMBER)) $criteria->add(CheckDoWearerinformationPeer::NUMBER, $this->number);
		if ($this->isColumnModified(CheckDoWearerinformationPeer::NAME)) $criteria->add(CheckDoWearerinformationPeer::NAME, $this->name);
		if ($this->isColumnModified(CheckDoWearerinformationPeer::JOB_TITLE)) $criteria->add(CheckDoWearerinformationPeer::JOB_TITLE, $this->job_title);
		if ($this->isColumnModified(CheckDoWearerinformationPeer::ACCESS_LEVEL)) $criteria->add(CheckDoWearerinformationPeer::ACCESS_LEVEL, $this->access_level);
		if ($this->isColumnModified(CheckDoWearerinformationPeer::PASSWORD)) $criteria->add(CheckDoWearerinformationPeer::PASSWORD, $this->password);
		if ($this->isColumnModified(CheckDoWearerinformationPeer::EMAIL)) $criteria->add(CheckDoWearerinformationPeer::EMAIL, $this->email);
		if ($this->isColumnModified(CheckDoWearerinformationPeer::CUSTOMER_ID)) $criteria->add(CheckDoWearerinformationPeer::CUSTOMER_ID, $this->customer_id);
		if ($this->isColumnModified(CheckDoWearerinformationPeer::CUSTOMER)) $criteria->add(CheckDoWearerinformationPeer::CUSTOMER, $this->customer);
		if ($this->isColumnModified(CheckDoWearerinformationPeer::ALLOW_ACCESS)) $criteria->add(CheckDoWearerinformationPeer::ALLOW_ACCESS, $this->allow_access);
		if ($this->isColumnModified(CheckDoWearerinformationPeer::DEPARTMENT)) $criteria->add(CheckDoWearerinformationPeer::DEPARTMENT, $this->department);
		if ($this->isColumnModified(CheckDoWearerinformationPeer::SHIFT)) $criteria->add(CheckDoWearerinformationPeer::SHIFT, $this->shift);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(CheckDoWearerinformationPeer::DATABASE_NAME);

		$criteria->add(CheckDoWearerinformationPeer::ID, $this->id);

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

		$copyObj->setNumber($this->number);

		$copyObj->setName($this->name);

		$copyObj->setJobTitle($this->job_title);

		$copyObj->setAccessLevel($this->access_level);

		$copyObj->setPassword($this->password);

		$copyObj->setEmail($this->email);

		$copyObj->setCustomerId($this->customer_id);

		$copyObj->setCustomer($this->customer);

		$copyObj->setAllowAccess($this->allow_access);

		$copyObj->setDepartment($this->department);

		$copyObj->setShift($this->shift);


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
			self::$peer = new CheckDoWearerinformationPeer();
		}
		return self::$peer;
	}

} 