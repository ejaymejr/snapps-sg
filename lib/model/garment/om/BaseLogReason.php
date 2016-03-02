<?php


abstract class BaseLogReason extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id = 0;


	
	protected $index_no;


	
	protected $garment_code = 'null';


	
	protected $customer = 'null';


	
	protected $type = 'null';


	
	protected $size = 'null';


	
	protected $color = 'null';


	
	protected $no_of_times_wash = 0;


	
	protected $hanger_no = 'null';


	
	protected $number = 'null';


	
	protected $name = 'null';


	
	protected $department = 'null';


	
	protected $shift = 'null';


	
	protected $submitted_date;


	
	protected $completed_date;


	
	protected $reason = 'null';


	
	protected $remarks;


	
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

	
	public function getIndexNo()
	{

		return $this->index_no;
	}

	
	public function getGarmentCode()
	{

		return $this->garment_code;
	}

	
	public function getCustomer()
	{

		return $this->customer;
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

	
	public function getNoOfTimesWash()
	{

		return $this->no_of_times_wash;
	}

	
	public function getHangerNo()
	{

		return $this->hanger_no;
	}

	
	public function getNumber()
	{

		return $this->number;
	}

	
	public function getName()
	{

		return $this->name;
	}

	
	public function getDepartment()
	{

		return $this->department;
	}

	
	public function getShift()
	{

		return $this->shift;
	}

	
	public function getSubmittedDate($format = 'Y-m-d H:i:s')
	{

		if ($this->submitted_date === null || $this->submitted_date === '') {
			return null;
		} elseif (!is_int($this->submitted_date)) {
						$ts = strtotime($this->submitted_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [submitted_date] as date/time value: " . var_export($this->submitted_date, true));
			}
		} else {
			$ts = $this->submitted_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
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

	
	public function getReason()
	{

		return $this->reason;
	}

	
	public function getRemarks()
	{

		return $this->remarks;
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

		if ($this->id !== $v || $v === 0) {
			$this->id = $v;
			$this->modifiedColumns[] = LogReasonPeer::ID;
		}

	} 
	
	public function setIndexNo($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->index_no !== $v) {
			$this->index_no = $v;
			$this->modifiedColumns[] = LogReasonPeer::INDEX_NO;
		}

	} 
	
	public function setGarmentCode($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->garment_code !== $v || $v === 'null') {
			$this->garment_code = $v;
			$this->modifiedColumns[] = LogReasonPeer::GARMENT_CODE;
		}

	} 
	
	public function setCustomer($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->customer !== $v || $v === 'null') {
			$this->customer = $v;
			$this->modifiedColumns[] = LogReasonPeer::CUSTOMER;
		}

	} 
	
	public function setType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->type !== $v || $v === 'null') {
			$this->type = $v;
			$this->modifiedColumns[] = LogReasonPeer::TYPE;
		}

	} 
	
	public function setSize($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->size !== $v || $v === 'null') {
			$this->size = $v;
			$this->modifiedColumns[] = LogReasonPeer::SIZE;
		}

	} 
	
	public function setColor($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->color !== $v || $v === 'null') {
			$this->color = $v;
			$this->modifiedColumns[] = LogReasonPeer::COLOR;
		}

	} 
	
	public function setNoOfTimesWash($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->no_of_times_wash !== $v || $v === 0) {
			$this->no_of_times_wash = $v;
			$this->modifiedColumns[] = LogReasonPeer::NO_OF_TIMES_WASH;
		}

	} 
	
	public function setHangerNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hanger_no !== $v || $v === 'null') {
			$this->hanger_no = $v;
			$this->modifiedColumns[] = LogReasonPeer::HANGER_NO;
		}

	} 
	
	public function setNumber($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->number !== $v || $v === 'null') {
			$this->number = $v;
			$this->modifiedColumns[] = LogReasonPeer::NUMBER;
		}

	} 
	
	public function setName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v || $v === 'null') {
			$this->name = $v;
			$this->modifiedColumns[] = LogReasonPeer::NAME;
		}

	} 
	
	public function setDepartment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->department !== $v || $v === 'null') {
			$this->department = $v;
			$this->modifiedColumns[] = LogReasonPeer::DEPARTMENT;
		}

	} 
	
	public function setShift($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->shift !== $v || $v === 'null') {
			$this->shift = $v;
			$this->modifiedColumns[] = LogReasonPeer::SHIFT;
		}

	} 
	
	public function setSubmittedDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [submitted_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->submitted_date !== $ts) {
			$this->submitted_date = $ts;
			$this->modifiedColumns[] = LogReasonPeer::SUBMITTED_DATE;
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
			$this->modifiedColumns[] = LogReasonPeer::COMPLETED_DATE;
		}

	} 
	
	public function setReason($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->reason !== $v || $v === 'null') {
			$this->reason = $v;
			$this->modifiedColumns[] = LogReasonPeer::REASON;
		}

	} 
	
	public function setRemarks($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->remarks !== $v) {
			$this->remarks = $v;
			$this->modifiedColumns[] = LogReasonPeer::REMARKS;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v || $v === 'null') {
			$this->created_by = $v;
			$this->modifiedColumns[] = LogReasonPeer::CREATED_BY;
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
			$this->modifiedColumns[] = LogReasonPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v || $v === 'null') {
			$this->modified_by = $v;
			$this->modifiedColumns[] = LogReasonPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = LogReasonPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->index_no = $rs->getInt($startcol + 1);

			$this->garment_code = $rs->getString($startcol + 2);

			$this->customer = $rs->getString($startcol + 3);

			$this->type = $rs->getString($startcol + 4);

			$this->size = $rs->getString($startcol + 5);

			$this->color = $rs->getString($startcol + 6);

			$this->no_of_times_wash = $rs->getInt($startcol + 7);

			$this->hanger_no = $rs->getString($startcol + 8);

			$this->number = $rs->getString($startcol + 9);

			$this->name = $rs->getString($startcol + 10);

			$this->department = $rs->getString($startcol + 11);

			$this->shift = $rs->getString($startcol + 12);

			$this->submitted_date = $rs->getTimestamp($startcol + 13, null);

			$this->completed_date = $rs->getTimestamp($startcol + 14, null);

			$this->reason = $rs->getString($startcol + 15);

			$this->remarks = $rs->getString($startcol + 16);

			$this->created_by = $rs->getString($startcol + 17);

			$this->date_created = $rs->getTimestamp($startcol + 18, null);

			$this->modified_by = $rs->getString($startcol + 19);

			$this->date_modified = $rs->getTimestamp($startcol + 20, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 21; 
		} catch (Exception $e) {
			throw new PropelException("Error populating LogReason object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(LogReasonPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			LogReasonPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(LogReasonPeer::DATABASE_NAME);
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
					$pk = LogReasonPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setIndexNo($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += LogReasonPeer::doUpdate($this, $con);
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


			if (($retval = LogReasonPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = LogReasonPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getGarmentCode();
				break;
			case 3:
				return $this->getCustomer();
				break;
			case 4:
				return $this->getType();
				break;
			case 5:
				return $this->getSize();
				break;
			case 6:
				return $this->getColor();
				break;
			case 7:
				return $this->getNoOfTimesWash();
				break;
			case 8:
				return $this->getHangerNo();
				break;
			case 9:
				return $this->getNumber();
				break;
			case 10:
				return $this->getName();
				break;
			case 11:
				return $this->getDepartment();
				break;
			case 12:
				return $this->getShift();
				break;
			case 13:
				return $this->getSubmittedDate();
				break;
			case 14:
				return $this->getCompletedDate();
				break;
			case 15:
				return $this->getReason();
				break;
			case 16:
				return $this->getRemarks();
				break;
			case 17:
				return $this->getCreatedBy();
				break;
			case 18:
				return $this->getDateCreated();
				break;
			case 19:
				return $this->getModifiedBy();
				break;
			case 20:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = LogReasonPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getIndexNo(),
			$keys[2] => $this->getGarmentCode(),
			$keys[3] => $this->getCustomer(),
			$keys[4] => $this->getType(),
			$keys[5] => $this->getSize(),
			$keys[6] => $this->getColor(),
			$keys[7] => $this->getNoOfTimesWash(),
			$keys[8] => $this->getHangerNo(),
			$keys[9] => $this->getNumber(),
			$keys[10] => $this->getName(),
			$keys[11] => $this->getDepartment(),
			$keys[12] => $this->getShift(),
			$keys[13] => $this->getSubmittedDate(),
			$keys[14] => $this->getCompletedDate(),
			$keys[15] => $this->getReason(),
			$keys[16] => $this->getRemarks(),
			$keys[17] => $this->getCreatedBy(),
			$keys[18] => $this->getDateCreated(),
			$keys[19] => $this->getModifiedBy(),
			$keys[20] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = LogReasonPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setGarmentCode($value);
				break;
			case 3:
				$this->setCustomer($value);
				break;
			case 4:
				$this->setType($value);
				break;
			case 5:
				$this->setSize($value);
				break;
			case 6:
				$this->setColor($value);
				break;
			case 7:
				$this->setNoOfTimesWash($value);
				break;
			case 8:
				$this->setHangerNo($value);
				break;
			case 9:
				$this->setNumber($value);
				break;
			case 10:
				$this->setName($value);
				break;
			case 11:
				$this->setDepartment($value);
				break;
			case 12:
				$this->setShift($value);
				break;
			case 13:
				$this->setSubmittedDate($value);
				break;
			case 14:
				$this->setCompletedDate($value);
				break;
			case 15:
				$this->setReason($value);
				break;
			case 16:
				$this->setRemarks($value);
				break;
			case 17:
				$this->setCreatedBy($value);
				break;
			case 18:
				$this->setDateCreated($value);
				break;
			case 19:
				$this->setModifiedBy($value);
				break;
			case 20:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = LogReasonPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIndexNo($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setGarmentCode($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCustomer($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setType($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setSize($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setColor($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setNoOfTimesWash($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setHangerNo($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setNumber($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setName($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setDepartment($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setShift($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setSubmittedDate($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setCompletedDate($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setReason($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setRemarks($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setCreatedBy($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setDateCreated($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setModifiedBy($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setDateModified($arr[$keys[20]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(LogReasonPeer::DATABASE_NAME);

		if ($this->isColumnModified(LogReasonPeer::ID)) $criteria->add(LogReasonPeer::ID, $this->id);
		if ($this->isColumnModified(LogReasonPeer::INDEX_NO)) $criteria->add(LogReasonPeer::INDEX_NO, $this->index_no);
		if ($this->isColumnModified(LogReasonPeer::GARMENT_CODE)) $criteria->add(LogReasonPeer::GARMENT_CODE, $this->garment_code);
		if ($this->isColumnModified(LogReasonPeer::CUSTOMER)) $criteria->add(LogReasonPeer::CUSTOMER, $this->customer);
		if ($this->isColumnModified(LogReasonPeer::TYPE)) $criteria->add(LogReasonPeer::TYPE, $this->type);
		if ($this->isColumnModified(LogReasonPeer::SIZE)) $criteria->add(LogReasonPeer::SIZE, $this->size);
		if ($this->isColumnModified(LogReasonPeer::COLOR)) $criteria->add(LogReasonPeer::COLOR, $this->color);
		if ($this->isColumnModified(LogReasonPeer::NO_OF_TIMES_WASH)) $criteria->add(LogReasonPeer::NO_OF_TIMES_WASH, $this->no_of_times_wash);
		if ($this->isColumnModified(LogReasonPeer::HANGER_NO)) $criteria->add(LogReasonPeer::HANGER_NO, $this->hanger_no);
		if ($this->isColumnModified(LogReasonPeer::NUMBER)) $criteria->add(LogReasonPeer::NUMBER, $this->number);
		if ($this->isColumnModified(LogReasonPeer::NAME)) $criteria->add(LogReasonPeer::NAME, $this->name);
		if ($this->isColumnModified(LogReasonPeer::DEPARTMENT)) $criteria->add(LogReasonPeer::DEPARTMENT, $this->department);
		if ($this->isColumnModified(LogReasonPeer::SHIFT)) $criteria->add(LogReasonPeer::SHIFT, $this->shift);
		if ($this->isColumnModified(LogReasonPeer::SUBMITTED_DATE)) $criteria->add(LogReasonPeer::SUBMITTED_DATE, $this->submitted_date);
		if ($this->isColumnModified(LogReasonPeer::COMPLETED_DATE)) $criteria->add(LogReasonPeer::COMPLETED_DATE, $this->completed_date);
		if ($this->isColumnModified(LogReasonPeer::REASON)) $criteria->add(LogReasonPeer::REASON, $this->reason);
		if ($this->isColumnModified(LogReasonPeer::REMARKS)) $criteria->add(LogReasonPeer::REMARKS, $this->remarks);
		if ($this->isColumnModified(LogReasonPeer::CREATED_BY)) $criteria->add(LogReasonPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(LogReasonPeer::DATE_CREATED)) $criteria->add(LogReasonPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(LogReasonPeer::MODIFIED_BY)) $criteria->add(LogReasonPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(LogReasonPeer::DATE_MODIFIED)) $criteria->add(LogReasonPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(LogReasonPeer::DATABASE_NAME);

		$criteria->add(LogReasonPeer::INDEX_NO, $this->index_no);

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

		$copyObj->setGarmentCode($this->garment_code);

		$copyObj->setCustomer($this->customer);

		$copyObj->setType($this->type);

		$copyObj->setSize($this->size);

		$copyObj->setColor($this->color);

		$copyObj->setNoOfTimesWash($this->no_of_times_wash);

		$copyObj->setHangerNo($this->hanger_no);

		$copyObj->setNumber($this->number);

		$copyObj->setName($this->name);

		$copyObj->setDepartment($this->department);

		$copyObj->setShift($this->shift);

		$copyObj->setSubmittedDate($this->submitted_date);

		$copyObj->setCompletedDate($this->completed_date);

		$copyObj->setReason($this->reason);

		$copyObj->setRemarks($this->remarks);

		$copyObj->setCreatedBy($this->created_by);

		$copyObj->setDateCreated($this->date_created);

		$copyObj->setModifiedBy($this->modified_by);

		$copyObj->setDateModified($this->date_modified);


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
			self::$peer = new LogReasonPeer();
		}
		return self::$peer;
	}

} 