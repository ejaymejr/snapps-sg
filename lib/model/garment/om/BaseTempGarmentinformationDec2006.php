<?php


abstract class BaseTempGarmentinformationDec2006 extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $garment_code = 'null';


	
	protected $date_time;


	
	protected $number = 'null';


	
	protected $hanger_no = 'null';


	
	protected $type = 'null';


	
	protected $color = 'null';

	
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

	
	public function getNumber()
	{

		return $this->number;
	}

	
	public function getHangerNo()
	{

		return $this->hanger_no;
	}

	
	public function getType()
	{

		return $this->type;
	}

	
	public function getColor()
	{

		return $this->color;
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = TempGarmentinformationDec2006Peer::ID;
		}

	} 
	
	public function setGarmentCode($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->garment_code !== $v || $v === 'null') {
			$this->garment_code = $v;
			$this->modifiedColumns[] = TempGarmentinformationDec2006Peer::GARMENT_CODE;
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
			$this->modifiedColumns[] = TempGarmentinformationDec2006Peer::DATE_TIME;
		}

	} 
	
	public function setNumber($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->number !== $v || $v === 'null') {
			$this->number = $v;
			$this->modifiedColumns[] = TempGarmentinformationDec2006Peer::NUMBER;
		}

	} 
	
	public function setHangerNo($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hanger_no !== $v || $v === 'null') {
			$this->hanger_no = $v;
			$this->modifiedColumns[] = TempGarmentinformationDec2006Peer::HANGER_NO;
		}

	} 
	
	public function setType($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->type !== $v || $v === 'null') {
			$this->type = $v;
			$this->modifiedColumns[] = TempGarmentinformationDec2006Peer::TYPE;
		}

	} 
	
	public function setColor($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->color !== $v || $v === 'null') {
			$this->color = $v;
			$this->modifiedColumns[] = TempGarmentinformationDec2006Peer::COLOR;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->garment_code = $rs->getString($startcol + 1);

			$this->date_time = $rs->getTimestamp($startcol + 2, null);

			$this->number = $rs->getString($startcol + 3);

			$this->hanger_no = $rs->getString($startcol + 4);

			$this->type = $rs->getString($startcol + 5);

			$this->color = $rs->getString($startcol + 6);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 7; 
		} catch (Exception $e) {
			throw new PropelException("Error populating TempGarmentinformationDec2006 object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TempGarmentinformationDec2006Peer::DATABASE_NAME);
		}

		try {
			$con->begin();
			TempGarmentinformationDec2006Peer::doDelete($this, $con);
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
			$con = Propel::getConnection(TempGarmentinformationDec2006Peer::DATABASE_NAME);
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
					$pk = TempGarmentinformationDec2006Peer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += TempGarmentinformationDec2006Peer::doUpdate($this, $con);
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


			if (($retval = TempGarmentinformationDec2006Peer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TempGarmentinformationDec2006Peer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getDateTime();
				break;
			case 3:
				return $this->getNumber();
				break;
			case 4:
				return $this->getHangerNo();
				break;
			case 5:
				return $this->getType();
				break;
			case 6:
				return $this->getColor();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TempGarmentinformationDec2006Peer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getGarmentCode(),
			$keys[2] => $this->getDateTime(),
			$keys[3] => $this->getNumber(),
			$keys[4] => $this->getHangerNo(),
			$keys[5] => $this->getType(),
			$keys[6] => $this->getColor(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TempGarmentinformationDec2006Peer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setDateTime($value);
				break;
			case 3:
				$this->setNumber($value);
				break;
			case 4:
				$this->setHangerNo($value);
				break;
			case 5:
				$this->setType($value);
				break;
			case 6:
				$this->setColor($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TempGarmentinformationDec2006Peer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setGarmentCode($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDateTime($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setNumber($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setHangerNo($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setType($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setColor($arr[$keys[6]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(TempGarmentinformationDec2006Peer::DATABASE_NAME);

		if ($this->isColumnModified(TempGarmentinformationDec2006Peer::ID)) $criteria->add(TempGarmentinformationDec2006Peer::ID, $this->id);
		if ($this->isColumnModified(TempGarmentinformationDec2006Peer::GARMENT_CODE)) $criteria->add(TempGarmentinformationDec2006Peer::GARMENT_CODE, $this->garment_code);
		if ($this->isColumnModified(TempGarmentinformationDec2006Peer::DATE_TIME)) $criteria->add(TempGarmentinformationDec2006Peer::DATE_TIME, $this->date_time);
		if ($this->isColumnModified(TempGarmentinformationDec2006Peer::NUMBER)) $criteria->add(TempGarmentinformationDec2006Peer::NUMBER, $this->number);
		if ($this->isColumnModified(TempGarmentinformationDec2006Peer::HANGER_NO)) $criteria->add(TempGarmentinformationDec2006Peer::HANGER_NO, $this->hanger_no);
		if ($this->isColumnModified(TempGarmentinformationDec2006Peer::TYPE)) $criteria->add(TempGarmentinformationDec2006Peer::TYPE, $this->type);
		if ($this->isColumnModified(TempGarmentinformationDec2006Peer::COLOR)) $criteria->add(TempGarmentinformationDec2006Peer::COLOR, $this->color);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(TempGarmentinformationDec2006Peer::DATABASE_NAME);

		$criteria->add(TempGarmentinformationDec2006Peer::ID, $this->id);

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

		$copyObj->setDateTime($this->date_time);

		$copyObj->setNumber($this->number);

		$copyObj->setHangerNo($this->hanger_no);

		$copyObj->setType($this->type);

		$copyObj->setColor($this->color);


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
			self::$peer = new TempGarmentinformationDec2006Peer();
		}
		return self::$peer;
	}

} 