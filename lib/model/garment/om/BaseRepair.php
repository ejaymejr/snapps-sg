<?php


abstract class BaseRepair extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id = 0;


	
	protected $index_no;


	
	protected $repair_send_date;


	
	protected $repair_receive_date;


	
	protected $garment_code = 'null';


	
	protected $type = 'null';


	
	protected $size = 'null';


	
	protected $color = 'null';


	
	protected $customer = 'null';


	
	protected $no_of_times_wash = 0;


	
	protected $number;


	
	protected $hanger_no;


	
	protected $inserted_date;


	
	protected $reject_type = 'null';


	
	protected $reject_index_no = 0;


	
	protected $department = 'null';


	
	protected $building = 'null';


	
	protected $repair_send_date_modified;


	
	protected $repair_receive_date_modified;


	
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

	
	public function getRepairSendDate($format = 'Y-m-d H:i:s')
	{

		if ($this->repair_send_date === null || $this->repair_send_date === '') {
			return null;
		} elseif (!is_int($this->repair_send_date)) {
						$ts = strtotime($this->repair_send_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [repair_send_date] as date/time value: " . var_export($this->repair_send_date, true));
			}
		} else {
			$ts = $this->repair_send_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getRepairReceiveDate($format = 'Y-m-d H:i:s')
	{

		if ($this->repair_receive_date === null || $this->repair_receive_date === '') {
			return null;
		} elseif (!is_int($this->repair_receive_date)) {
						$ts = strtotime($this->repair_receive_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [repair_receive_date] as date/time value: " . var_export($this->repair_receive_date, true));
			}
		} else {
			$ts = $this->repair_receive_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getGarmentCode()
	{

		return $this->garment_code;
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

	
	public function getCustomer()
	{

		return $this->customer;
	}

	
	public function getNoOfTimesWash()
	{

		return $this->no_of_times_wash;
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

	
	public function getRejectType()
	{

		return $this->reject_type;
	}

	
	public function getRejectIndexNo()
	{

		return $this->reject_index_no;
	}

	
	public function getDepartment()
	{

		return $this->department;
	}

	
	public function getBuilding()
	{

		return $this->building;
	}

	
	public function getRepairSendDateModified($format = 'Y-m-d H:i:s')
	{

		if ($this->repair_send_date_modified === null || $this->repair_send_date_modified === '') {
			return null;
		} elseif (!is_int($this->repair_send_date_modified)) {
						$ts = strtotime($this->repair_send_date_modified);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [repair_send_date_modified] as date/time value: " . var_export($this->repair_send_date_modified, true));
			}
		} else {
			$ts = $this->repair_send_date_modified;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getRepairReceiveDateModified($format = 'Y-m-d H:i:s')
	{

		if ($this->repair_receive_date_modified === null || $this->repair_receive_date_modified === '') {
			return null;
		} elseif (!is_int($this->repair_receive_date_modified)) {
						$ts = strtotime($this->repair_receive_date_modified);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [repair_receive_date_modified] as date/time value: " . var_export($this->repair_receive_date_modified, true));
			}
		} else {
			$ts = $this->repair_receive_date_modified;
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
			$this->modifiedColumns[] = RepairPeer::ID;
		}

	} 
	
	public function setIndexNo($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->index_no !== $v) {
			$this->index_no = $v;
			$this->modifiedColumns[] = RepairPeer::INDEX_NO;
		}

	} 
	
	public function setRepairSendDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [repair_send_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->repair_send_date !== $ts) {
			$this->repair_send_date = $ts;
			$this->modifiedColumns[] = RepairPeer::REPAIR_SEND_DATE;
		}

	} 
	
	public function setRepairReceiveDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [repair_receive_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->repair_receive_date !== $ts) {
			$this->repair_receive_date = $ts;
			$this->modifiedColumns[] = RepairPeer::REPAIR_RECEIVE_DATE;
		}

	} 
	
	public function setGarmentCode($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->garment_code !== $v || $v === 'null') {
			$this->garment_code = $v;
			$this->modifiedColumns[] = RepairPeer::GARMENT_CODE;
		}

	} 
	
	public function setType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->type !== $v || $v === 'null') {
			$this->type = $v;
			$this->modifiedColumns[] = RepairPeer::TYPE;
		}

	} 
	
	public function setSize($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->size !== $v || $v === 'null') {
			$this->size = $v;
			$this->modifiedColumns[] = RepairPeer::SIZE;
		}

	} 
	
	public function setColor($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->color !== $v || $v === 'null') {
			$this->color = $v;
			$this->modifiedColumns[] = RepairPeer::COLOR;
		}

	} 
	
	public function setCustomer($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->customer !== $v || $v === 'null') {
			$this->customer = $v;
			$this->modifiedColumns[] = RepairPeer::CUSTOMER;
		}

	} 
	
	public function setNoOfTimesWash($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->no_of_times_wash !== $v || $v === 0) {
			$this->no_of_times_wash = $v;
			$this->modifiedColumns[] = RepairPeer::NO_OF_TIMES_WASH;
		}

	} 
	
	public function setNumber($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->number !== $v) {
			$this->number = $v;
			$this->modifiedColumns[] = RepairPeer::NUMBER;
		}

	} 
	
	public function setHangerNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hanger_no !== $v) {
			$this->hanger_no = $v;
			$this->modifiedColumns[] = RepairPeer::HANGER_NO;
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
			$this->modifiedColumns[] = RepairPeer::INSERTED_DATE;
		}

	} 
	
	public function setRejectType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->reject_type !== $v || $v === 'null') {
			$this->reject_type = $v;
			$this->modifiedColumns[] = RepairPeer::REJECT_TYPE;
		}

	} 
	
	public function setRejectIndexNo($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->reject_index_no !== $v || $v === 0) {
			$this->reject_index_no = $v;
			$this->modifiedColumns[] = RepairPeer::REJECT_INDEX_NO;
		}

	} 
	
	public function setDepartment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->department !== $v || $v === 'null') {
			$this->department = $v;
			$this->modifiedColumns[] = RepairPeer::DEPARTMENT;
		}

	} 
	
	public function setBuilding($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->building !== $v || $v === 'null') {
			$this->building = $v;
			$this->modifiedColumns[] = RepairPeer::BUILDING;
		}

	} 
	
	public function setRepairSendDateModified($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [repair_send_date_modified] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->repair_send_date_modified !== $ts) {
			$this->repair_send_date_modified = $ts;
			$this->modifiedColumns[] = RepairPeer::REPAIR_SEND_DATE_MODIFIED;
		}

	} 
	
	public function setRepairReceiveDateModified($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [repair_receive_date_modified] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->repair_receive_date_modified !== $ts) {
			$this->repair_receive_date_modified = $ts;
			$this->modifiedColumns[] = RepairPeer::REPAIR_RECEIVE_DATE_MODIFIED;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v || $v === 'null') {
			$this->created_by = $v;
			$this->modifiedColumns[] = RepairPeer::CREATED_BY;
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
			$this->modifiedColumns[] = RepairPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v || $v === 'null') {
			$this->modified_by = $v;
			$this->modifiedColumns[] = RepairPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = RepairPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->index_no = $rs->getInt($startcol + 1);

			$this->repair_send_date = $rs->getTimestamp($startcol + 2, null);

			$this->repair_receive_date = $rs->getTimestamp($startcol + 3, null);

			$this->garment_code = $rs->getString($startcol + 4);

			$this->type = $rs->getString($startcol + 5);

			$this->size = $rs->getString($startcol + 6);

			$this->color = $rs->getString($startcol + 7);

			$this->customer = $rs->getString($startcol + 8);

			$this->no_of_times_wash = $rs->getInt($startcol + 9);

			$this->number = $rs->getString($startcol + 10);

			$this->hanger_no = $rs->getString($startcol + 11);

			$this->inserted_date = $rs->getTimestamp($startcol + 12, null);

			$this->reject_type = $rs->getString($startcol + 13);

			$this->reject_index_no = $rs->getInt($startcol + 14);

			$this->department = $rs->getString($startcol + 15);

			$this->building = $rs->getString($startcol + 16);

			$this->repair_send_date_modified = $rs->getTimestamp($startcol + 17, null);

			$this->repair_receive_date_modified = $rs->getTimestamp($startcol + 18, null);

			$this->created_by = $rs->getString($startcol + 19);

			$this->date_created = $rs->getTimestamp($startcol + 20, null);

			$this->modified_by = $rs->getString($startcol + 21);

			$this->date_modified = $rs->getTimestamp($startcol + 22, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 23; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Repair object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(RepairPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			RepairPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(RepairPeer::DATABASE_NAME);
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
					$pk = RepairPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setIndexNo($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += RepairPeer::doUpdate($this, $con);
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


			if (($retval = RepairPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = RepairPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getRepairSendDate();
				break;
			case 3:
				return $this->getRepairReceiveDate();
				break;
			case 4:
				return $this->getGarmentCode();
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
				return $this->getCustomer();
				break;
			case 9:
				return $this->getNoOfTimesWash();
				break;
			case 10:
				return $this->getNumber();
				break;
			case 11:
				return $this->getHangerNo();
				break;
			case 12:
				return $this->getInsertedDate();
				break;
			case 13:
				return $this->getRejectType();
				break;
			case 14:
				return $this->getRejectIndexNo();
				break;
			case 15:
				return $this->getDepartment();
				break;
			case 16:
				return $this->getBuilding();
				break;
			case 17:
				return $this->getRepairSendDateModified();
				break;
			case 18:
				return $this->getRepairReceiveDateModified();
				break;
			case 19:
				return $this->getCreatedBy();
				break;
			case 20:
				return $this->getDateCreated();
				break;
			case 21:
				return $this->getModifiedBy();
				break;
			case 22:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = RepairPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getIndexNo(),
			$keys[2] => $this->getRepairSendDate(),
			$keys[3] => $this->getRepairReceiveDate(),
			$keys[4] => $this->getGarmentCode(),
			$keys[5] => $this->getType(),
			$keys[6] => $this->getSize(),
			$keys[7] => $this->getColor(),
			$keys[8] => $this->getCustomer(),
			$keys[9] => $this->getNoOfTimesWash(),
			$keys[10] => $this->getNumber(),
			$keys[11] => $this->getHangerNo(),
			$keys[12] => $this->getInsertedDate(),
			$keys[13] => $this->getRejectType(),
			$keys[14] => $this->getRejectIndexNo(),
			$keys[15] => $this->getDepartment(),
			$keys[16] => $this->getBuilding(),
			$keys[17] => $this->getRepairSendDateModified(),
			$keys[18] => $this->getRepairReceiveDateModified(),
			$keys[19] => $this->getCreatedBy(),
			$keys[20] => $this->getDateCreated(),
			$keys[21] => $this->getModifiedBy(),
			$keys[22] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = RepairPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setRepairSendDate($value);
				break;
			case 3:
				$this->setRepairReceiveDate($value);
				break;
			case 4:
				$this->setGarmentCode($value);
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
				$this->setCustomer($value);
				break;
			case 9:
				$this->setNoOfTimesWash($value);
				break;
			case 10:
				$this->setNumber($value);
				break;
			case 11:
				$this->setHangerNo($value);
				break;
			case 12:
				$this->setInsertedDate($value);
				break;
			case 13:
				$this->setRejectType($value);
				break;
			case 14:
				$this->setRejectIndexNo($value);
				break;
			case 15:
				$this->setDepartment($value);
				break;
			case 16:
				$this->setBuilding($value);
				break;
			case 17:
				$this->setRepairSendDateModified($value);
				break;
			case 18:
				$this->setRepairReceiveDateModified($value);
				break;
			case 19:
				$this->setCreatedBy($value);
				break;
			case 20:
				$this->setDateCreated($value);
				break;
			case 21:
				$this->setModifiedBy($value);
				break;
			case 22:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = RepairPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIndexNo($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setRepairSendDate($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setRepairReceiveDate($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setGarmentCode($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setType($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setSize($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setColor($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setCustomer($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setNoOfTimesWash($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setNumber($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setHangerNo($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setInsertedDate($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setRejectType($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setRejectIndexNo($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setDepartment($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setBuilding($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setRepairSendDateModified($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setRepairReceiveDateModified($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setCreatedBy($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setDateCreated($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setModifiedBy($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setDateModified($arr[$keys[22]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(RepairPeer::DATABASE_NAME);

		if ($this->isColumnModified(RepairPeer::ID)) $criteria->add(RepairPeer::ID, $this->id);
		if ($this->isColumnModified(RepairPeer::INDEX_NO)) $criteria->add(RepairPeer::INDEX_NO, $this->index_no);
		if ($this->isColumnModified(RepairPeer::REPAIR_SEND_DATE)) $criteria->add(RepairPeer::REPAIR_SEND_DATE, $this->repair_send_date);
		if ($this->isColumnModified(RepairPeer::REPAIR_RECEIVE_DATE)) $criteria->add(RepairPeer::REPAIR_RECEIVE_DATE, $this->repair_receive_date);
		if ($this->isColumnModified(RepairPeer::GARMENT_CODE)) $criteria->add(RepairPeer::GARMENT_CODE, $this->garment_code);
		if ($this->isColumnModified(RepairPeer::TYPE)) $criteria->add(RepairPeer::TYPE, $this->type);
		if ($this->isColumnModified(RepairPeer::SIZE)) $criteria->add(RepairPeer::SIZE, $this->size);
		if ($this->isColumnModified(RepairPeer::COLOR)) $criteria->add(RepairPeer::COLOR, $this->color);
		if ($this->isColumnModified(RepairPeer::CUSTOMER)) $criteria->add(RepairPeer::CUSTOMER, $this->customer);
		if ($this->isColumnModified(RepairPeer::NO_OF_TIMES_WASH)) $criteria->add(RepairPeer::NO_OF_TIMES_WASH, $this->no_of_times_wash);
		if ($this->isColumnModified(RepairPeer::NUMBER)) $criteria->add(RepairPeer::NUMBER, $this->number);
		if ($this->isColumnModified(RepairPeer::HANGER_NO)) $criteria->add(RepairPeer::HANGER_NO, $this->hanger_no);
		if ($this->isColumnModified(RepairPeer::INSERTED_DATE)) $criteria->add(RepairPeer::INSERTED_DATE, $this->inserted_date);
		if ($this->isColumnModified(RepairPeer::REJECT_TYPE)) $criteria->add(RepairPeer::REJECT_TYPE, $this->reject_type);
		if ($this->isColumnModified(RepairPeer::REJECT_INDEX_NO)) $criteria->add(RepairPeer::REJECT_INDEX_NO, $this->reject_index_no);
		if ($this->isColumnModified(RepairPeer::DEPARTMENT)) $criteria->add(RepairPeer::DEPARTMENT, $this->department);
		if ($this->isColumnModified(RepairPeer::BUILDING)) $criteria->add(RepairPeer::BUILDING, $this->building);
		if ($this->isColumnModified(RepairPeer::REPAIR_SEND_DATE_MODIFIED)) $criteria->add(RepairPeer::REPAIR_SEND_DATE_MODIFIED, $this->repair_send_date_modified);
		if ($this->isColumnModified(RepairPeer::REPAIR_RECEIVE_DATE_MODIFIED)) $criteria->add(RepairPeer::REPAIR_RECEIVE_DATE_MODIFIED, $this->repair_receive_date_modified);
		if ($this->isColumnModified(RepairPeer::CREATED_BY)) $criteria->add(RepairPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(RepairPeer::DATE_CREATED)) $criteria->add(RepairPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(RepairPeer::MODIFIED_BY)) $criteria->add(RepairPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(RepairPeer::DATE_MODIFIED)) $criteria->add(RepairPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(RepairPeer::DATABASE_NAME);

		$criteria->add(RepairPeer::INDEX_NO, $this->index_no);

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

		$copyObj->setRepairSendDate($this->repair_send_date);

		$copyObj->setRepairReceiveDate($this->repair_receive_date);

		$copyObj->setGarmentCode($this->garment_code);

		$copyObj->setType($this->type);

		$copyObj->setSize($this->size);

		$copyObj->setColor($this->color);

		$copyObj->setCustomer($this->customer);

		$copyObj->setNoOfTimesWash($this->no_of_times_wash);

		$copyObj->setNumber($this->number);

		$copyObj->setHangerNo($this->hanger_no);

		$copyObj->setInsertedDate($this->inserted_date);

		$copyObj->setRejectType($this->reject_type);

		$copyObj->setRejectIndexNo($this->reject_index_no);

		$copyObj->setDepartment($this->department);

		$copyObj->setBuilding($this->building);

		$copyObj->setRepairSendDateModified($this->repair_send_date_modified);

		$copyObj->setRepairReceiveDateModified($this->repair_receive_date_modified);

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
			self::$peer = new RepairPeer();
		}
		return self::$peer;
	}

} 