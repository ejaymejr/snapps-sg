<?php


abstract class BaseOutscanTimeChange extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id = 0;


	
	protected $index_no;


	
	protected $date_time_change;


	
	protected $customer = 'null';

	
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

	
	public function getDateTimeChange($format = 'Y-m-d H:i:s')
	{

		if ($this->date_time_change === null || $this->date_time_change === '') {
			return null;
		} elseif (!is_int($this->date_time_change)) {
						$ts = strtotime($this->date_time_change);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_time_change] as date/time value: " . var_export($this->date_time_change, true));
			}
		} else {
			$ts = $this->date_time_change;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getCustomer()
	{

		return $this->customer;
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v || $v === 0) {
			$this->id = $v;
			$this->modifiedColumns[] = OutscanTimeChangePeer::ID;
		}

	} 
	
	public function setIndexNo($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->index_no !== $v) {
			$this->index_no = $v;
			$this->modifiedColumns[] = OutscanTimeChangePeer::INDEX_NO;
		}

	} 
	
	public function setDateTimeChange($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_time_change] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_time_change !== $ts) {
			$this->date_time_change = $ts;
			$this->modifiedColumns[] = OutscanTimeChangePeer::DATE_TIME_CHANGE;
		}

	} 
	
	public function setCustomer($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->customer !== $v || $v === 'null') {
			$this->customer = $v;
			$this->modifiedColumns[] = OutscanTimeChangePeer::CUSTOMER;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->index_no = $rs->getInt($startcol + 1);

			$this->date_time_change = $rs->getTimestamp($startcol + 2, null);

			$this->customer = $rs->getString($startcol + 3);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 4; 
		} catch (Exception $e) {
			throw new PropelException("Error populating OutscanTimeChange object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(OutscanTimeChangePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			OutscanTimeChangePeer::doDelete($this, $con);
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
			$con = Propel::getConnection(OutscanTimeChangePeer::DATABASE_NAME);
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
					$pk = OutscanTimeChangePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setIndexNo($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += OutscanTimeChangePeer::doUpdate($this, $con);
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


			if (($retval = OutscanTimeChangePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = OutscanTimeChangePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getDateTimeChange();
				break;
			case 3:
				return $this->getCustomer();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = OutscanTimeChangePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getIndexNo(),
			$keys[2] => $this->getDateTimeChange(),
			$keys[3] => $this->getCustomer(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = OutscanTimeChangePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setDateTimeChange($value);
				break;
			case 3:
				$this->setCustomer($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = OutscanTimeChangePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIndexNo($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDateTimeChange($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCustomer($arr[$keys[3]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(OutscanTimeChangePeer::DATABASE_NAME);

		if ($this->isColumnModified(OutscanTimeChangePeer::ID)) $criteria->add(OutscanTimeChangePeer::ID, $this->id);
		if ($this->isColumnModified(OutscanTimeChangePeer::INDEX_NO)) $criteria->add(OutscanTimeChangePeer::INDEX_NO, $this->index_no);
		if ($this->isColumnModified(OutscanTimeChangePeer::DATE_TIME_CHANGE)) $criteria->add(OutscanTimeChangePeer::DATE_TIME_CHANGE, $this->date_time_change);
		if ($this->isColumnModified(OutscanTimeChangePeer::CUSTOMER)) $criteria->add(OutscanTimeChangePeer::CUSTOMER, $this->customer);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(OutscanTimeChangePeer::DATABASE_NAME);

		$criteria->add(OutscanTimeChangePeer::INDEX_NO, $this->index_no);

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

		$copyObj->setDateTimeChange($this->date_time_change);

		$copyObj->setCustomer($this->customer);


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
			self::$peer = new OutscanTimeChangePeer();
		}
		return self::$peer;
	}

} 