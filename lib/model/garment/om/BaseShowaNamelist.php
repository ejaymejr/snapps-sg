<?php


abstract class BaseShowaNamelist extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $employee_number = 'null';


	
	protected $name = 'null';


	
	protected $location = 'null';


	
	protected $department = 'null';

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getEmployeeNumber()
	{

		return $this->employee_number;
	}

	
	public function getName()
	{

		return $this->name;
	}

	
	public function getLocation()
	{

		return $this->location;
	}

	
	public function getDepartment()
	{

		return $this->department;
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ShowaNamelistPeer::ID;
		}

	} 
	
	public function setEmployeeNumber($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->employee_number !== $v || $v === 'null') {
			$this->employee_number = $v;
			$this->modifiedColumns[] = ShowaNamelistPeer::EMPLOYEE_NUMBER;
		}

	} 
	
	public function setName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v || $v === 'null') {
			$this->name = $v;
			$this->modifiedColumns[] = ShowaNamelistPeer::NAME;
		}

	} 
	
	public function setLocation($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->location !== $v || $v === 'null') {
			$this->location = $v;
			$this->modifiedColumns[] = ShowaNamelistPeer::LOCATION;
		}

	} 
	
	public function setDepartment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->department !== $v || $v === 'null') {
			$this->department = $v;
			$this->modifiedColumns[] = ShowaNamelistPeer::DEPARTMENT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->employee_number = $rs->getString($startcol + 1);

			$this->name = $rs->getString($startcol + 2);

			$this->location = $rs->getString($startcol + 3);

			$this->department = $rs->getString($startcol + 4);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 5; 
		} catch (Exception $e) {
			throw new PropelException("Error populating ShowaNamelist object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ShowaNamelistPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ShowaNamelistPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(ShowaNamelistPeer::DATABASE_NAME);
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
					$pk = ShowaNamelistPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ShowaNamelistPeer::doUpdate($this, $con);
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


			if (($retval = ShowaNamelistPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ShowaNamelistPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getEmployeeNumber();
				break;
			case 2:
				return $this->getName();
				break;
			case 3:
				return $this->getLocation();
				break;
			case 4:
				return $this->getDepartment();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ShowaNamelistPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getEmployeeNumber(),
			$keys[2] => $this->getName(),
			$keys[3] => $this->getLocation(),
			$keys[4] => $this->getDepartment(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ShowaNamelistPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setEmployeeNumber($value);
				break;
			case 2:
				$this->setName($value);
				break;
			case 3:
				$this->setLocation($value);
				break;
			case 4:
				$this->setDepartment($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ShowaNamelistPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setEmployeeNumber($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setLocation($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDepartment($arr[$keys[4]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ShowaNamelistPeer::DATABASE_NAME);

		if ($this->isColumnModified(ShowaNamelistPeer::ID)) $criteria->add(ShowaNamelistPeer::ID, $this->id);
		if ($this->isColumnModified(ShowaNamelistPeer::EMPLOYEE_NUMBER)) $criteria->add(ShowaNamelistPeer::EMPLOYEE_NUMBER, $this->employee_number);
		if ($this->isColumnModified(ShowaNamelistPeer::NAME)) $criteria->add(ShowaNamelistPeer::NAME, $this->name);
		if ($this->isColumnModified(ShowaNamelistPeer::LOCATION)) $criteria->add(ShowaNamelistPeer::LOCATION, $this->location);
		if ($this->isColumnModified(ShowaNamelistPeer::DEPARTMENT)) $criteria->add(ShowaNamelistPeer::DEPARTMENT, $this->department);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ShowaNamelistPeer::DATABASE_NAME);

		$criteria->add(ShowaNamelistPeer::ID, $this->id);

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

		$copyObj->setEmployeeNumber($this->employee_number);

		$copyObj->setName($this->name);

		$copyObj->setLocation($this->location);

		$copyObj->setDepartment($this->department);


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
			self::$peer = new ShowaNamelistPeer();
		}
		return self::$peer;
	}

} 