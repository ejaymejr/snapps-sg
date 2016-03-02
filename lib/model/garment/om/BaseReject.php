<?php


abstract class BaseReject extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id = 0;


	
	protected $index_no;


	
	protected $reviewed_date;


	
	protected $reviewed_result = 'null';


	
	protected $reject_date;


	
	protected $repair_sent_date;


	
	protected $repair_receive_date;


	
	protected $scrap_complete_date;


	
	protected $downgrade_date;


	
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


	
	protected $reject_date_modified;


	
	protected $reviewed_date_modified;


	
	protected $repair_sent_date_modified;


	
	protected $repair_receive_date_modified;


	
	protected $scrap_complete_date_modified;


	
	protected $downgrade_date_modified;


	
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

	
	public function getReviewedDate($format = 'Y-m-d H:i:s')
	{

		if ($this->reviewed_date === null || $this->reviewed_date === '') {
			return null;
		} elseif (!is_int($this->reviewed_date)) {
						$ts = strtotime($this->reviewed_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [reviewed_date] as date/time value: " . var_export($this->reviewed_date, true));
			}
		} else {
			$ts = $this->reviewed_date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getReviewedResult()
	{

		return $this->reviewed_result;
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

	
	public function getRepairSentDate($format = 'Y-m-d H:i:s')
	{

		if ($this->repair_sent_date === null || $this->repair_sent_date === '') {
			return null;
		} elseif (!is_int($this->repair_sent_date)) {
						$ts = strtotime($this->repair_sent_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [repair_sent_date] as date/time value: " . var_export($this->repair_sent_date, true));
			}
		} else {
			$ts = $this->repair_sent_date;
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

	
	public function getDowngradeDate($format = 'Y-m-d H:i:s')
	{

		if ($this->downgrade_date === null || $this->downgrade_date === '') {
			return null;
		} elseif (!is_int($this->downgrade_date)) {
						$ts = strtotime($this->downgrade_date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [downgrade_date] as date/time value: " . var_export($this->downgrade_date, true));
			}
		} else {
			$ts = $this->downgrade_date;
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

	
	public function getRejectDateModified($format = 'Y-m-d H:i:s')
	{

		if ($this->reject_date_modified === null || $this->reject_date_modified === '') {
			return null;
		} elseif (!is_int($this->reject_date_modified)) {
						$ts = strtotime($this->reject_date_modified);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [reject_date_modified] as date/time value: " . var_export($this->reject_date_modified, true));
			}
		} else {
			$ts = $this->reject_date_modified;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getReviewedDateModified($format = 'Y-m-d H:i:s')
	{

		if ($this->reviewed_date_modified === null || $this->reviewed_date_modified === '') {
			return null;
		} elseif (!is_int($this->reviewed_date_modified)) {
						$ts = strtotime($this->reviewed_date_modified);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [reviewed_date_modified] as date/time value: " . var_export($this->reviewed_date_modified, true));
			}
		} else {
			$ts = $this->reviewed_date_modified;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getRepairSentDateModified($format = 'Y-m-d H:i:s')
	{

		if ($this->repair_sent_date_modified === null || $this->repair_sent_date_modified === '') {
			return null;
		} elseif (!is_int($this->repair_sent_date_modified)) {
						$ts = strtotime($this->repair_sent_date_modified);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [repair_sent_date_modified] as date/time value: " . var_export($this->repair_sent_date_modified, true));
			}
		} else {
			$ts = $this->repair_sent_date_modified;
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

	
	public function getScrapCompleteDateModified($format = 'Y-m-d H:i:s')
	{

		if ($this->scrap_complete_date_modified === null || $this->scrap_complete_date_modified === '') {
			return null;
		} elseif (!is_int($this->scrap_complete_date_modified)) {
						$ts = strtotime($this->scrap_complete_date_modified);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [scrap_complete_date_modified] as date/time value: " . var_export($this->scrap_complete_date_modified, true));
			}
		} else {
			$ts = $this->scrap_complete_date_modified;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getDowngradeDateModified($format = 'Y-m-d H:i:s')
	{

		if ($this->downgrade_date_modified === null || $this->downgrade_date_modified === '') {
			return null;
		} elseif (!is_int($this->downgrade_date_modified)) {
						$ts = strtotime($this->downgrade_date_modified);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [downgrade_date_modified] as date/time value: " . var_export($this->downgrade_date_modified, true));
			}
		} else {
			$ts = $this->downgrade_date_modified;
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
			$this->modifiedColumns[] = RejectPeer::ID;
		}

	} 
	
	public function setIndexNo($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->index_no !== $v) {
			$this->index_no = $v;
			$this->modifiedColumns[] = RejectPeer::INDEX_NO;
		}

	} 
	
	public function setReviewedDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [reviewed_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->reviewed_date !== $ts) {
			$this->reviewed_date = $ts;
			$this->modifiedColumns[] = RejectPeer::REVIEWED_DATE;
		}

	} 
	
	public function setReviewedResult($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->reviewed_result !== $v || $v === 'null') {
			$this->reviewed_result = $v;
			$this->modifiedColumns[] = RejectPeer::REVIEWED_RESULT;
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
			$this->modifiedColumns[] = RejectPeer::REJECT_DATE;
		}

	} 
	
	public function setRepairSentDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [repair_sent_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->repair_sent_date !== $ts) {
			$this->repair_sent_date = $ts;
			$this->modifiedColumns[] = RejectPeer::REPAIR_SENT_DATE;
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
			$this->modifiedColumns[] = RejectPeer::REPAIR_RECEIVE_DATE;
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
			$this->modifiedColumns[] = RejectPeer::SCRAP_COMPLETE_DATE;
		}

	} 
	
	public function setDowngradeDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [downgrade_date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->downgrade_date !== $ts) {
			$this->downgrade_date = $ts;
			$this->modifiedColumns[] = RejectPeer::DOWNGRADE_DATE;
		}

	} 
	
	public function setGarmentCode($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->garment_code !== $v || $v === 'null') {
			$this->garment_code = $v;
			$this->modifiedColumns[] = RejectPeer::GARMENT_CODE;
		}

	} 
	
	public function setType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->type !== $v || $v === 'null') {
			$this->type = $v;
			$this->modifiedColumns[] = RejectPeer::TYPE;
		}

	} 
	
	public function setSize($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->size !== $v || $v === 'null') {
			$this->size = $v;
			$this->modifiedColumns[] = RejectPeer::SIZE;
		}

	} 
	
	public function setColor($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->color !== $v || $v === 'null') {
			$this->color = $v;
			$this->modifiedColumns[] = RejectPeer::COLOR;
		}

	} 
	
	public function setCustomer($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->customer !== $v || $v === 'null') {
			$this->customer = $v;
			$this->modifiedColumns[] = RejectPeer::CUSTOMER;
		}

	} 
	
	public function setNoOfTimesWash($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->no_of_times_wash !== $v || $v === 0) {
			$this->no_of_times_wash = $v;
			$this->modifiedColumns[] = RejectPeer::NO_OF_TIMES_WASH;
		}

	} 
	
	public function setNumber($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->number !== $v) {
			$this->number = $v;
			$this->modifiedColumns[] = RejectPeer::NUMBER;
		}

	} 
	
	public function setHangerNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hanger_no !== $v) {
			$this->hanger_no = $v;
			$this->modifiedColumns[] = RejectPeer::HANGER_NO;
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
			$this->modifiedColumns[] = RejectPeer::INSERTED_DATE;
		}

	} 
	
	public function setRejectType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->reject_type !== $v || $v === 'null') {
			$this->reject_type = $v;
			$this->modifiedColumns[] = RejectPeer::REJECT_TYPE;
		}

	} 
	
	public function setDepartment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->department !== $v || $v === 'null') {
			$this->department = $v;
			$this->modifiedColumns[] = RejectPeer::DEPARTMENT;
		}

	} 
	
	public function setBuilding($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->building !== $v || $v === 'null') {
			$this->building = $v;
			$this->modifiedColumns[] = RejectPeer::BUILDING;
		}

	} 
	
	public function setRejectDateModified($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [reject_date_modified] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->reject_date_modified !== $ts) {
			$this->reject_date_modified = $ts;
			$this->modifiedColumns[] = RejectPeer::REJECT_DATE_MODIFIED;
		}

	} 
	
	public function setReviewedDateModified($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [reviewed_date_modified] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->reviewed_date_modified !== $ts) {
			$this->reviewed_date_modified = $ts;
			$this->modifiedColumns[] = RejectPeer::REVIEWED_DATE_MODIFIED;
		}

	} 
	
	public function setRepairSentDateModified($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [repair_sent_date_modified] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->repair_sent_date_modified !== $ts) {
			$this->repair_sent_date_modified = $ts;
			$this->modifiedColumns[] = RejectPeer::REPAIR_SENT_DATE_MODIFIED;
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
			$this->modifiedColumns[] = RejectPeer::REPAIR_RECEIVE_DATE_MODIFIED;
		}

	} 
	
	public function setScrapCompleteDateModified($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [scrap_complete_date_modified] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->scrap_complete_date_modified !== $ts) {
			$this->scrap_complete_date_modified = $ts;
			$this->modifiedColumns[] = RejectPeer::SCRAP_COMPLETE_DATE_MODIFIED;
		}

	} 
	
	public function setDowngradeDateModified($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [downgrade_date_modified] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->downgrade_date_modified !== $ts) {
			$this->downgrade_date_modified = $ts;
			$this->modifiedColumns[] = RejectPeer::DOWNGRADE_DATE_MODIFIED;
		}

	} 
	
	public function setCreatedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->created_by !== $v || $v === 'null') {
			$this->created_by = $v;
			$this->modifiedColumns[] = RejectPeer::CREATED_BY;
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
			$this->modifiedColumns[] = RejectPeer::DATE_CREATED;
		}

	} 
	
	public function setModifiedBy($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->modified_by !== $v || $v === 'null') {
			$this->modified_by = $v;
			$this->modifiedColumns[] = RejectPeer::MODIFIED_BY;
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
			$this->modifiedColumns[] = RejectPeer::DATE_MODIFIED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->index_no = $rs->getInt($startcol + 1);

			$this->reviewed_date = $rs->getTimestamp($startcol + 2, null);

			$this->reviewed_result = $rs->getString($startcol + 3);

			$this->reject_date = $rs->getTimestamp($startcol + 4, null);

			$this->repair_sent_date = $rs->getTimestamp($startcol + 5, null);

			$this->repair_receive_date = $rs->getTimestamp($startcol + 6, null);

			$this->scrap_complete_date = $rs->getTimestamp($startcol + 7, null);

			$this->downgrade_date = $rs->getTimestamp($startcol + 8, null);

			$this->garment_code = $rs->getString($startcol + 9);

			$this->type = $rs->getString($startcol + 10);

			$this->size = $rs->getString($startcol + 11);

			$this->color = $rs->getString($startcol + 12);

			$this->customer = $rs->getString($startcol + 13);

			$this->no_of_times_wash = $rs->getInt($startcol + 14);

			$this->number = $rs->getString($startcol + 15);

			$this->hanger_no = $rs->getString($startcol + 16);

			$this->inserted_date = $rs->getTimestamp($startcol + 17, null);

			$this->reject_type = $rs->getString($startcol + 18);

			$this->department = $rs->getString($startcol + 19);

			$this->building = $rs->getString($startcol + 20);

			$this->reject_date_modified = $rs->getTimestamp($startcol + 21, null);

			$this->reviewed_date_modified = $rs->getTimestamp($startcol + 22, null);

			$this->repair_sent_date_modified = $rs->getTimestamp($startcol + 23, null);

			$this->repair_receive_date_modified = $rs->getTimestamp($startcol + 24, null);

			$this->scrap_complete_date_modified = $rs->getTimestamp($startcol + 25, null);

			$this->downgrade_date_modified = $rs->getTimestamp($startcol + 26, null);

			$this->created_by = $rs->getString($startcol + 27);

			$this->date_created = $rs->getTimestamp($startcol + 28, null);

			$this->modified_by = $rs->getString($startcol + 29);

			$this->date_modified = $rs->getTimestamp($startcol + 30, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 31; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Reject object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(RejectPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			RejectPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(RejectPeer::DATABASE_NAME);
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
					$pk = RejectPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setIndexNo($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += RejectPeer::doUpdate($this, $con);
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


			if (($retval = RejectPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = RejectPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getReviewedDate();
				break;
			case 3:
				return $this->getReviewedResult();
				break;
			case 4:
				return $this->getRejectDate();
				break;
			case 5:
				return $this->getRepairSentDate();
				break;
			case 6:
				return $this->getRepairReceiveDate();
				break;
			case 7:
				return $this->getScrapCompleteDate();
				break;
			case 8:
				return $this->getDowngradeDate();
				break;
			case 9:
				return $this->getGarmentCode();
				break;
			case 10:
				return $this->getType();
				break;
			case 11:
				return $this->getSize();
				break;
			case 12:
				return $this->getColor();
				break;
			case 13:
				return $this->getCustomer();
				break;
			case 14:
				return $this->getNoOfTimesWash();
				break;
			case 15:
				return $this->getNumber();
				break;
			case 16:
				return $this->getHangerNo();
				break;
			case 17:
				return $this->getInsertedDate();
				break;
			case 18:
				return $this->getRejectType();
				break;
			case 19:
				return $this->getDepartment();
				break;
			case 20:
				return $this->getBuilding();
				break;
			case 21:
				return $this->getRejectDateModified();
				break;
			case 22:
				return $this->getReviewedDateModified();
				break;
			case 23:
				return $this->getRepairSentDateModified();
				break;
			case 24:
				return $this->getRepairReceiveDateModified();
				break;
			case 25:
				return $this->getScrapCompleteDateModified();
				break;
			case 26:
				return $this->getDowngradeDateModified();
				break;
			case 27:
				return $this->getCreatedBy();
				break;
			case 28:
				return $this->getDateCreated();
				break;
			case 29:
				return $this->getModifiedBy();
				break;
			case 30:
				return $this->getDateModified();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = RejectPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getIndexNo(),
			$keys[2] => $this->getReviewedDate(),
			$keys[3] => $this->getReviewedResult(),
			$keys[4] => $this->getRejectDate(),
			$keys[5] => $this->getRepairSentDate(),
			$keys[6] => $this->getRepairReceiveDate(),
			$keys[7] => $this->getScrapCompleteDate(),
			$keys[8] => $this->getDowngradeDate(),
			$keys[9] => $this->getGarmentCode(),
			$keys[10] => $this->getType(),
			$keys[11] => $this->getSize(),
			$keys[12] => $this->getColor(),
			$keys[13] => $this->getCustomer(),
			$keys[14] => $this->getNoOfTimesWash(),
			$keys[15] => $this->getNumber(),
			$keys[16] => $this->getHangerNo(),
			$keys[17] => $this->getInsertedDate(),
			$keys[18] => $this->getRejectType(),
			$keys[19] => $this->getDepartment(),
			$keys[20] => $this->getBuilding(),
			$keys[21] => $this->getRejectDateModified(),
			$keys[22] => $this->getReviewedDateModified(),
			$keys[23] => $this->getRepairSentDateModified(),
			$keys[24] => $this->getRepairReceiveDateModified(),
			$keys[25] => $this->getScrapCompleteDateModified(),
			$keys[26] => $this->getDowngradeDateModified(),
			$keys[27] => $this->getCreatedBy(),
			$keys[28] => $this->getDateCreated(),
			$keys[29] => $this->getModifiedBy(),
			$keys[30] => $this->getDateModified(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = RejectPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setReviewedDate($value);
				break;
			case 3:
				$this->setReviewedResult($value);
				break;
			case 4:
				$this->setRejectDate($value);
				break;
			case 5:
				$this->setRepairSentDate($value);
				break;
			case 6:
				$this->setRepairReceiveDate($value);
				break;
			case 7:
				$this->setScrapCompleteDate($value);
				break;
			case 8:
				$this->setDowngradeDate($value);
				break;
			case 9:
				$this->setGarmentCode($value);
				break;
			case 10:
				$this->setType($value);
				break;
			case 11:
				$this->setSize($value);
				break;
			case 12:
				$this->setColor($value);
				break;
			case 13:
				$this->setCustomer($value);
				break;
			case 14:
				$this->setNoOfTimesWash($value);
				break;
			case 15:
				$this->setNumber($value);
				break;
			case 16:
				$this->setHangerNo($value);
				break;
			case 17:
				$this->setInsertedDate($value);
				break;
			case 18:
				$this->setRejectType($value);
				break;
			case 19:
				$this->setDepartment($value);
				break;
			case 20:
				$this->setBuilding($value);
				break;
			case 21:
				$this->setRejectDateModified($value);
				break;
			case 22:
				$this->setReviewedDateModified($value);
				break;
			case 23:
				$this->setRepairSentDateModified($value);
				break;
			case 24:
				$this->setRepairReceiveDateModified($value);
				break;
			case 25:
				$this->setScrapCompleteDateModified($value);
				break;
			case 26:
				$this->setDowngradeDateModified($value);
				break;
			case 27:
				$this->setCreatedBy($value);
				break;
			case 28:
				$this->setDateCreated($value);
				break;
			case 29:
				$this->setModifiedBy($value);
				break;
			case 30:
				$this->setDateModified($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = RejectPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIndexNo($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setReviewedDate($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setReviewedResult($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setRejectDate($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setRepairSentDate($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setRepairReceiveDate($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setScrapCompleteDate($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setDowngradeDate($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setGarmentCode($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setType($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setSize($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setColor($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setCustomer($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setNoOfTimesWash($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setNumber($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setHangerNo($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setInsertedDate($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setRejectType($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setDepartment($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setBuilding($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setRejectDateModified($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setReviewedDateModified($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setRepairSentDateModified($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setRepairReceiveDateModified($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setScrapCompleteDateModified($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setDowngradeDateModified($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setCreatedBy($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setDateCreated($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setModifiedBy($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setDateModified($arr[$keys[30]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(RejectPeer::DATABASE_NAME);

		if ($this->isColumnModified(RejectPeer::ID)) $criteria->add(RejectPeer::ID, $this->id);
		if ($this->isColumnModified(RejectPeer::INDEX_NO)) $criteria->add(RejectPeer::INDEX_NO, $this->index_no);
		if ($this->isColumnModified(RejectPeer::REVIEWED_DATE)) $criteria->add(RejectPeer::REVIEWED_DATE, $this->reviewed_date);
		if ($this->isColumnModified(RejectPeer::REVIEWED_RESULT)) $criteria->add(RejectPeer::REVIEWED_RESULT, $this->reviewed_result);
		if ($this->isColumnModified(RejectPeer::REJECT_DATE)) $criteria->add(RejectPeer::REJECT_DATE, $this->reject_date);
		if ($this->isColumnModified(RejectPeer::REPAIR_SENT_DATE)) $criteria->add(RejectPeer::REPAIR_SENT_DATE, $this->repair_sent_date);
		if ($this->isColumnModified(RejectPeer::REPAIR_RECEIVE_DATE)) $criteria->add(RejectPeer::REPAIR_RECEIVE_DATE, $this->repair_receive_date);
		if ($this->isColumnModified(RejectPeer::SCRAP_COMPLETE_DATE)) $criteria->add(RejectPeer::SCRAP_COMPLETE_DATE, $this->scrap_complete_date);
		if ($this->isColumnModified(RejectPeer::DOWNGRADE_DATE)) $criteria->add(RejectPeer::DOWNGRADE_DATE, $this->downgrade_date);
		if ($this->isColumnModified(RejectPeer::GARMENT_CODE)) $criteria->add(RejectPeer::GARMENT_CODE, $this->garment_code);
		if ($this->isColumnModified(RejectPeer::TYPE)) $criteria->add(RejectPeer::TYPE, $this->type);
		if ($this->isColumnModified(RejectPeer::SIZE)) $criteria->add(RejectPeer::SIZE, $this->size);
		if ($this->isColumnModified(RejectPeer::COLOR)) $criteria->add(RejectPeer::COLOR, $this->color);
		if ($this->isColumnModified(RejectPeer::CUSTOMER)) $criteria->add(RejectPeer::CUSTOMER, $this->customer);
		if ($this->isColumnModified(RejectPeer::NO_OF_TIMES_WASH)) $criteria->add(RejectPeer::NO_OF_TIMES_WASH, $this->no_of_times_wash);
		if ($this->isColumnModified(RejectPeer::NUMBER)) $criteria->add(RejectPeer::NUMBER, $this->number);
		if ($this->isColumnModified(RejectPeer::HANGER_NO)) $criteria->add(RejectPeer::HANGER_NO, $this->hanger_no);
		if ($this->isColumnModified(RejectPeer::INSERTED_DATE)) $criteria->add(RejectPeer::INSERTED_DATE, $this->inserted_date);
		if ($this->isColumnModified(RejectPeer::REJECT_TYPE)) $criteria->add(RejectPeer::REJECT_TYPE, $this->reject_type);
		if ($this->isColumnModified(RejectPeer::DEPARTMENT)) $criteria->add(RejectPeer::DEPARTMENT, $this->department);
		if ($this->isColumnModified(RejectPeer::BUILDING)) $criteria->add(RejectPeer::BUILDING, $this->building);
		if ($this->isColumnModified(RejectPeer::REJECT_DATE_MODIFIED)) $criteria->add(RejectPeer::REJECT_DATE_MODIFIED, $this->reject_date_modified);
		if ($this->isColumnModified(RejectPeer::REVIEWED_DATE_MODIFIED)) $criteria->add(RejectPeer::REVIEWED_DATE_MODIFIED, $this->reviewed_date_modified);
		if ($this->isColumnModified(RejectPeer::REPAIR_SENT_DATE_MODIFIED)) $criteria->add(RejectPeer::REPAIR_SENT_DATE_MODIFIED, $this->repair_sent_date_modified);
		if ($this->isColumnModified(RejectPeer::REPAIR_RECEIVE_DATE_MODIFIED)) $criteria->add(RejectPeer::REPAIR_RECEIVE_DATE_MODIFIED, $this->repair_receive_date_modified);
		if ($this->isColumnModified(RejectPeer::SCRAP_COMPLETE_DATE_MODIFIED)) $criteria->add(RejectPeer::SCRAP_COMPLETE_DATE_MODIFIED, $this->scrap_complete_date_modified);
		if ($this->isColumnModified(RejectPeer::DOWNGRADE_DATE_MODIFIED)) $criteria->add(RejectPeer::DOWNGRADE_DATE_MODIFIED, $this->downgrade_date_modified);
		if ($this->isColumnModified(RejectPeer::CREATED_BY)) $criteria->add(RejectPeer::CREATED_BY, $this->created_by);
		if ($this->isColumnModified(RejectPeer::DATE_CREATED)) $criteria->add(RejectPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(RejectPeer::MODIFIED_BY)) $criteria->add(RejectPeer::MODIFIED_BY, $this->modified_by);
		if ($this->isColumnModified(RejectPeer::DATE_MODIFIED)) $criteria->add(RejectPeer::DATE_MODIFIED, $this->date_modified);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(RejectPeer::DATABASE_NAME);

		$criteria->add(RejectPeer::INDEX_NO, $this->index_no);

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

		$copyObj->setReviewedDate($this->reviewed_date);

		$copyObj->setReviewedResult($this->reviewed_result);

		$copyObj->setRejectDate($this->reject_date);

		$copyObj->setRepairSentDate($this->repair_sent_date);

		$copyObj->setRepairReceiveDate($this->repair_receive_date);

		$copyObj->setScrapCompleteDate($this->scrap_complete_date);

		$copyObj->setDowngradeDate($this->downgrade_date);

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

		$copyObj->setRejectDateModified($this->reject_date_modified);

		$copyObj->setReviewedDateModified($this->reviewed_date_modified);

		$copyObj->setRepairSentDateModified($this->repair_sent_date_modified);

		$copyObj->setRepairReceiveDateModified($this->repair_receive_date_modified);

		$copyObj->setScrapCompleteDateModified($this->scrap_complete_date_modified);

		$copyObj->setDowngradeDateModified($this->downgrade_date_modified);

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
			self::$peer = new RejectPeer();
		}
		return self::$peer;
	}

} 