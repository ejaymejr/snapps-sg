<?php


abstract class BaseSeagateDamage extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id = 0;


	
	protected $index_no;


	
	protected $month = 0;


	
	protected $year = 0;


	
	protected $seagate1_garment = 0;


	
	protected $seagate1_missing_quantity = 0;


	
	protected $seagate1_damage_quantity = 0;


	
	protected $seagate1_damage_repair_quantity = 0;


	
	protected $seagate1_damage_replace_quantity = 0;


	
	protected $seagate2_garment = 0;


	
	protected $seagate2_missing_quantity = 0;


	
	protected $seagate2_damage_quantity = 0;


	
	protected $seagate2_damage_repair_quantity = 0;


	
	protected $seagate2_damage_replace_quantity = 0;

	
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

	
	public function getSeagate1Garment()
	{

		return $this->seagate1_garment;
	}

	
	public function getSeagate1MissingQuantity()
	{

		return $this->seagate1_missing_quantity;
	}

	
	public function getSeagate1DamageQuantity()
	{

		return $this->seagate1_damage_quantity;
	}

	
	public function getSeagate1DamageRepairQuantity()
	{

		return $this->seagate1_damage_repair_quantity;
	}

	
	public function getSeagate1DamageReplaceQuantity()
	{

		return $this->seagate1_damage_replace_quantity;
	}

	
	public function getSeagate2Garment()
	{

		return $this->seagate2_garment;
	}

	
	public function getSeagate2MissingQuantity()
	{

		return $this->seagate2_missing_quantity;
	}

	
	public function getSeagate2DamageQuantity()
	{

		return $this->seagate2_damage_quantity;
	}

	
	public function getSeagate2DamageRepairQuantity()
	{

		return $this->seagate2_damage_repair_quantity;
	}

	
	public function getSeagate2DamageReplaceQuantity()
	{

		return $this->seagate2_damage_replace_quantity;
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v || $v === 0) {
			$this->id = $v;
			$this->modifiedColumns[] = SeagateDamagePeer::ID;
		}

	} 
	
	public function setIndexNo($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->index_no !== $v) {
			$this->index_no = $v;
			$this->modifiedColumns[] = SeagateDamagePeer::INDEX_NO;
		}

	} 
	
	public function setMonth($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->month !== $v || $v === 0) {
			$this->month = $v;
			$this->modifiedColumns[] = SeagateDamagePeer::MONTH;
		}

	} 
	
	public function setYear($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->year !== $v || $v === 0) {
			$this->year = $v;
			$this->modifiedColumns[] = SeagateDamagePeer::YEAR;
		}

	} 
	
	public function setSeagate1Garment($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->seagate1_garment !== $v || $v === 0) {
			$this->seagate1_garment = $v;
			$this->modifiedColumns[] = SeagateDamagePeer::SEAGATE1_GARMENT;
		}

	} 
	
	public function setSeagate1MissingQuantity($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->seagate1_missing_quantity !== $v || $v === 0) {
			$this->seagate1_missing_quantity = $v;
			$this->modifiedColumns[] = SeagateDamagePeer::SEAGATE1_MISSING_QUANTITY;
		}

	} 
	
	public function setSeagate1DamageQuantity($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->seagate1_damage_quantity !== $v || $v === 0) {
			$this->seagate1_damage_quantity = $v;
			$this->modifiedColumns[] = SeagateDamagePeer::SEAGATE1_DAMAGE_QUANTITY;
		}

	} 
	
	public function setSeagate1DamageRepairQuantity($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->seagate1_damage_repair_quantity !== $v || $v === 0) {
			$this->seagate1_damage_repair_quantity = $v;
			$this->modifiedColumns[] = SeagateDamagePeer::SEAGATE1_DAMAGE_REPAIR_QUANTITY;
		}

	} 
	
	public function setSeagate1DamageReplaceQuantity($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->seagate1_damage_replace_quantity !== $v || $v === 0) {
			$this->seagate1_damage_replace_quantity = $v;
			$this->modifiedColumns[] = SeagateDamagePeer::SEAGATE1_DAMAGE_REPLACE_QUANTITY;
		}

	} 
	
	public function setSeagate2Garment($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->seagate2_garment !== $v || $v === 0) {
			$this->seagate2_garment = $v;
			$this->modifiedColumns[] = SeagateDamagePeer::SEAGATE2_GARMENT;
		}

	} 
	
	public function setSeagate2MissingQuantity($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->seagate2_missing_quantity !== $v || $v === 0) {
			$this->seagate2_missing_quantity = $v;
			$this->modifiedColumns[] = SeagateDamagePeer::SEAGATE2_MISSING_QUANTITY;
		}

	} 
	
	public function setSeagate2DamageQuantity($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->seagate2_damage_quantity !== $v || $v === 0) {
			$this->seagate2_damage_quantity = $v;
			$this->modifiedColumns[] = SeagateDamagePeer::SEAGATE2_DAMAGE_QUANTITY;
		}

	} 
	
	public function setSeagate2DamageRepairQuantity($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->seagate2_damage_repair_quantity !== $v || $v === 0) {
			$this->seagate2_damage_repair_quantity = $v;
			$this->modifiedColumns[] = SeagateDamagePeer::SEAGATE2_DAMAGE_REPAIR_QUANTITY;
		}

	} 
	
	public function setSeagate2DamageReplaceQuantity($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->seagate2_damage_replace_quantity !== $v || $v === 0) {
			$this->seagate2_damage_replace_quantity = $v;
			$this->modifiedColumns[] = SeagateDamagePeer::SEAGATE2_DAMAGE_REPLACE_QUANTITY;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->index_no = $rs->getInt($startcol + 1);

			$this->month = $rs->getInt($startcol + 2);

			$this->year = $rs->getInt($startcol + 3);

			$this->seagate1_garment = $rs->getInt($startcol + 4);

			$this->seagate1_missing_quantity = $rs->getInt($startcol + 5);

			$this->seagate1_damage_quantity = $rs->getInt($startcol + 6);

			$this->seagate1_damage_repair_quantity = $rs->getInt($startcol + 7);

			$this->seagate1_damage_replace_quantity = $rs->getInt($startcol + 8);

			$this->seagate2_garment = $rs->getInt($startcol + 9);

			$this->seagate2_missing_quantity = $rs->getInt($startcol + 10);

			$this->seagate2_damage_quantity = $rs->getInt($startcol + 11);

			$this->seagate2_damage_repair_quantity = $rs->getInt($startcol + 12);

			$this->seagate2_damage_replace_quantity = $rs->getInt($startcol + 13);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 14; 
		} catch (Exception $e) {
			throw new PropelException("Error populating SeagateDamage object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SeagateDamagePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			SeagateDamagePeer::doDelete($this, $con);
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
			$con = Propel::getConnection(SeagateDamagePeer::DATABASE_NAME);
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
					$pk = SeagateDamagePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setIndexNo($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += SeagateDamagePeer::doUpdate($this, $con);
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


			if (($retval = SeagateDamagePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SeagateDamagePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getSeagate1Garment();
				break;
			case 5:
				return $this->getSeagate1MissingQuantity();
				break;
			case 6:
				return $this->getSeagate1DamageQuantity();
				break;
			case 7:
				return $this->getSeagate1DamageRepairQuantity();
				break;
			case 8:
				return $this->getSeagate1DamageReplaceQuantity();
				break;
			case 9:
				return $this->getSeagate2Garment();
				break;
			case 10:
				return $this->getSeagate2MissingQuantity();
				break;
			case 11:
				return $this->getSeagate2DamageQuantity();
				break;
			case 12:
				return $this->getSeagate2DamageRepairQuantity();
				break;
			case 13:
				return $this->getSeagate2DamageReplaceQuantity();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SeagateDamagePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getIndexNo(),
			$keys[2] => $this->getMonth(),
			$keys[3] => $this->getYear(),
			$keys[4] => $this->getSeagate1Garment(),
			$keys[5] => $this->getSeagate1MissingQuantity(),
			$keys[6] => $this->getSeagate1DamageQuantity(),
			$keys[7] => $this->getSeagate1DamageRepairQuantity(),
			$keys[8] => $this->getSeagate1DamageReplaceQuantity(),
			$keys[9] => $this->getSeagate2Garment(),
			$keys[10] => $this->getSeagate2MissingQuantity(),
			$keys[11] => $this->getSeagate2DamageQuantity(),
			$keys[12] => $this->getSeagate2DamageRepairQuantity(),
			$keys[13] => $this->getSeagate2DamageReplaceQuantity(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SeagateDamagePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setSeagate1Garment($value);
				break;
			case 5:
				$this->setSeagate1MissingQuantity($value);
				break;
			case 6:
				$this->setSeagate1DamageQuantity($value);
				break;
			case 7:
				$this->setSeagate1DamageRepairQuantity($value);
				break;
			case 8:
				$this->setSeagate1DamageReplaceQuantity($value);
				break;
			case 9:
				$this->setSeagate2Garment($value);
				break;
			case 10:
				$this->setSeagate2MissingQuantity($value);
				break;
			case 11:
				$this->setSeagate2DamageQuantity($value);
				break;
			case 12:
				$this->setSeagate2DamageRepairQuantity($value);
				break;
			case 13:
				$this->setSeagate2DamageReplaceQuantity($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SeagateDamagePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIndexNo($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setMonth($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setYear($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setSeagate1Garment($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setSeagate1MissingQuantity($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setSeagate1DamageQuantity($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setSeagate1DamageRepairQuantity($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setSeagate1DamageReplaceQuantity($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setSeagate2Garment($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setSeagate2MissingQuantity($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setSeagate2DamageQuantity($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setSeagate2DamageRepairQuantity($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setSeagate2DamageReplaceQuantity($arr[$keys[13]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(SeagateDamagePeer::DATABASE_NAME);

		if ($this->isColumnModified(SeagateDamagePeer::ID)) $criteria->add(SeagateDamagePeer::ID, $this->id);
		if ($this->isColumnModified(SeagateDamagePeer::INDEX_NO)) $criteria->add(SeagateDamagePeer::INDEX_NO, $this->index_no);
		if ($this->isColumnModified(SeagateDamagePeer::MONTH)) $criteria->add(SeagateDamagePeer::MONTH, $this->month);
		if ($this->isColumnModified(SeagateDamagePeer::YEAR)) $criteria->add(SeagateDamagePeer::YEAR, $this->year);
		if ($this->isColumnModified(SeagateDamagePeer::SEAGATE1_GARMENT)) $criteria->add(SeagateDamagePeer::SEAGATE1_GARMENT, $this->seagate1_garment);
		if ($this->isColumnModified(SeagateDamagePeer::SEAGATE1_MISSING_QUANTITY)) $criteria->add(SeagateDamagePeer::SEAGATE1_MISSING_QUANTITY, $this->seagate1_missing_quantity);
		if ($this->isColumnModified(SeagateDamagePeer::SEAGATE1_DAMAGE_QUANTITY)) $criteria->add(SeagateDamagePeer::SEAGATE1_DAMAGE_QUANTITY, $this->seagate1_damage_quantity);
		if ($this->isColumnModified(SeagateDamagePeer::SEAGATE1_DAMAGE_REPAIR_QUANTITY)) $criteria->add(SeagateDamagePeer::SEAGATE1_DAMAGE_REPAIR_QUANTITY, $this->seagate1_damage_repair_quantity);
		if ($this->isColumnModified(SeagateDamagePeer::SEAGATE1_DAMAGE_REPLACE_QUANTITY)) $criteria->add(SeagateDamagePeer::SEAGATE1_DAMAGE_REPLACE_QUANTITY, $this->seagate1_damage_replace_quantity);
		if ($this->isColumnModified(SeagateDamagePeer::SEAGATE2_GARMENT)) $criteria->add(SeagateDamagePeer::SEAGATE2_GARMENT, $this->seagate2_garment);
		if ($this->isColumnModified(SeagateDamagePeer::SEAGATE2_MISSING_QUANTITY)) $criteria->add(SeagateDamagePeer::SEAGATE2_MISSING_QUANTITY, $this->seagate2_missing_quantity);
		if ($this->isColumnModified(SeagateDamagePeer::SEAGATE2_DAMAGE_QUANTITY)) $criteria->add(SeagateDamagePeer::SEAGATE2_DAMAGE_QUANTITY, $this->seagate2_damage_quantity);
		if ($this->isColumnModified(SeagateDamagePeer::SEAGATE2_DAMAGE_REPAIR_QUANTITY)) $criteria->add(SeagateDamagePeer::SEAGATE2_DAMAGE_REPAIR_QUANTITY, $this->seagate2_damage_repair_quantity);
		if ($this->isColumnModified(SeagateDamagePeer::SEAGATE2_DAMAGE_REPLACE_QUANTITY)) $criteria->add(SeagateDamagePeer::SEAGATE2_DAMAGE_REPLACE_QUANTITY, $this->seagate2_damage_replace_quantity);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(SeagateDamagePeer::DATABASE_NAME);

		$criteria->add(SeagateDamagePeer::INDEX_NO, $this->index_no);

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

		$copyObj->setSeagate1Garment($this->seagate1_garment);

		$copyObj->setSeagate1MissingQuantity($this->seagate1_missing_quantity);

		$copyObj->setSeagate1DamageQuantity($this->seagate1_damage_quantity);

		$copyObj->setSeagate1DamageRepairQuantity($this->seagate1_damage_repair_quantity);

		$copyObj->setSeagate1DamageReplaceQuantity($this->seagate1_damage_replace_quantity);

		$copyObj->setSeagate2Garment($this->seagate2_garment);

		$copyObj->setSeagate2MissingQuantity($this->seagate2_missing_quantity);

		$copyObj->setSeagate2DamageQuantity($this->seagate2_damage_quantity);

		$copyObj->setSeagate2DamageRepairQuantity($this->seagate2_damage_repair_quantity);

		$copyObj->setSeagate2DamageReplaceQuantity($this->seagate2_damage_replace_quantity);


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
			self::$peer = new SeagateDamagePeer();
		}
		return self::$peer;
	}

} 