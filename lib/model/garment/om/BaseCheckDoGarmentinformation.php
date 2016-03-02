<?php


abstract class BaseCheckDoGarmentinformation extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $garment_code = 'null';


	
	protected $type = 'null';


	
	protected $size = 'null';


	
	protected $color = 'null';


	
	protected $customer = 'null';


	
	protected $no_of_times_wash = 0;


	
	protected $number;


	
	protected $hanger_no;


	
	protected $inserted_date;


	
	protected $department = 'null';


	
	protected $shift = 'null';

	
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

	
	public function getDepartment()
	{

		return $this->department;
	}

	
	public function getShift()
	{

		return $this->shift;
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = CheckDoGarmentinformationPeer::ID;
		}

	} 
	
	public function setGarmentCode($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->garment_code !== $v || $v === 'null') {
			$this->garment_code = $v;
			$this->modifiedColumns[] = CheckDoGarmentinformationPeer::GARMENT_CODE;
		}

	} 
	
	public function setType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->type !== $v || $v === 'null') {
			$this->type = $v;
			$this->modifiedColumns[] = CheckDoGarmentinformationPeer::TYPE;
		}

	} 
	
	public function setSize($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->size !== $v || $v === 'null') {
			$this->size = $v;
			$this->modifiedColumns[] = CheckDoGarmentinformationPeer::SIZE;
		}

	} 
	
	public function setColor($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->color !== $v || $v === 'null') {
			$this->color = $v;
			$this->modifiedColumns[] = CheckDoGarmentinformationPeer::COLOR;
		}

	} 
	
	public function setCustomer($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->customer !== $v || $v === 'null') {
			$this->customer = $v;
			$this->modifiedColumns[] = CheckDoGarmentinformationPeer::CUSTOMER;
		}

	} 
	
	public function setNoOfTimesWash($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->no_of_times_wash !== $v || $v === 0) {
			$this->no_of_times_wash = $v;
			$this->modifiedColumns[] = CheckDoGarmentinformationPeer::NO_OF_TIMES_WASH;
		}

	} 
	
	public function setNumber($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->number !== $v) {
			$this->number = $v;
			$this->modifiedColumns[] = CheckDoGarmentinformationPeer::NUMBER;
		}

	} 
	
	public function setHangerNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hanger_no !== $v) {
			$this->hanger_no = $v;
			$this->modifiedColumns[] = CheckDoGarmentinformationPeer::HANGER_NO;
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
			$this->modifiedColumns[] = CheckDoGarmentinformationPeer::INSERTED_DATE;
		}

	} 
	
	public function setDepartment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->department !== $v || $v === 'null') {
			$this->department = $v;
			$this->modifiedColumns[] = CheckDoGarmentinformationPeer::DEPARTMENT;
		}

	} 
	
	public function setShift($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->shift !== $v || $v === 'null') {
			$this->shift = $v;
			$this->modifiedColumns[] = CheckDoGarmentinformationPeer::SHIFT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->garment_code = $rs->getString($startcol + 1);

			$this->type = $rs->getString($startcol + 2);

			$this->size = $rs->getString($startcol + 3);

			$this->color = $rs->getString($startcol + 4);

			$this->customer = $rs->getString($startcol + 5);

			$this->no_of_times_wash = $rs->getInt($startcol + 6);

			$this->number = $rs->getString($startcol + 7);

			$this->hanger_no = $rs->getString($startcol + 8);

			$this->inserted_date = $rs->getTimestamp($startcol + 9, null);

			$this->department = $rs->getString($startcol + 10);

			$this->shift = $rs->getString($startcol + 11);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 12; 
		} catch (Exception $e) {
			throw new PropelException("Error populating CheckDoGarmentinformation object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CheckDoGarmentinformationPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			CheckDoGarmentinformationPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(CheckDoGarmentinformationPeer::DATABASE_NAME);
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
					$pk = CheckDoGarmentinformationPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += CheckDoGarmentinformationPeer::doUpdate($this, $con);
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


			if (($retval = CheckDoGarmentinformationPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CheckDoGarmentinformationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getType();
				break;
			case 3:
				return $this->getSize();
				break;
			case 4:
				return $this->getColor();
				break;
			case 5:
				return $this->getCustomer();
				break;
			case 6:
				return $this->getNoOfTimesWash();
				break;
			case 7:
				return $this->getNumber();
				break;
			case 8:
				return $this->getHangerNo();
				break;
			case 9:
				return $this->getInsertedDate();
				break;
			case 10:
				return $this->getDepartment();
				break;
			case 11:
				return $this->getShift();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CheckDoGarmentinformationPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getGarmentCode(),
			$keys[2] => $this->getType(),
			$keys[3] => $this->getSize(),
			$keys[4] => $this->getColor(),
			$keys[5] => $this->getCustomer(),
			$keys[6] => $this->getNoOfTimesWash(),
			$keys[7] => $this->getNumber(),
			$keys[8] => $this->getHangerNo(),
			$keys[9] => $this->getInsertedDate(),
			$keys[10] => $this->getDepartment(),
			$keys[11] => $this->getShift(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CheckDoGarmentinformationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setType($value);
				break;
			case 3:
				$this->setSize($value);
				break;
			case 4:
				$this->setColor($value);
				break;
			case 5:
				$this->setCustomer($value);
				break;
			case 6:
				$this->setNoOfTimesWash($value);
				break;
			case 7:
				$this->setNumber($value);
				break;
			case 8:
				$this->setHangerNo($value);
				break;
			case 9:
				$this->setInsertedDate($value);
				break;
			case 10:
				$this->setDepartment($value);
				break;
			case 11:
				$this->setShift($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CheckDoGarmentinformationPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setGarmentCode($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setType($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setSize($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setColor($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCustomer($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setNoOfTimesWash($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setNumber($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setHangerNo($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setInsertedDate($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setDepartment($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setShift($arr[$keys[11]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(CheckDoGarmentinformationPeer::DATABASE_NAME);

		if ($this->isColumnModified(CheckDoGarmentinformationPeer::ID)) $criteria->add(CheckDoGarmentinformationPeer::ID, $this->id);
		if ($this->isColumnModified(CheckDoGarmentinformationPeer::GARMENT_CODE)) $criteria->add(CheckDoGarmentinformationPeer::GARMENT_CODE, $this->garment_code);
		if ($this->isColumnModified(CheckDoGarmentinformationPeer::TYPE)) $criteria->add(CheckDoGarmentinformationPeer::TYPE, $this->type);
		if ($this->isColumnModified(CheckDoGarmentinformationPeer::SIZE)) $criteria->add(CheckDoGarmentinformationPeer::SIZE, $this->size);
		if ($this->isColumnModified(CheckDoGarmentinformationPeer::COLOR)) $criteria->add(CheckDoGarmentinformationPeer::COLOR, $this->color);
		if ($this->isColumnModified(CheckDoGarmentinformationPeer::CUSTOMER)) $criteria->add(CheckDoGarmentinformationPeer::CUSTOMER, $this->customer);
		if ($this->isColumnModified(CheckDoGarmentinformationPeer::NO_OF_TIMES_WASH)) $criteria->add(CheckDoGarmentinformationPeer::NO_OF_TIMES_WASH, $this->no_of_times_wash);
		if ($this->isColumnModified(CheckDoGarmentinformationPeer::NUMBER)) $criteria->add(CheckDoGarmentinformationPeer::NUMBER, $this->number);
		if ($this->isColumnModified(CheckDoGarmentinformationPeer::HANGER_NO)) $criteria->add(CheckDoGarmentinformationPeer::HANGER_NO, $this->hanger_no);
		if ($this->isColumnModified(CheckDoGarmentinformationPeer::INSERTED_DATE)) $criteria->add(CheckDoGarmentinformationPeer::INSERTED_DATE, $this->inserted_date);
		if ($this->isColumnModified(CheckDoGarmentinformationPeer::DEPARTMENT)) $criteria->add(CheckDoGarmentinformationPeer::DEPARTMENT, $this->department);
		if ($this->isColumnModified(CheckDoGarmentinformationPeer::SHIFT)) $criteria->add(CheckDoGarmentinformationPeer::SHIFT, $this->shift);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(CheckDoGarmentinformationPeer::DATABASE_NAME);

		$criteria->add(CheckDoGarmentinformationPeer::ID, $this->id);

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

		$copyObj->setType($this->type);

		$copyObj->setSize($this->size);

		$copyObj->setColor($this->color);

		$copyObj->setCustomer($this->customer);

		$copyObj->setNoOfTimesWash($this->no_of_times_wash);

		$copyObj->setNumber($this->number);

		$copyObj->setHangerNo($this->hanger_no);

		$copyObj->setInsertedDate($this->inserted_date);

		$copyObj->setDepartment($this->department);

		$copyObj->setShift($this->shift);


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
			self::$peer = new CheckDoGarmentinformationPeer();
		}
		return self::$peer;
	}

} 