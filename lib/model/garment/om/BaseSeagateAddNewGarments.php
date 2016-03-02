<?php


abstract class BaseSeagateAddNewGarments extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id = 0;


	
	protected $index_no;


	
	protected $add_new_index = 0;


	
	protected $garment_type = 'null';


	
	protected $garment_size = 'null';


	
	protected $garment_color = 'null';


	
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

	
	public function getAddNewIndex()
	{

		return $this->add_new_index;
	}

	
	public function getGarmentType()
	{

		return $this->garment_type;
	}

	
	public function getGarmentSize()
	{

		return $this->garment_size;
	}

	
	public function getGarmentColor()
	{

		return $this->garment_color;
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
			$this->modifiedColumns[] = SeagateAddNewGarmentsPeer::ID;
		}

	} 
	
	public function setIndexNo($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->index_no !== $v) {
			$this->index_no = $v;
			$this->modifiedColumns[] = SeagateAddNewGarmentsPeer::INDEX_NO;
		}

	} 
	
	public function setAddNewIndex($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->add_new_index !== $v || $v === 0) {
			$this->add_new_index = $v;
			$this->modifiedColumns[] = SeagateAddNewGarmentsPeer::ADD_NEW_INDEX;
		}

	} 
	
	public function setGarmentType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->garment_type !== $v || $v === 'null') {
			$this->garment_type = $v;
			$this->modifiedColumns[] = SeagateAddNewGarmentsPeer::GARMENT_TYPE;
		}

	} 
	
	public function setGarmentSize($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->garment_size !== $v || $v === 'null') {
			$this->garment_size = $v;
			$this->modifiedColumns[] = SeagateAddNewGarmentsPeer::GARMENT_SIZE;
		}

	} 
	
	public function setGarmentColor($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->garment_color !== $v || $v === 'null') {
			$this->garment_color = $v;
			$this->modifiedColumns[] = SeagateAddNewGarmentsPeer::GARMENT_COLOR;
		}

	} 
	
	public function setQuantity($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->quantity !== $v || $v === 0) {
			$this->quantity = $v;
			$this->modifiedColumns[] = SeagateAddNewGarmentsPeer::QUANTITY;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->index_no = $rs->getInt($startcol + 1);

			$this->add_new_index = $rs->getInt($startcol + 2);

			$this->garment_type = $rs->getString($startcol + 3);

			$this->garment_size = $rs->getString($startcol + 4);

			$this->garment_color = $rs->getString($startcol + 5);

			$this->quantity = $rs->getInt($startcol + 6);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 7; 
		} catch (Exception $e) {
			throw new PropelException("Error populating SeagateAddNewGarments object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SeagateAddNewGarmentsPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			SeagateAddNewGarmentsPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(SeagateAddNewGarmentsPeer::DATABASE_NAME);
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
					$pk = SeagateAddNewGarmentsPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setIndexNo($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += SeagateAddNewGarmentsPeer::doUpdate($this, $con);
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


			if (($retval = SeagateAddNewGarmentsPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SeagateAddNewGarmentsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getAddNewIndex();
				break;
			case 3:
				return $this->getGarmentType();
				break;
			case 4:
				return $this->getGarmentSize();
				break;
			case 5:
				return $this->getGarmentColor();
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
		$keys = SeagateAddNewGarmentsPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getIndexNo(),
			$keys[2] => $this->getAddNewIndex(),
			$keys[3] => $this->getGarmentType(),
			$keys[4] => $this->getGarmentSize(),
			$keys[5] => $this->getGarmentColor(),
			$keys[6] => $this->getQuantity(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SeagateAddNewGarmentsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setAddNewIndex($value);
				break;
			case 3:
				$this->setGarmentType($value);
				break;
			case 4:
				$this->setGarmentSize($value);
				break;
			case 5:
				$this->setGarmentColor($value);
				break;
			case 6:
				$this->setQuantity($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SeagateAddNewGarmentsPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIndexNo($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setAddNewIndex($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setGarmentType($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setGarmentSize($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setGarmentColor($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setQuantity($arr[$keys[6]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(SeagateAddNewGarmentsPeer::DATABASE_NAME);

		if ($this->isColumnModified(SeagateAddNewGarmentsPeer::ID)) $criteria->add(SeagateAddNewGarmentsPeer::ID, $this->id);
		if ($this->isColumnModified(SeagateAddNewGarmentsPeer::INDEX_NO)) $criteria->add(SeagateAddNewGarmentsPeer::INDEX_NO, $this->index_no);
		if ($this->isColumnModified(SeagateAddNewGarmentsPeer::ADD_NEW_INDEX)) $criteria->add(SeagateAddNewGarmentsPeer::ADD_NEW_INDEX, $this->add_new_index);
		if ($this->isColumnModified(SeagateAddNewGarmentsPeer::GARMENT_TYPE)) $criteria->add(SeagateAddNewGarmentsPeer::GARMENT_TYPE, $this->garment_type);
		if ($this->isColumnModified(SeagateAddNewGarmentsPeer::GARMENT_SIZE)) $criteria->add(SeagateAddNewGarmentsPeer::GARMENT_SIZE, $this->garment_size);
		if ($this->isColumnModified(SeagateAddNewGarmentsPeer::GARMENT_COLOR)) $criteria->add(SeagateAddNewGarmentsPeer::GARMENT_COLOR, $this->garment_color);
		if ($this->isColumnModified(SeagateAddNewGarmentsPeer::QUANTITY)) $criteria->add(SeagateAddNewGarmentsPeer::QUANTITY, $this->quantity);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(SeagateAddNewGarmentsPeer::DATABASE_NAME);

		$criteria->add(SeagateAddNewGarmentsPeer::INDEX_NO, $this->index_no);

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

		$copyObj->setAddNewIndex($this->add_new_index);

		$copyObj->setGarmentType($this->garment_type);

		$copyObj->setGarmentSize($this->garment_size);

		$copyObj->setGarmentColor($this->garment_color);

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
			self::$peer = new SeagateAddNewGarmentsPeer();
		}
		return self::$peer;
	}

} 