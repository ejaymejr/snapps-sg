<?php


abstract class BaseOutscan extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $garment_code = 'null';


	
	protected $customer = 'null';


	
	protected $date_time;


	
	protected $no_of_times_wash = 0;


	
	protected $type = 'null';


	
	protected $size = 'null';


	
	protected $color = 'null';


	
	protected $number = 'null';


	
	protected $hanger_no;


	
	protected $inserted_date;


	
	protected $status = 'null';


	
	protected $do_number = 'null';


	
	protected $created_by = 'null';


	
	protected $date_created;


	
	protected $modified_by = 'null';


	
	protected $date_modified;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

		return $this->id;
	}

	
	public function getGarmentCode()
	{

		return $this->garment_code;
	}

	
	public function getCustomer()
	{

		return $this->customer;
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

	
	public function getNoOfTimesWash()
	{

		return $this->no_of_times_wash;
	}

	
	public function getType()
	{

		return $this->type;
	}

	
	public function getSize()
	{

		return $this->size;
	}

	
	public function getColor()
	{

		return $this->color;
	}

	
	public function getNumber()
	{

		return $this->number;
	}

	
	public function getHangerNo()
	{

		return $this->hanger_no;
	}

	
	public function getInsertedDate($format = 'Y-m-d H:i:s')
	{

		if ($this->inserted_date === null || $this->inserted_date === '') {
			return null;
		} elseif (!is_int($this->inserted_date)) {
						$ts = strtotime($this->inserted_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [inserted_date] as date/time value: " . var_export($this->inserted_date, true));
			}
		} else {
			$ts = $this->inserted_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getStatus()
	{

		return $this->status;
	}

	
	public function getDoNumber()
	{

		return $this->do_number;
	}

	
	public function getCreatedBy()
	{

		return $this->created_by;
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
			$this->modifiedColumns[] = OutscanPeer::ID;
		}

	} 
	
	public function setGarmentCode($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->garment_code !== $v || $v === 'null') {
			$this->garment_code = $v;
			$this->modifiedColumns[] = OutscanPeer::GARMENT_CODE;
		}

	} 
	
	public function setCustomer($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->customer !== $v || $v === 'null') {
			$this->customer = $v;
			$this->modifiedColumns[] = OutscanPeer::CUSTOMER;
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
			$this->modifiedColumns[] = OutscanPeer::DATE_TIME;
		}

	} 
	
	public function setNoOfTimesWash($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->no_of_times_wash !== $v || $v === 0) {
			$this->no_of_times_wash = $v;
			$this->modifiedColumns[] = OutscanPeer::NO_OF_TIMES_WASH;
		}

	} 
	
	public function setType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->type !== $v || $v === 'null') {
			$this->type = $v;
			$this->modifiedColumns[] = OutscanPeer::TYPE;
		}

	} 
	
	public function setSize($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->size !== $v || $v === 'null') {
			$this->size = $v;
			$this->modifiedColumns[] = OutscanPeer::SIZE;
		}

	} 
	
	public function setColor($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->color !== $v || $v === 'null') {
			$this->color = $v;
			$this->modifiedColumns[] = OutscanPeer::COLOR;
		}

	} 
	
	public function setNumber($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->number !== $v || $v === 'null') {
			$this->number = $v;
			$this->modifiedColumns[] = OutscanPeer::NUMBER;
		}

	} 
	
	public function setHangerNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hanger_no !== $v) {
			$this->hanger_no = $v;
			$this->modifiedColumns[] = OutscanPeer::HANGER_NO;
		}

	} 
	
	public function setInsertedDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [inserted_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->inserted_date !== $ts) {
			$this->inserted_date = $ts;
			$this->modifiedColumns[] = OutscanPeer::INSERTED_DATE;
		}

	} 
	
	public function setStatus($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->status !== $v || $v === 'null') {
			$this->status = $v;
			$this->modifiedColumns[] = OutscanPeer::STATUS;
		}

	} 
	
	public function setDoNumber($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->do_number !== $v || $v === 'null') {
			$this->do_number = $v;
			$this->modifiedColumns[] = OutscanPeer::DO_NUMBER;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v || $v === 'null') {
			$this->created_by = $v;
			$this->modifiedColumns[] = OutscanPeer::CREATED_BY;
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
			$this->modifiedColumns[] = OutscanPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v || $v === 'null') {
			$this->modified_by = $v;
			$this->modifiedColumns[] = OutscanPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = OutscanPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->garment_code = $rs->getString($startcol + 1);

			$this->customer = $rs->getString($startcol + 2);

			$this->date_time = $rs->getTimestamp($startcol + 3, null);

			$this->no_of_times_wash = $rs->getInt($startcol + 4);

			$this->type = $rs->getString($startcol + 5);

			$this->size = $rs->getString($startcol + 6);

			$this->color = $rs->getString($startcol + 7);

			$this->number = $rs->getString($startcol + 8);

			$this->hanger_no = $rs->getString($startcol + 9);

			$this->inserted_date = $rs->getTimestamp($startcol + 10, null);

			$this->status = $rs->getString($startcol + 11);

			$this->do_number = $rs->getString($startcol + 12);

			$this->created_by = $rs->getString($startcol + 13);

			$this->date_created = $rs->getTimestamp($startcol + 14, null);

			$this->modified_by = $rs->getString($startcol + 15);

			$this->date_modified = $rs->getTimestamp($startcol + 16, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 17; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Outscan object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(OutscanPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			OutscanPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(OutscanPeer::DATABASE_NAME);
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
					$pk = OutscanPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += OutscanPeer::doUpdate($this, $con);
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


			if (($retval = OutscanPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = OutscanPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getGarmentCode();
				break;
			case 2:
				return $this->getCustomer();
				break;
			case 3:
				return $this->getDateTime();
				break;
			case 4:
				return $this->getNoOfTimesWash();
				break;
			case 5:
				return $this->getType();
				break;
			case 6:
				return $this->getSize();
				break;
			case 7:
				return $this->getColor();
				break;
			case 8:
				return $this->getNumber();
				break;
			case 9:
				return $this->getHangerNo();
				break;
			case 10:
				return $this->getInsertedDate();
				break;
			case 11:
				return $this->getStatus();
				break;
			case 12:
				return $this->getDoNumber();
				break;
			case 13:
				return $this->getCreatedBy();
				break;
			case 14:
				return $this->getDateCreated();
				break;
			case 15:
				return $this->getModifiedBy();
				break;
			case 16:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = OutscanPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getGarmentCode(),
			$keys[2] => $this->getCustomer(),
			$keys[3] => $this->getDateTime(),
			$keys[4] => $this->getNoOfTimesWash(),
			$keys[5] => $this->getType(),
			$keys[6] => $this->getSize(),
			$keys[7] => $this->getColor(),
			$keys[8] => $this->getNumber(),
			$keys[9] => $this->getHangerNo(),
			$keys[10] => $this->getInsertedDate(),
			$keys[11] => $this->getStatus(),
			$keys[12] => $this->getDoNumber(),
			$keys[13] => $this->getCreatedBy(),
			$keys[14] => $this->getDateCreated(),
			$keys[15] => $this->getModifiedBy(),
			$keys[16] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = OutscanPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setGarmentCode($value);
				break;
			case 2:
				$this->setCustomer($value);
				break;
			case 3:
				$this->setDateTime($value);
				break;
			case 4:
				$this->setNoOfTimesWash($value);
				break;
			case 5:
				$this->setType($value);
				break;
			case 6:
				$this->setSize($value);
				break;
			case 7:
				$this->setColor($value);
				break;
			case 8:
				$this->setNumber($value);
				break;
			case 9:
				$this->setHangerNo($value);
				break;
			case 10:
				$this->setInsertedDate($value);
				break;
			case 11:
				$this->setStatus($value);
				break;
			case 12:
				$this->setDoNumber($value);
				break;
			case 13:
				$this->setCreatedBy($value);
				break;
			case 14:
				$this->setDateCreated($value);
				break;
			case 15:
				$this->setModifiedBy($value);
				break;
			case 16:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = OutscanPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setGarmentCode($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCustomer($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDateTime($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setNoOfTimesWash($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setType($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setSize($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setColor($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setNumber($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setHangerNo($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setInsertedDate($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setStatus($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setDoNumber($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setCreatedBy($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setDateCreated($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setModifiedBy($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setDateModified($arr[$keys[16]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(OutscanPeer::DATABASE_NAME);

		if ($this->isColumnModified(OutscanPeer::ID)) $criteria->add(OutscanPeer::ID, $this->id);
		if ($this->isColumnModified(OutscanPeer::GARMENT_CODE)) $criteria->add(OutscanPeer::GARMENT_CODE, $this->garment_code);
		if ($this->isColumnModified(OutscanPeer::CUSTOMER)) $criteria->add(OutscanPeer::CUSTOMER, $this->customer);
		if ($this->isColumnModified(OutscanPeer::DATE_TIME)) $criteria->add(OutscanPeer::DATE_TIME, $this->date_time);
		if ($this->isColumnModified(OutscanPeer::NO_OF_TIMES_WASH)) $criteria->add(OutscanPeer::NO_OF_TIMES_WASH, $this->no_of_times_wash);
		if ($this->isColumnModified(OutscanPeer::TYPE)) $criteria->add(OutscanPeer::TYPE, $this->type);
		if ($this->isColumnModified(OutscanPeer::SIZE)) $criteria->add(OutscanPeer::SIZE, $this->size);
		if ($this->isColumnModified(OutscanPeer::COLOR)) $criteria->add(OutscanPeer::COLOR, $this->color);
		if ($this->isColumnModified(OutscanPeer::NUMBER)) $criteria->add(OutscanPeer::NUMBER, $this->number);
		if ($this->isColumnModified(OutscanPeer::HANGER_NO)) $criteria->add(OutscanPeer::HANGER_NO, $this->hanger_no);
		if ($this->isColumnModified(OutscanPeer::INSERTED_DATE)) $criteria->add(OutscanPeer::INSERTED_DATE, $this->inserted_date);
		if ($this->isColumnModified(OutscanPeer::STATUS)) $criteria->add(OutscanPeer::STATUS, $this->status);
		if ($this->isColumnModified(OutscanPeer::DO_NUMBER)) $criteria->add(OutscanPeer::DO_NUMBER, $this->do_number);
		if ($this->isColumnModified(OutscanPeer::CREATED_BY)) $criteria->add(OutscanPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(OutscanPeer::DATE_CREATED)) $criteria->add(OutscanPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(OutscanPeer::MODIFIED_BY)) $criteria->add(OutscanPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(OutscanPeer::DATE_MODIFIED)) $criteria->add(OutscanPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(OutscanPeer::DATABASE_NAME);

		$criteria->add(OutscanPeer::ID, $this->id);

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

		$copyObj->setGarmentCode($this->garment_code);

		$copyObj->setCustomer($this->customer);

		$copyObj->setDateTime($this->date_time);

		$copyObj->setNoOfTimesWash($this->no_of_times_wash);

		$copyObj->setType($this->type);

		$copyObj->setSize($this->size);

		$copyObj->setColor($this->color);

		$copyObj->setNumber($this->number);

		$copyObj->setHangerNo($this->hanger_no);

		$copyObj->setInsertedDate($this->inserted_date);

		$copyObj->setStatus($this->status);

		$copyObj->setDoNumber($this->do_number);

		$copyObj->setCreatedBy($this->created_by);

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
			self::$peer = new OutscanPeer();
		}
		return self::$peer;
	}

} 