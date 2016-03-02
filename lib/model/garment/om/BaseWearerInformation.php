<?php


abstract class BaseWearerInformation extends BaseObject  implements Persistent {


	
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


	
	protected $date_created;


	
	protected $modified_by = 'null';


	
	protected $date_modified;

	
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

	
	public function getModifiedBy()
	{

		return $this->modified_by;
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

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = WearerInformationPeer::ID;
		}

	} 
	
	public function setNumber($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->number !== $v || $v === 'null') {
			$this->number = $v;
			$this->modifiedColumns[] = WearerInformationPeer::NUMBER;
		}

	} 
	
	public function setName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v || $v === 'null') {
			$this->name = $v;
			$this->modifiedColumns[] = WearerInformationPeer::NAME;
		}

	} 
	
	public function setJobTitle($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->job_title !== $v || $v === 'null') {
			$this->job_title = $v;
			$this->modifiedColumns[] = WearerInformationPeer::JOB_TITLE;
		}

	} 
	
	public function setAccessLevel($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->access_level !== $v || $v === 'null') {
			$this->access_level = $v;
			$this->modifiedColumns[] = WearerInformationPeer::ACCESS_LEVEL;
		}

	} 
	
	public function setPassword($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->password !== $v || $v === 'null') {
			$this->password = $v;
			$this->modifiedColumns[] = WearerInformationPeer::PASSWORD;
		}

	} 
	
	public function setEmail($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->email !== $v || $v === 'null') {
			$this->email = $v;
			$this->modifiedColumns[] = WearerInformationPeer::EMAIL;
		}

	} 
	
	public function setCustomerId($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->customer_id !== $v) {
			$this->customer_id = $v;
			$this->modifiedColumns[] = WearerInformationPeer::CUSTOMER_ID;
		}

	} 
	
	public function setCustomer($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->customer !== $v || $v === 'null') {
			$this->customer = $v;
			$this->modifiedColumns[] = WearerInformationPeer::CUSTOMER;
		}

	} 
	
	public function setAllowAccess($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->allow_access !== $v || $v === 'null') {
			$this->allow_access = $v;
			$this->modifiedColumns[] = WearerInformationPeer::ALLOW_ACCESS;
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
			$this->modifiedColumns[] = WearerInformationPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v || $v === 'null') {
			$this->modified_by = $v;
			$this->modifiedColumns[] = WearerInformationPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = WearerInformationPeer::DATE_MODIFIED;
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

			$this->date_created = $rs->getTimestamp($startcol + 10, null);

			$this->modified_by = $rs->getString($startcol + 11);

			$this->date_modified = $rs->getTimestamp($startcol + 12, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 13; 
		} catch (Exception $e) {
			throw new PropelException("Error populating WearerInformation object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(WearerInformationPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			WearerInformationPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(WearerInformationPeer::DATABASE_NAME);
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
					$pk = WearerInformationPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += WearerInformationPeer::doUpdate($this, $con);
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


			if (($retval = WearerInformationPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = WearerInformationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getDateCreated();
				break;
			case 11:
				return $this->getModifiedBy();
				break;
			case 12:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = WearerInformationPeer::getFieldNames($keyType);
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
			$keys[10] => $this->getDateCreated(),
			$keys[11] => $this->getModifiedBy(),
			$keys[12] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = WearerInformationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setDateCreated($value);
				break;
			case 11:
				$this->setModifiedBy($value);
				break;
			case 12:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = WearerInformationPeer::getFieldNames($keyType);

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
		if (array_key_exists($keys[10], $arr)) $this->setDateCreated($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setModifiedBy($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setDateModified($arr[$keys[12]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(WearerInformationPeer::DATABASE_NAME);

		if ($this->isColumnModified(WearerInformationPeer::ID)) $criteria->add(WearerInformationPeer::ID, $this->id);
		if ($this->isColumnModified(WearerInformationPeer::NUMBER)) $criteria->add(WearerInformationPeer::NUMBER, $this->number);
		if ($this->isColumnModified(WearerInformationPeer::NAME)) $criteria->add(WearerInformationPeer::NAME, $this->name);
		if ($this->isColumnModified(WearerInformationPeer::JOB_TITLE)) $criteria->add(WearerInformationPeer::JOB_TITLE, $this->job_title);
		if ($this->isColumnModified(WearerInformationPeer::ACCESS_LEVEL)) $criteria->add(WearerInformationPeer::ACCESS_LEVEL, $this->access_level);
		if ($this->isColumnModified(WearerInformationPeer::PASSWORD)) $criteria->add(WearerInformationPeer::PASSWORD, $this->password);
		if ($this->isColumnModified(WearerInformationPeer::EMAIL)) $criteria->add(WearerInformationPeer::EMAIL, $this->email);
		if ($this->isColumnModified(WearerInformationPeer::CUSTOMER_ID)) $criteria->add(WearerInformationPeer::CUSTOMER_ID, $this->customer_id);
		if ($this->isColumnModified(WearerInformationPeer::CUSTOMER)) $criteria->add(WearerInformationPeer::CUSTOMER, $this->customer);
		if ($this->isColumnModified(WearerInformationPeer::ALLOW_ACCESS)) $criteria->add(WearerInformationPeer::ALLOW_ACCESS, $this->allow_access);
		if ($this->isColumnModified(WearerInformationPeer::DATE_CREATED)) $criteria->add(WearerInformationPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(WearerInformationPeer::MODIFIED_BY)) $criteria->add(WearerInformationPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(WearerInformationPeer::DATE_MODIFIED)) $criteria->add(WearerInformationPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(WearerInformationPeer::DATABASE_NAME);

		$criteria->add(WearerInformationPeer::ID, $this->id);

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

		$copyObj->setDateCreated($this->date_created);

		$copyObj->setModifiedBy($this->modified_by);

		$copyObj->setDateModified($this->date_modified);


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
			self::$peer = new WearerInformationPeer();
		}
		return self::$peer;
	}

} 