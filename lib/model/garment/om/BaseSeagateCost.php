<?php


abstract class BaseSeagateCost extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id = 0;


	
	protected $index_no;


	
	protected $month = 0;


	
	protected $year = 0;


	
	protected $department = 'null';


	
	protected $cost = 0;


	
	protected $cost_per_head = 0;


	
	protected $type = 'null';


	
	protected $quantity = 0;

	
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

	
	public function getCostPerHead()
	{

		return $this->cost_per_head;
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

		if ($this->id !== $v || $v === 0) {
			$this->id = $v;
			$this->modifiedColumns[] = SeagateCostPeer::ID;
		}

	} 
	
	public function setIndexNo($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->index_no !== $v) {
			$this->index_no = $v;
			$this->modifiedColumns[] = SeagateCostPeer::INDEX_NO;
		}

	} 
	
	public function setMonth($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->month !== $v || $v === 0) {
			$this->month = $v;
			$this->modifiedColumns[] = SeagateCostPeer::MONTH;
		}

	} 
	
	public function setYear($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->year !== $v || $v === 0) {
			$this->year = $v;
			$this->modifiedColumns[] = SeagateCostPeer::YEAR;
		}

	} 
	
	public function setDepartment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->department !== $v || $v === 'null') {
			$this->department = $v;
			$this->modifiedColumns[] = SeagateCostPeer::DEPARTMENT;
		}

	} 
	
	public function setCost($v)
	{

		if ($this->cost !== $v || $v === 0) {
			$this->cost = $v;
			$this->modifiedColumns[] = SeagateCostPeer::COST;
		}

	} 
	
	public function setCostPerHead($v)
	{

		if ($this->cost_per_head !== $v || $v === 0) {
			$this->cost_per_head = $v;
			$this->modifiedColumns[] = SeagateCostPeer::COST_PER_HEAD;
		}

	} 
	
	public function setType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->type !== $v || $v === 'null') {
			$this->type = $v;
			$this->modifiedColumns[] = SeagateCostPeer::TYPE;
		}

	} 
	
	public function setQuantity($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->quantity !== $v || $v === 0) {
			$this->quantity = $v;
			$this->modifiedColumns[] = SeagateCostPeer::QUANTITY;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->index_no = $rs->getInt($startcol + 1);

			$this->month = $rs->getInt($startcol + 2);

			$this->year = $rs->getInt($startcol + 3);

			$this->department = $rs->getString($startcol + 4);

			$this->cost = $rs->getFloat($startcol + 5);

			$this->cost_per_head = $rs->getFloat($startcol + 6);

			$this->type = $rs->getString($startcol + 7);

			$this->quantity = $rs->getInt($startcol + 8);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 9; 
		} catch (Exception $e) {
			throw new PropelException("Error populating SeagateCost object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SeagateCostPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			SeagateCostPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(SeagateCostPeer::DATABASE_NAME);
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
					$pk = SeagateCostPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setIndexNo($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += SeagateCostPeer::doUpdate($this, $con);
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


			if (($retval = SeagateCostPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SeagateCostPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getMonth();
				break;
			case 3:
				return $this->getYear();
				break;
			case 4:
				return $this->getDepartment();
				break;
			case 5:
				return $this->getCost();
				break;
			case 6:
				return $this->getCostPerHead();
				break;
			case 7:
				return $this->getType();
				break;
			case 8:
				return $this->getQuantity();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SeagateCostPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getIndexNo(),
			$keys[2] => $this->getMonth(),
			$keys[3] => $this->getYear(),
			$keys[4] => $this->getDepartment(),
			$keys[5] => $this->getCost(),
			$keys[6] => $this->getCostPerHead(),
			$keys[7] => $this->getType(),
			$keys[8] => $this->getQuantity(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SeagateCostPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setMonth($value);
				break;
			case 3:
				$this->setYear($value);
				break;
			case 4:
				$this->setDepartment($value);
				break;
			case 5:
				$this->setCost($value);
				break;
			case 6:
				$this->setCostPerHead($value);
				break;
			case 7:
				$this->setType($value);
				break;
			case 8:
				$this->setQuantity($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SeagateCostPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIndexNo($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setMonth($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setYear($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDepartment($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCost($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCostPerHead($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setType($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setQuantity($arr[$keys[8]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(SeagateCostPeer::DATABASE_NAME);

		if ($this->isColumnModified(SeagateCostPeer::ID)) $criteria->add(SeagateCostPeer::ID, $this->id);
		if ($this->isColumnModified(SeagateCostPeer::INDEX_NO)) $criteria->add(SeagateCostPeer::INDEX_NO, $this->index_no);
		if ($this->isColumnModified(SeagateCostPeer::MONTH)) $criteria->add(SeagateCostPeer::MONTH, $this->month);
		if ($this->isColumnModified(SeagateCostPeer::YEAR)) $criteria->add(SeagateCostPeer::YEAR, $this->year);
		if ($this->isColumnModified(SeagateCostPeer::DEPARTMENT)) $criteria->add(SeagateCostPeer::DEPARTMENT, $this->department);
		if ($this->isColumnModified(SeagateCostPeer::COST)) $criteria->add(SeagateCostPeer::COST, $this->cost);
		if ($this->isColumnModified(SeagateCostPeer::COST_PER_HEAD)) $criteria->add(SeagateCostPeer::COST_PER_HEAD, $this->cost_per_head);
		if ($this->isColumnModified(SeagateCostPeer::TYPE)) $criteria->add(SeagateCostPeer::TYPE, $this->type);
		if ($this->isColumnModified(SeagateCostPeer::QUANTITY)) $criteria->add(SeagateCostPeer::QUANTITY, $this->quantity);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(SeagateCostPeer::DATABASE_NAME);

		$criteria->add(SeagateCostPeer::INDEX_NO, $this->index_no);

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

		$copyObj->setMonth($this->month);

		$copyObj->setYear($this->year);

		$copyObj->setDepartment($this->department);

		$copyObj->setCost($this->cost);

		$copyObj->setCostPerHead($this->cost_per_head);

		$copyObj->setType($this->type);

		$copyObj->setQuantity($this->quantity);


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
			self::$peer = new SeagateCostPeer();
		}
		return self::$peer;
	}

} 