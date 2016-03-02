<?php


abstract class BaseScrap extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id = 0;


	
	protected $index_no;


	
	protected $reject_date;


	
	protected $scrap_date;


	
	protected $scrap_complete_date;


	
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


	
	protected $department = 'null';


	
	protected $building = 'null';


	
	protected $scrap_date_modified;


	
	protected $scrap_date_complete_modified;


	
	protected $reject_index_no = 0;


	
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

	
	public function getRejectDate($format = 'Y-m-d H:i:s')
	{

		if ($this->reject_date === null || $this->reject_date === '') {
			return null;
		} elseif (!is_int($this->reject_date)) {
						$ts = strtotime($this->reject_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [reject_date] as date/time value: " . var_export($this->reject_date, true));
			}
		} else {
			$ts = $this->reject_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getScrapDate($format = 'Y-m-d H:i:s')
	{

		if ($this->scrap_date === null || $this->scrap_date === '') {
			return null;
		} elseif (!is_int($this->scrap_date)) {
						$ts = strtotime($this->scrap_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [scrap_date] as date/time value: " . var_export($this->scrap_date, true));
			}
		} else {
			$ts = $this->scrap_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getScrapCompleteDate($format = 'Y-m-d H:i:s')
	{

		if ($this->scrap_complete_date === null || $this->scrap_complete_date === '') {
			return null;
		} elseif (!is_int($this->scrap_complete_date)) {
						$ts = strtotime($this->scrap_complete_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [scrap_complete_date] as date/time value: " . var_export($this->scrap_complete_date, true));
			}
		} else {
			$ts = $this->scrap_complete_date;
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

	
	public function getDepartment()
	{

		return $this->department;
	}

	
	public function getBuilding()
	{

		return $this->building;
	}

	
	public function getScrapDateModified($format = 'Y-m-d H:i:s')
	{

		if ($this->scrap_date_modified === null || $this->scrap_date_modified === '') {
			return null;
		} elseif (!is_int($this->scrap_date_modified)) {
						$ts = strtotime($this->scrap_date_modified);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [scrap_date_modified] as date/time value: " . var_export($this->scrap_date_modified, true));
			}
		} else {
			$ts = $this->scrap_date_modified;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getScrapDateCompleteModified($format = 'Y-m-d H:i:s')
	{

		if ($this->scrap_date_complete_modified === null || $this->scrap_date_complete_modified === '') {
			return null;
		} elseif (!is_int($this->scrap_date_complete_modified)) {
						$ts = strtotime($this->scrap_date_complete_modified);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [scrap_date_complete_modified] as date/time value: " . var_export($this->scrap_date_complete_modified, true));
			}
		} else {
			$ts = $this->scrap_date_complete_modified;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getRejectIndexNo()
	{

		return $this->reject_index_no;
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
			$this->modifiedColumns[] = ScrapPeer::ID;
		}

	} 
	
	public function setIndexNo($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->index_no !== $v) {
			$this->index_no = $v;
			$this->modifiedColumns[] = ScrapPeer::INDEX_NO;
		}

	} 
	
	public function setRejectDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [reject_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->reject_date !== $ts) {
			$this->reject_date = $ts;
			$this->modifiedColumns[] = ScrapPeer::REJECT_DATE;
		}

	} 
	
	public function setScrapDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [scrap_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->scrap_date !== $ts) {
			$this->scrap_date = $ts;
			$this->modifiedColumns[] = ScrapPeer::SCRAP_DATE;
		}

	} 
	
	public function setScrapCompleteDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [scrap_complete_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->scrap_complete_date !== $ts) {
			$this->scrap_complete_date = $ts;
			$this->modifiedColumns[] = ScrapPeer::SCRAP_COMPLETE_DATE;
		}

	} 
	
	public function setGarmentCode($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->garment_code !== $v || $v === 'null') {
			$this->garment_code = $v;
			$this->modifiedColumns[] = ScrapPeer::GARMENT_CODE;
		}

	} 
	
	public function setType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->type !== $v || $v === 'null') {
			$this->type = $v;
			$this->modifiedColumns[] = ScrapPeer::TYPE;
		}

	} 
	
	public function setSize($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->size !== $v || $v === 'null') {
			$this->size = $v;
			$this->modifiedColumns[] = ScrapPeer::SIZE;
		}

	} 
	
	public function setColor($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->color !== $v || $v === 'null') {
			$this->color = $v;
			$this->modifiedColumns[] = ScrapPeer::COLOR;
		}

	} 
	
	public function setCustomer($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->customer !== $v || $v === 'null') {
			$this->customer = $v;
			$this->modifiedColumns[] = ScrapPeer::CUSTOMER;
		}

	} 
	
	public function setNoOfTimesWash($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->no_of_times_wash !== $v || $v === 0) {
			$this->no_of_times_wash = $v;
			$this->modifiedColumns[] = ScrapPeer::NO_OF_TIMES_WASH;
		}

	} 
	
	public function setNumber($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->number !== $v) {
			$this->number = $v;
			$this->modifiedColumns[] = ScrapPeer::NUMBER;
		}

	} 
	
	public function setHangerNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hanger_no !== $v) {
			$this->hanger_no = $v;
			$this->modifiedColumns[] = ScrapPeer::HANGER_NO;
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
			$this->modifiedColumns[] = ScrapPeer::INSERTED_DATE;
		}

	} 
	
	public function setRejectType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->reject_type !== $v || $v === 'null') {
			$this->reject_type = $v;
			$this->modifiedColumns[] = ScrapPeer::REJECT_TYPE;
		}

	} 
	
	public function setDepartment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->department !== $v || $v === 'null') {
			$this->department = $v;
			$this->modifiedColumns[] = ScrapPeer::DEPARTMENT;
		}

	} 
	
	public function setBuilding($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->building !== $v || $v === 'null') {
			$this->building = $v;
			$this->modifiedColumns[] = ScrapPeer::BUILDING;
		}

	} 
	
	public function setScrapDateModified($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [scrap_date_modified] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->scrap_date_modified !== $ts) {
			$this->scrap_date_modified = $ts;
			$this->modifiedColumns[] = ScrapPeer::SCRAP_DATE_MODIFIED;
		}

	} 
	
	public function setScrapDateCompleteModified($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [scrap_date_complete_modified] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->scrap_date_complete_modified !== $ts) {
			$this->scrap_date_complete_modified = $ts;
			$this->modifiedColumns[] = ScrapPeer::SCRAP_DATE_COMPLETE_MODIFIED;
		}

	} 
	
	public function setRejectIndexNo($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->reject_index_no !== $v || $v === 0) {
			$this->reject_index_no = $v;
			$this->modifiedColumns[] = ScrapPeer::REJECT_INDEX_NO;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v || $v === 'null') {
			$this->created_by = $v;
			$this->modifiedColumns[] = ScrapPeer::CREATED_BY;
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
			$this->modifiedColumns[] = ScrapPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v || $v === 'null') {
			$this->modified_by = $v;
			$this->modifiedColumns[] = ScrapPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = ScrapPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->index_no = $rs->getInt($startcol + 1);

			$this->reject_date = $rs->getTimestamp($startcol + 2, null);

			$this->scrap_date = $rs->getTimestamp($startcol + 3, null);

			$this->scrap_complete_date = $rs->getTimestamp($startcol + 4, null);

			$this->garment_code = $rs->getString($startcol + 5);

			$this->type = $rs->getString($startcol + 6);

			$this->size = $rs->getString($startcol + 7);

			$this->color = $rs->getString($startcol + 8);

			$this->customer = $rs->getString($startcol + 9);

			$this->no_of_times_wash = $rs->getInt($startcol + 10);

			$this->number = $rs->getString($startcol + 11);

			$this->hanger_no = $rs->getString($startcol + 12);

			$this->inserted_date = $rs->getTimestamp($startcol + 13, null);

			$this->reject_type = $rs->getString($startcol + 14);

			$this->department = $rs->getString($startcol + 15);

			$this->building = $rs->getString($startcol + 16);

			$this->scrap_date_modified = $rs->getTimestamp($startcol + 17, null);

			$this->scrap_date_complete_modified = $rs->getTimestamp($startcol + 18, null);

			$this->reject_index_no = $rs->getInt($startcol + 19);

			$this->created_by = $rs->getString($startcol + 20);

			$this->date_created = $rs->getTimestamp($startcol + 21, null);

			$this->modified_by = $rs->getString($startcol + 22);

			$this->date_modified = $rs->getTimestamp($startcol + 23, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 24; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Scrap object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ScrapPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ScrapPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(ScrapPeer::DATABASE_NAME);
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
					$pk = ScrapPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setIndexNo($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ScrapPeer::doUpdate($this, $con);
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


			if (($retval = ScrapPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ScrapPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getRejectDate();
				break;
			case 3:
				return $this->getScrapDate();
				break;
			case 4:
				return $this->getScrapCompleteDate();
				break;
			case 5:
				return $this->getGarmentCode();
				break;
			case 6:
				return $this->getType();
				break;
			case 7:
				return $this->getSize();
				break;
			case 8:
				return $this->getColor();
				break;
			case 9:
				return $this->getCustomer();
				break;
			case 10:
				return $this->getNoOfTimesWash();
				break;
			case 11:
				return $this->getNumber();
				break;
			case 12:
				return $this->getHangerNo();
				break;
			case 13:
				return $this->getInsertedDate();
				break;
			case 14:
				return $this->getRejectType();
				break;
			case 15:
				return $this->getDepartment();
				break;
			case 16:
				return $this->getBuilding();
				break;
			case 17:
				return $this->getScrapDateModified();
				break;
			case 18:
				return $this->getScrapDateCompleteModified();
				break;
			case 19:
				return $this->getRejectIndexNo();
				break;
			case 20:
				return $this->getCreatedBy();
				break;
			case 21:
				return $this->getDateCreated();
				break;
			case 22:
				return $this->getModifiedBy();
				break;
			case 23:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ScrapPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getIndexNo(),
			$keys[2] => $this->getRejectDate(),
			$keys[3] => $this->getScrapDate(),
			$keys[4] => $this->getScrapCompleteDate(),
			$keys[5] => $this->getGarmentCode(),
			$keys[6] => $this->getType(),
			$keys[7] => $this->getSize(),
			$keys[8] => $this->getColor(),
			$keys[9] => $this->getCustomer(),
			$keys[10] => $this->getNoOfTimesWash(),
			$keys[11] => $this->getNumber(),
			$keys[12] => $this->getHangerNo(),
			$keys[13] => $this->getInsertedDate(),
			$keys[14] => $this->getRejectType(),
			$keys[15] => $this->getDepartment(),
			$keys[16] => $this->getBuilding(),
			$keys[17] => $this->getScrapDateModified(),
			$keys[18] => $this->getScrapDateCompleteModified(),
			$keys[19] => $this->getRejectIndexNo(),
			$keys[20] => $this->getCreatedBy(),
			$keys[21] => $this->getDateCreated(),
			$keys[22] => $this->getModifiedBy(),
			$keys[23] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ScrapPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setRejectDate($value);
				break;
			case 3:
				$this->setScrapDate($value);
				break;
			case 4:
				$this->setScrapCompleteDate($value);
				break;
			case 5:
				$this->setGarmentCode($value);
				break;
			case 6:
				$this->setType($value);
				break;
			case 7:
				$this->setSize($value);
				break;
			case 8:
				$this->setColor($value);
				break;
			case 9:
				$this->setCustomer($value);
				break;
			case 10:
				$this->setNoOfTimesWash($value);
				break;
			case 11:
				$this->setNumber($value);
				break;
			case 12:
				$this->setHangerNo($value);
				break;
			case 13:
				$this->setInsertedDate($value);
				break;
			case 14:
				$this->setRejectType($value);
				break;
			case 15:
				$this->setDepartment($value);
				break;
			case 16:
				$this->setBuilding($value);
				break;
			case 17:
				$this->setScrapDateModified($value);
				break;
			case 18:
				$this->setScrapDateCompleteModified($value);
				break;
			case 19:
				$this->setRejectIndexNo($value);
				break;
			case 20:
				$this->setCreatedBy($value);
				break;
			case 21:
				$this->setDateCreated($value);
				break;
			case 22:
				$this->setModifiedBy($value);
				break;
			case 23:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ScrapPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIndexNo($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setRejectDate($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setScrapDate($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setScrapCompleteDate($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setGarmentCode($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setType($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setSize($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setColor($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setCustomer($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setNoOfTimesWash($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setNumber($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setHangerNo($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setInsertedDate($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setRejectType($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setDepartment($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setBuilding($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setScrapDateModified($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setScrapDateCompleteModified($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setRejectIndexNo($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setCreatedBy($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setDateCreated($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setModifiedBy($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setDateModified($arr[$keys[23]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ScrapPeer::DATABASE_NAME);

		if ($this->isColumnModified(ScrapPeer::ID)) $criteria->add(ScrapPeer::ID, $this->id);
		if ($this->isColumnModified(ScrapPeer::INDEX_NO)) $criteria->add(ScrapPeer::INDEX_NO, $this->index_no);
		if ($this->isColumnModified(ScrapPeer::REJECT_DATE)) $criteria->add(ScrapPeer::REJECT_DATE, $this->reject_date);
		if ($this->isColumnModified(ScrapPeer::SCRAP_DATE)) $criteria->add(ScrapPeer::SCRAP_DATE, $this->scrap_date);
		if ($this->isColumnModified(ScrapPeer::SCRAP_COMPLETE_DATE)) $criteria->add(ScrapPeer::SCRAP_COMPLETE_DATE, $this->scrap_complete_date);
		if ($this->isColumnModified(ScrapPeer::GARMENT_CODE)) $criteria->add(ScrapPeer::GARMENT_CODE, $this->garment_code);
		if ($this->isColumnModified(ScrapPeer::TYPE)) $criteria->add(ScrapPeer::TYPE, $this->type);
		if ($this->isColumnModified(ScrapPeer::SIZE)) $criteria->add(ScrapPeer::SIZE, $this->size);
		if ($this->isColumnModified(ScrapPeer::COLOR)) $criteria->add(ScrapPeer::COLOR, $this->color);
		if ($this->isColumnModified(ScrapPeer::CUSTOMER)) $criteria->add(ScrapPeer::CUSTOMER, $this->customer);
		if ($this->isColumnModified(ScrapPeer::NO_OF_TIMES_WASH)) $criteria->add(ScrapPeer::NO_OF_TIMES_WASH, $this->no_of_times_wash);
		if ($this->isColumnModified(ScrapPeer::NUMBER)) $criteria->add(ScrapPeer::NUMBER, $this->number);
		if ($this->isColumnModified(ScrapPeer::HANGER_NO)) $criteria->add(ScrapPeer::HANGER_NO, $this->hanger_no);
		if ($this->isColumnModified(ScrapPeer::INSERTED_DATE)) $criteria->add(ScrapPeer::INSERTED_DATE, $this->inserted_date);
		if ($this->isColumnModified(ScrapPeer::REJECT_TYPE)) $criteria->add(ScrapPeer::REJECT_TYPE, $this->reject_type);
		if ($this->isColumnModified(ScrapPeer::DEPARTMENT)) $criteria->add(ScrapPeer::DEPARTMENT, $this->department);
		if ($this->isColumnModified(ScrapPeer::BUILDING)) $criteria->add(ScrapPeer::BUILDING, $this->building);
		if ($this->isColumnModified(ScrapPeer::SCRAP_DATE_MODIFIED)) $criteria->add(ScrapPeer::SCRAP_DATE_MODIFIED, $this->scrap_date_modified);
		if ($this->isColumnModified(ScrapPeer::SCRAP_DATE_COMPLETE_MODIFIED)) $criteria->add(ScrapPeer::SCRAP_DATE_COMPLETE_MODIFIED, $this->scrap_date_complete_modified);
		if ($this->isColumnModified(ScrapPeer::REJECT_INDEX_NO)) $criteria->add(ScrapPeer::REJECT_INDEX_NO, $this->reject_index_no);
		if ($this->isColumnModified(ScrapPeer::CREATED_BY)) $criteria->add(ScrapPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(ScrapPeer::DATE_CREATED)) $criteria->add(ScrapPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(ScrapPeer::MODIFIED_BY)) $criteria->add(ScrapPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(ScrapPeer::DATE_MODIFIED)) $criteria->add(ScrapPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ScrapPeer::DATABASE_NAME);

		$criteria->add(ScrapPeer::INDEX_NO, $this->index_no);

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

		$copyObj->setRejectDate($this->reject_date);

		$copyObj->setScrapDate($this->scrap_date);

		$copyObj->setScrapCompleteDate($this->scrap_complete_date);

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

		$copyObj->setDepartment($this->department);

		$copyObj->setBuilding($this->building);

		$copyObj->setScrapDateModified($this->scrap_date_modified);

		$copyObj->setScrapDateCompleteModified($this->scrap_date_complete_modified);

		$copyObj->setRejectIndexNo($this->reject_index_no);

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
			self::$peer = new ScrapPeer();
		}
		return self::$peer;
	}

} 