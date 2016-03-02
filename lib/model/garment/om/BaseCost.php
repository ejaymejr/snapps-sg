<?php


abstract class BaseCost extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $month = 0;


	
	protected $year = 0;


	
	protected $department = 'null';


	
	protected $cost = 0;


	
	protected $type = 'null';


	
	protected $quantity = 0;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getMonth()
	{

		return $this->month;
	}

	
	public function getYear()
	{

		return $this->year;
	}

	
	public function getDepartment()
	{

		return $this->department;
	}

	
	public function getCost()
	{

		return $this->cost;
	}

	
	public function getType()
	{

		return $this->type;
	}

	
	public function getQuantity()
	{

		return $this->quantity;
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = CostPeer::ID;
		}

	} 
	
	public function setMonth($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->month !== $v || $v === 0) {
			$this->month = $v;
			$this->modifiedColumns[] = CostPeer::MONTH;
		}

	} 
	
	public function setYear($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->year !== $v || $v === 0) {
			$this->year = $v;
			$this->modifiedColumns[] = CostPeer::YEAR;
		}

	} 
	
	public function setDepartment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->department !== $v || $v === 'null') {
			$this->department = $v;
			$this->modifiedColumns[] = CostPeer::DEPARTMENT;
		}

	} 
	
	public function setCost($v)
	{

		if ($this->cost !== $v || $v === 0) {
			$this->cost = $v;
			$this->modifiedColumns[] = CostPeer::COST;
		}

	} 
	
	public function setType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->type !== $v || $v === 'null') {
			$this->type = $v;
			$this->modifiedColumns[] = CostPeer::TYPE;
		}

	} 
	
	public function setQuantity($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->quantity !== $v || $v === 0) {
			$this->quantity = $v;
			$this->modifiedColumns[] = CostPeer::QUANTITY;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->month = $rs->getInt($startcol + 1);

			$this->year = $rs->getInt($startcol + 2);

			$this->department = $rs->getString($startcol + 3);

			$this->cost = $rs->getFloat($startcol + 4);

			$this->type = $rs->getString($startcol + 5);

			$this->quantity = $rs->getInt($startcol + 6);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 7; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Cost object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CostPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			CostPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(CostPeer::DATABASE_NAME);
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
					$pk = CostPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += CostPeer::doUpdate($this, $con);
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


			if (($retval = CostPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CostPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getMonth();
				break;
			case 2:
				return $this->getYear();
				break;
			case 3:
				return $this->getDepartment();
				break;
			case 4:
				return $this->getCost();
				break;
			case 5:
				return $this->getType();
				break;
			case 6:
				return $this->getQuantity();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CostPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getMonth(),
			$keys[2] => $this->getYear(),
			$keys[3] => $this->getDepartment(),
			$keys[4] => $this->getCost(),
			$keys[5] => $this->getType(),
			$keys[6] => $this->getQuantity(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CostPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setMonth($value);
				break;
			case 2:
				$this->setYear($value);
				break;
			case 3:
				$this->setDepartment($value);
				break;
			case 4:
				$this->setCost($value);
				break;
			case 5:
				$this->setType($value);
				break;
			case 6:
				$this->setQuantity($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CostPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setMonth($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setYear($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDepartment($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCost($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setType($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setQuantity($arr[$keys[6]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(CostPeer::DATABASE_NAME);

		if ($this->isColumnModified(CostPeer::ID)) $criteria->add(CostPeer::ID, $this->id);
		if ($this->isColumnModified(CostPeer::MONTH)) $criteria->add(CostPeer::MONTH, $this->month);
		if ($this->isColumnModified(CostPeer::YEAR)) $criteria->add(CostPeer::YEAR, $this->year);
		if ($this->isColumnModified(CostPeer::DEPARTMENT)) $criteria->add(CostPeer::DEPARTMENT, $this->department);
		if ($this->isColumnModified(CostPeer::COST)) $criteria->add(CostPeer::COST, $this->cost);
		if ($this->isColumnModified(CostPeer::TYPE)) $criteria->add(CostPeer::TYPE, $this->type);
		if ($this->isColumnModified(CostPeer::QUANTITY)) $criteria->add(CostPeer::QUANTITY, $this->quantity);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(CostPeer::DATABASE_NAME);

		$criteria->add(CostPeer::ID, $this->id);

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

		$copyObj->setMonth($this->month);

		$copyObj->setYear($this->year);

		$copyObj->setDepartment($this->department);

		$copyObj->setCost($this->cost);

		$copyObj->setType($this->type);

		$copyObj->setQuantity($this->quantity);


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
			self::$peer = new CostPeer();
		}
		return self::$peer;
	}

} 