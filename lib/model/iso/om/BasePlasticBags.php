<?php


abstract class BasePlasticBags extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $date_time;


	
	protected $type_of_plastic;


	
	protected $by_who;


	
	protected $surface_area;


	
	protected $vol_in_ml;


	
	protected $lpc_blank_in_ml;


	
	protected $lpc_plastic_in_ml;


	
	protected $lpc_plastic_in_cm;


	
	protected $status;


	
	protected $date_created;


	
	protected $created_by;


	
	protected $date_modified;


	
	protected $modified_by;

	
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

	
	public function getTypeOfPlastic()
	{

		return $this->type_of_plastic;
	}

	
	public function getByWho()
	{

		return $this->by_who;
	}

	
	public function getSurfaceArea()
	{

		return $this->surface_area;
	}

	
	public function getVolInMl()
	{

		return $this->vol_in_ml;
	}

	
	public function getLpcBlankInMl()
	{

		return $this->lpc_blank_in_ml;
	}

	
	public function getLpcPlasticInMl()
	{

		return $this->lpc_plastic_in_ml;
	}

	
	public function getLpcPlasticInCm()
	{

		return $this->lpc_plastic_in_cm;
	}

	
	public function getStatus()
	{

		return $this->status;
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

	
	public function getCreatedBy()
	{

		return $this->created_by;
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

	
	public function getModifiedBy()
	{

		return $this->modified_by;
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = PlasticBagsPeer::ID;
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
			$this->modifiedColumns[] = PlasticBagsPeer::DATE_TIME;
		}

	} 
	
	public function setTypeOfPlastic($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->type_of_plastic !== $v) {
			$this->type_of_plastic = $v;
			$this->modifiedColumns[] = PlasticBagsPeer::TYPE_OF_PLASTIC;
		}

	} 
	
	public function setByWho($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->by_who !== $v) {
			$this->by_who = $v;
			$this->modifiedColumns[] = PlasticBagsPeer::BY_WHO;
		}

	} 
	
	public function setSurfaceArea($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->surface_area !== $v) {
			$this->surface_area = $v;
			$this->modifiedColumns[] = PlasticBagsPeer::SURFACE_AREA;
		}

	} 
	
	public function setVolInMl($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->vol_in_ml !== $v) {
			$this->vol_in_ml = $v;
			$this->modifiedColumns[] = PlasticBagsPeer::VOL_IN_ML;
		}

	} 
	
	public function setLpcBlankInMl($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->lpc_blank_in_ml !== $v) {
			$this->lpc_blank_in_ml = $v;
			$this->modifiedColumns[] = PlasticBagsPeer::LPC_BLANK_IN_ML;
		}

	} 
	
	public function setLpcPlasticInMl($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->lpc_plastic_in_ml !== $v) {
			$this->lpc_plastic_in_ml = $v;
			$this->modifiedColumns[] = PlasticBagsPeer::LPC_PLASTIC_IN_ML;
		}

	} 
	
	public function setLpcPlasticInCm($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->lpc_plastic_in_cm !== $v) {
			$this->lpc_plastic_in_cm = $v;
			$this->modifiedColumns[] = PlasticBagsPeer::LPC_PLASTIC_IN_CM;
		}

	} 
	
	public function setStatus($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->status !== $v) {
			$this->status = $v;
			$this->modifiedColumns[] = PlasticBagsPeer::STATUS;
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
			$this->modifiedColumns[] = PlasticBagsPeer::DATE_CREATED;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v) {
			$this->created_by = $v;
			$this->modifiedColumns[] = PlasticBagsPeer::CREATED_BY;
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
			$this->modifiedColumns[] = PlasticBagsPeer::DATE_MODIFIED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v) {
			$this->modified_by = $v;
			$this->modifiedColumns[] = PlasticBagsPeer::MODIFIED_BY;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->date_time = $rs->getTimestamp($startcol + 1, null);

			$this->type_of_plastic = $rs->getString($startcol + 2);

			$this->by_who = $rs->getString($startcol + 3);

			$this->surface_area = $rs->getString($startcol + 4);

			$this->vol_in_ml = $rs->getString($startcol + 5);

			$this->lpc_blank_in_ml = $rs->getString($startcol + 6);

			$this->lpc_plastic_in_ml = $rs->getString($startcol + 7);

			$this->lpc_plastic_in_cm = $rs->getString($startcol + 8);

			$this->status = $rs->getString($startcol + 9);

			$this->date_created = $rs->getTimestamp($startcol + 10, null);

			$this->created_by = $rs->getString($startcol + 11);

			$this->date_modified = $rs->getTimestamp($startcol + 12, null);

			$this->modified_by = $rs->getString($startcol + 13);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 14; 
		} catch (Exception $e) {
			throw new PropelException("Error populating PlasticBags object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PlasticBagsPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			PlasticBagsPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(PlasticBagsPeer::DATABASE_NAME);
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
					$pk = PlasticBagsPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += PlasticBagsPeer::doUpdate($this, $con);
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


			if (($retval = PlasticBagsPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PlasticBagsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getTypeOfPlastic();
				break;
			case 3:
				return $this->getByWho();
				break;
			case 4:
				return $this->getSurfaceArea();
				break;
			case 5:
				return $this->getVolInMl();
				break;
			case 6:
				return $this->getLpcBlankInMl();
				break;
			case 7:
				return $this->getLpcPlasticInMl();
				break;
			case 8:
				return $this->getLpcPlasticInCm();
				break;
			case 9:
				return $this->getStatus();
				break;
			case 10:
				return $this->getDateCreated();
				break;
			case 11:
				return $this->getCreatedBy();
				break;
			case 12:
				return $this->getDateModified();
				break;
			case 13:
				return $this->getModifiedBy();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = PlasticBagsPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDateTime(),
			$keys[2] => $this->getTypeOfPlastic(),
			$keys[3] => $this->getByWho(),
			$keys[4] => $this->getSurfaceArea(),
			$keys[5] => $this->getVolInMl(),
			$keys[6] => $this->getLpcBlankInMl(),
			$keys[7] => $this->getLpcPlasticInMl(),
			$keys[8] => $this->getLpcPlasticInCm(),
			$keys[9] => $this->getStatus(),
			$keys[10] => $this->getDateCreated(),
			$keys[11] => $this->getCreatedBy(),
			$keys[12] => $this->getDateModified(),
			$keys[13] => $this->getModifiedBy(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PlasticBagsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setTypeOfPlastic($value);
				break;
			case 3:
				$this->setByWho($value);
				break;
			case 4:
				$this->setSurfaceArea($value);
				break;
			case 5:
				$this->setVolInMl($value);
				break;
			case 6:
				$this->setLpcBlankInMl($value);
				break;
			case 7:
				$this->setLpcPlasticInMl($value);
				break;
			case 8:
				$this->setLpcPlasticInCm($value);
				break;
			case 9:
				$this->setStatus($value);
				break;
			case 10:
				$this->setDateCreated($value);
				break;
			case 11:
				$this->setCreatedBy($value);
				break;
			case 12:
				$this->setDateModified($value);
				break;
			case 13:
				$this->setModifiedBy($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = PlasticBagsPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDateTime($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTypeOfPlastic($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setByWho($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setSurfaceArea($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setVolInMl($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setLpcBlankInMl($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setLpcPlasticInMl($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setLpcPlasticInCm($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setStatus($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setDateCreated($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setCreatedBy($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setDateModified($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setModifiedBy($arr[$keys[13]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(PlasticBagsPeer::DATABASE_NAME);

		if ($this->isColumnModified(PlasticBagsPeer::ID)) $criteria->add(PlasticBagsPeer::ID, $this->id);
		if ($this->isColumnModified(PlasticBagsPeer::DATE_TIME)) $criteria->add(PlasticBagsPeer::DATE_TIME, $this->date_time);
		if ($this->isColumnModified(PlasticBagsPeer::TYPE_OF_PLASTIC)) $criteria->add(PlasticBagsPeer::TYPE_OF_PLASTIC, $this->type_of_plastic);
		if ($this->isColumnModified(PlasticBagsPeer::BY_WHO)) $criteria->add(PlasticBagsPeer::BY_WHO, $this->by_who);
		if ($this->isColumnModified(PlasticBagsPeer::SURFACE_AREA)) $criteria->add(PlasticBagsPeer::SURFACE_AREA, $this->surface_area);
		if ($this->isColumnModified(PlasticBagsPeer::VOL_IN_ML)) $criteria->add(PlasticBagsPeer::VOL_IN_ML, $this->vol_in_ml);
		if ($this->isColumnModified(PlasticBagsPeer::LPC_BLANK_IN_ML)) $criteria->add(PlasticBagsPeer::LPC_BLANK_IN_ML, $this->lpc_blank_in_ml);
		if ($this->isColumnModified(PlasticBagsPeer::LPC_PLASTIC_IN_ML)) $criteria->add(PlasticBagsPeer::LPC_PLASTIC_IN_ML, $this->lpc_plastic_in_ml);
		if ($this->isColumnModified(PlasticBagsPeer::LPC_PLASTIC_IN_CM)) $criteria->add(PlasticBagsPeer::LPC_PLASTIC_IN_CM, $this->lpc_plastic_in_cm);
		if ($this->isColumnModified(PlasticBagsPeer::STATUS)) $criteria->add(PlasticBagsPeer::STATUS, $this->status);
		if ($this->isColumnModified(PlasticBagsPeer::DATE_CREATED)) $criteria->add(PlasticBagsPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(PlasticBagsPeer::CREATED_BY)) $criteria->add(PlasticBagsPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(PlasticBagsPeer::DATE_MODIFIED)) $criteria->add(PlasticBagsPeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(PlasticBagsPeer::MODIFIED_BY)) $criteria->add(PlasticBagsPeer::MODIFIED_BY, $this->modified_by);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(PlasticBagsPeer::DATABASE_NAME);

		$criteria->add(PlasticBagsPeer::ID, $this->id);

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

		$copyObj->setTypeOfPlastic($this->type_of_plastic);

		$copyObj->setByWho($this->by_who);

		$copyObj->setSurfaceArea($this->surface_area);

		$copyObj->setVolInMl($this->vol_in_ml);

		$copyObj->setLpcBlankInMl($this->lpc_blank_in_ml);

		$copyObj->setLpcPlasticInMl($this->lpc_plastic_in_ml);

		$copyObj->setLpcPlasticInCm($this->lpc_plastic_in_cm);

		$copyObj->setStatus($this->status);

		$copyObj->setDateCreated($this->date_created);

		$copyObj->setCreatedBy($this->created_by);

		$copyObj->setDateModified($this->date_modified);

		$copyObj->setModifiedBy($this->modified_by);


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
			self::$peer = new PlasticBagsPeer();
		}
		return self::$peer;
	}

} 