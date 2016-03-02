<?php


abstract class BaseVisitors extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $date_time;


	
	protected $user_name = 'null';


	
	protected $email = 'null';


	
	protected $department = 'null';


	
	protected $date_deliver;


	
	protected $date_return;


	
	protected $jhxs;


	
	protected $jhs;


	
	protected $jhm;


	
	protected $jhl;


	
	protected $jhxl;


	
	protected $jhxxl;


	
	protected $jhxxxl;


	
	protected $jxs;


	
	protected $js;


	
	protected $jm;


	
	protected $jl;


	
	protected $jxl;


	
	protected $jxxl;


	
	protected $jxxxl;


	
	protected $bxs;


	
	protected $bs;


	
	protected $bm;


	
	protected $bl;


	
	protected $bxl;


	
	protected $bxxl;


	
	protected $bxxxl;


	
	protected $hl;


	
	protected $h2l;


	
	protected $h3l;


	
	protected $lxs;


	
	protected $ls;


	
	protected $lm;


	
	protected $ll;


	
	protected $lxl;


	
	protected $lxxl;


	
	protected $lxxxl;


	
	protected $s24;


	
	protected $s25;


	
	protected $s26;


	
	protected $s27;


	
	protected $s28;


	
	protected $s29;


	
	protected $s30;


	
	protected $ss24;


	
	protected $ss25;


	
	protected $ss26;


	
	protected $ss27;


	
	protected $ss28;


	
	protected $ss29;


	
	protected $ss30;


	
	protected $requested = 'null';


	
	protected $completed_date;


	
	protected $customer = 'null';

	
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

	
	public function getUserName()
	{

		return $this->user_name;
	}

	
	public function getEmail()
	{

		return $this->email;
	}

	
	public function getDepartment()
	{

		return $this->department;
	}

	
	public function getDateDeliver($format = 'Y-m-d H:i:s')
	{

		if ($this->date_deliver === null || $this->date_deliver === '') {
			return null;
		} elseif (!is_int($this->date_deliver)) {
						$ts = strtotime($this->date_deliver);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_deliver] as date/time value: " . var_export($this->date_deliver, true));
			}
		} else {
			$ts = $this->date_deliver;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getDateReturn($format = 'Y-m-d H:i:s')
	{

		if ($this->date_return === null || $this->date_return === '') {
			return null;
		} elseif (!is_int($this->date_return)) {
						$ts = strtotime($this->date_return);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_return] as date/time value: " . var_export($this->date_return, true));
			}
		} else {
			$ts = $this->date_return;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getJhxs()
	{

		return $this->jhxs;
	}

	
	public function getJhs()
	{

		return $this->jhs;
	}

	
	public function getJhm()
	{

		return $this->jhm;
	}

	
	public function getJhl()
	{

		return $this->jhl;
	}

	
	public function getJhxl()
	{

		return $this->jhxl;
	}

	
	public function getJhxxl()
	{

		return $this->jhxxl;
	}

	
	public function getJhxxxl()
	{

		return $this->jhxxxl;
	}

	
	public function getJxs()
	{

		return $this->jxs;
	}

	
	public function getJs()
	{

		return $this->js;
	}

	
	public function getJm()
	{

		return $this->jm;
	}

	
	public function getJl()
	{

		return $this->jl;
	}

	
	public function getJxl()
	{

		return $this->jxl;
	}

	
	public function getJxxl()
	{

		return $this->jxxl;
	}

	
	public function getJxxxl()
	{

		return $this->jxxxl;
	}

	
	public function getBxs()
	{

		return $this->bxs;
	}

	
	public function getBs()
	{

		return $this->bs;
	}

	
	public function getBm()
	{

		return $this->bm;
	}

	
	public function getBl()
	{

		return $this->bl;
	}

	
	public function getBxl()
	{

		return $this->bxl;
	}

	
	public function getBxxl()
	{

		return $this->bxxl;
	}

	
	public function getBxxxl()
	{

		return $this->bxxxl;
	}

	
	public function getHl()
	{

		return $this->hl;
	}

	
	public function getH2l()
	{

		return $this->h2l;
	}

	
	public function getH3l()
	{

		return $this->h3l;
	}

	
	public function getLxs()
	{

		return $this->lxs;
	}

	
	public function getLs()
	{

		return $this->ls;
	}

	
	public function getLm()
	{

		return $this->lm;
	}

	
	public function getLl()
	{

		return $this->ll;
	}

	
	public function getLxl()
	{

		return $this->lxl;
	}

	
	public function getLxxl()
	{

		return $this->lxxl;
	}

	
	public function getLxxxl()
	{

		return $this->lxxxl;
	}

	
	public function getS24()
	{

		return $this->s24;
	}

	
	public function getS25()
	{

		return $this->s25;
	}

	
	public function getS26()
	{

		return $this->s26;
	}

	
	public function getS27()
	{

		return $this->s27;
	}

	
	public function getS28()
	{

		return $this->s28;
	}

	
	public function getS29()
	{

		return $this->s29;
	}

	
	public function getS30()
	{

		return $this->s30;
	}

	
	public function getSs24()
	{

		return $this->ss24;
	}

	
	public function getSs25()
	{

		return $this->ss25;
	}

	
	public function getSs26()
	{

		return $this->ss26;
	}

	
	public function getSs27()
	{

		return $this->ss27;
	}

	
	public function getSs28()
	{

		return $this->ss28;
	}

	
	public function getSs29()
	{

		return $this->ss29;
	}

	
	public function getSs30()
	{

		return $this->ss30;
	}

	
	public function getRequested()
	{

		return $this->requested;
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

	
	public function getCustomer()
	{

		return $this->customer;
	}

	
	public function setId($v)
	{

		
		
		if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = VisitorsPeer::ID;
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
			$this->modifiedColumns[] = VisitorsPeer::DATE_TIME;
		}

	} 
	
	public function setUserName($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->user_name !== $v || $v === 'null') {
			$this->user_name = $v;
			$this->modifiedColumns[] = VisitorsPeer::USER_NAME;
		}

	} 
	
	public function setEmail($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->email !== $v || $v === 'null') {
			$this->email = $v;
			$this->modifiedColumns[] = VisitorsPeer::EMAIL;
		}

	} 
	
	public function setDepartment($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->department !== $v || $v === 'null') {
			$this->department = $v;
			$this->modifiedColumns[] = VisitorsPeer::DEPARTMENT;
		}

	} 
	
	public function setDateDeliver($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_deliver] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_deliver !== $ts) {
			$this->date_deliver = $ts;
			$this->modifiedColumns[] = VisitorsPeer::DATE_DELIVER;
		}

	} 
	
	public function setDateReturn($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_return] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_return !== $ts) {
			$this->date_return = $ts;
			$this->modifiedColumns[] = VisitorsPeer::DATE_RETURN;
		}

	} 
	
	public function setJhxs($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->jhxs !== $v) {
			$this->jhxs = $v;
			$this->modifiedColumns[] = VisitorsPeer::JHXS;
		}

	} 
	
	public function setJhs($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->jhs !== $v) {
			$this->jhs = $v;
			$this->modifiedColumns[] = VisitorsPeer::JHS;
		}

	} 
	
	public function setJhm($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->jhm !== $v) {
			$this->jhm = $v;
			$this->modifiedColumns[] = VisitorsPeer::JHM;
		}

	} 
	
	public function setJhl($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->jhl !== $v) {
			$this->jhl = $v;
			$this->modifiedColumns[] = VisitorsPeer::JHL;
		}

	} 
	
	public function setJhxl($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->jhxl !== $v) {
			$this->jhxl = $v;
			$this->modifiedColumns[] = VisitorsPeer::JHXL;
		}

	} 
	
	public function setJhxxl($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->jhxxl !== $v) {
			$this->jhxxl = $v;
			$this->modifiedColumns[] = VisitorsPeer::JHXXL;
		}

	} 
	
	public function setJhxxxl($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->jhxxxl !== $v) {
			$this->jhxxxl = $v;
			$this->modifiedColumns[] = VisitorsPeer::JHXXXL;
		}

	} 
	
	public function setJxs($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->jxs !== $v) {
			$this->jxs = $v;
			$this->modifiedColumns[] = VisitorsPeer::JXS;
		}

	} 
	
	public function setJs($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->js !== $v) {
			$this->js = $v;
			$this->modifiedColumns[] = VisitorsPeer::JS;
		}

	} 
	
	public function setJm($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->jm !== $v) {
			$this->jm = $v;
			$this->modifiedColumns[] = VisitorsPeer::JM;
		}

	} 
	
	public function setJl($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->jl !== $v) {
			$this->jl = $v;
			$this->modifiedColumns[] = VisitorsPeer::JL;
		}

	} 
	
	public function setJxl($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->jxl !== $v) {
			$this->jxl = $v;
			$this->modifiedColumns[] = VisitorsPeer::JXL;
		}

	} 
	
	public function setJxxl($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->jxxl !== $v) {
			$this->jxxl = $v;
			$this->modifiedColumns[] = VisitorsPeer::JXXL;
		}

	} 
	
	public function setJxxxl($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->jxxxl !== $v) {
			$this->jxxxl = $v;
			$this->modifiedColumns[] = VisitorsPeer::JXXXL;
		}

	} 
	
	public function setBxs($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->bxs !== $v) {
			$this->bxs = $v;
			$this->modifiedColumns[] = VisitorsPeer::BXS;
		}

	} 
	
	public function setBs($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->bs !== $v) {
			$this->bs = $v;
			$this->modifiedColumns[] = VisitorsPeer::BS;
		}

	} 
	
	public function setBm($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->bm !== $v) {
			$this->bm = $v;
			$this->modifiedColumns[] = VisitorsPeer::BM;
		}

	} 
	
	public function setBl($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->bl !== $v) {
			$this->bl = $v;
			$this->modifiedColumns[] = VisitorsPeer::BL;
		}

	} 
	
	public function setBxl($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->bxl !== $v) {
			$this->bxl = $v;
			$this->modifiedColumns[] = VisitorsPeer::BXL;
		}

	} 
	
	public function setBxxl($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->bxxl !== $v) {
			$this->bxxl = $v;
			$this->modifiedColumns[] = VisitorsPeer::BXXL;
		}

	} 
	
	public function setBxxxl($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->bxxxl !== $v) {
			$this->bxxxl = $v;
			$this->modifiedColumns[] = VisitorsPeer::BXXXL;
		}

	} 
	
	public function setHl($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hl !== $v) {
			$this->hl = $v;
			$this->modifiedColumns[] = VisitorsPeer::HL;
		}

	} 
	
	public function setH2l($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->h2l !== $v) {
			$this->h2l = $v;
			$this->modifiedColumns[] = VisitorsPeer::H2L;
		}

	} 
	
	public function setH3l($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->h3l !== $v) {
			$this->h3l = $v;
			$this->modifiedColumns[] = VisitorsPeer::H3L;
		}

	} 
	
	public function setLxs($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->lxs !== $v) {
			$this->lxs = $v;
			$this->modifiedColumns[] = VisitorsPeer::LXS;
		}

	} 
	
	public function setLs($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ls !== $v) {
			$this->ls = $v;
			$this->modifiedColumns[] = VisitorsPeer::LS;
		}

	} 
	
	public function setLm($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->lm !== $v) {
			$this->lm = $v;
			$this->modifiedColumns[] = VisitorsPeer::LM;
		}

	} 
	
	public function setLl($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ll !== $v) {
			$this->ll = $v;
			$this->modifiedColumns[] = VisitorsPeer::LL;
		}

	} 
	
	public function setLxl($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->lxl !== $v) {
			$this->lxl = $v;
			$this->modifiedColumns[] = VisitorsPeer::LXL;
		}

	} 
	
	public function setLxxl($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->lxxl !== $v) {
			$this->lxxl = $v;
			$this->modifiedColumns[] = VisitorsPeer::LXXL;
		}

	} 
	
	public function setLxxxl($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->lxxxl !== $v) {
			$this->lxxxl = $v;
			$this->modifiedColumns[] = VisitorsPeer::LXXXL;
		}

	} 
	
	public function setS24($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->s24 !== $v) {
			$this->s24 = $v;
			$this->modifiedColumns[] = VisitorsPeer::S24;
		}

	} 
	
	public function setS25($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->s25 !== $v) {
			$this->s25 = $v;
			$this->modifiedColumns[] = VisitorsPeer::S25;
		}

	} 
	
	public function setS26($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->s26 !== $v) {
			$this->s26 = $v;
			$this->modifiedColumns[] = VisitorsPeer::S26;
		}

	} 
	
	public function setS27($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->s27 !== $v) {
			$this->s27 = $v;
			$this->modifiedColumns[] = VisitorsPeer::S27;
		}

	} 
	
	public function setS28($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->s28 !== $v) {
			$this->s28 = $v;
			$this->modifiedColumns[] = VisitorsPeer::S28;
		}

	} 
	
	public function setS29($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->s29 !== $v) {
			$this->s29 = $v;
			$this->modifiedColumns[] = VisitorsPeer::S29;
		}

	} 
	
	public function setS30($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->s30 !== $v) {
			$this->s30 = $v;
			$this->modifiedColumns[] = VisitorsPeer::S30;
		}

	} 
	
	public function setSs24($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ss24 !== $v) {
			$this->ss24 = $v;
			$this->modifiedColumns[] = VisitorsPeer::SS24;
		}

	} 
	
	public function setSs25($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ss25 !== $v) {
			$this->ss25 = $v;
			$this->modifiedColumns[] = VisitorsPeer::SS25;
		}

	} 
	
	public function setSs26($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ss26 !== $v) {
			$this->ss26 = $v;
			$this->modifiedColumns[] = VisitorsPeer::SS26;
		}

	} 
	
	public function setSs27($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ss27 !== $v) {
			$this->ss27 = $v;
			$this->modifiedColumns[] = VisitorsPeer::SS27;
		}

	} 
	
	public function setSs28($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ss28 !== $v) {
			$this->ss28 = $v;
			$this->modifiedColumns[] = VisitorsPeer::SS28;
		}

	} 
	
	public function setSs29($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ss29 !== $v) {
			$this->ss29 = $v;
			$this->modifiedColumns[] = VisitorsPeer::SS29;
		}

	} 
	
	public function setSs30($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ss30 !== $v) {
			$this->ss30 = $v;
			$this->modifiedColumns[] = VisitorsPeer::SS30;
		}

	} 
	
	public function setRequested($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->requested !== $v || $v === 'null') {
			$this->requested = $v;
			$this->modifiedColumns[] = VisitorsPeer::REQUESTED;
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
			$this->modifiedColumns[] = VisitorsPeer::COMPLETED_DATE;
		}

	} 
	
	public function setCustomer($v)
	{

		
		
		if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->customer !== $v || $v === 'null') {
			$this->customer = $v;
			$this->modifiedColumns[] = VisitorsPeer::CUSTOMER;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->date_time = $rs->getTimestamp($startcol + 1, null);

			$this->user_name = $rs->getString($startcol + 2);

			$this->email = $rs->getString($startcol + 3);

			$this->department = $rs->getString($startcol + 4);

			$this->date_deliver = $rs->getTimestamp($startcol + 5, null);

			$this->date_return = $rs->getTimestamp($startcol + 6, null);

			$this->jhxs = $rs->getString($startcol + 7);

			$this->jhs = $rs->getString($startcol + 8);

			$this->jhm = $rs->getString($startcol + 9);

			$this->jhl = $rs->getString($startcol + 10);

			$this->jhxl = $rs->getString($startcol + 11);

			$this->jhxxl = $rs->getString($startcol + 12);

			$this->jhxxxl = $rs->getString($startcol + 13);

			$this->jxs = $rs->getString($startcol + 14);

			$this->js = $rs->getString($startcol + 15);

			$this->jm = $rs->getString($startcol + 16);

			$this->jl = $rs->getString($startcol + 17);

			$this->jxl = $rs->getString($startcol + 18);

			$this->jxxl = $rs->getString($startcol + 19);

			$this->jxxxl = $rs->getString($startcol + 20);

			$this->bxs = $rs->getString($startcol + 21);

			$this->bs = $rs->getString($startcol + 22);

			$this->bm = $rs->getString($startcol + 23);

			$this->bl = $rs->getString($startcol + 24);

			$this->bxl = $rs->getString($startcol + 25);

			$this->bxxl = $rs->getString($startcol + 26);

			$this->bxxxl = $rs->getString($startcol + 27);

			$this->hl = $rs->getString($startcol + 28);

			$this->h2l = $rs->getString($startcol + 29);

			$this->h3l = $rs->getString($startcol + 30);

			$this->lxs = $rs->getString($startcol + 31);

			$this->ls = $rs->getString($startcol + 32);

			$this->lm = $rs->getString($startcol + 33);

			$this->ll = $rs->getString($startcol + 34);

			$this->lxl = $rs->getString($startcol + 35);

			$this->lxxl = $rs->getString($startcol + 36);

			$this->lxxxl = $rs->getString($startcol + 37);

			$this->s24 = $rs->getString($startcol + 38);

			$this->s25 = $rs->getString($startcol + 39);

			$this->s26 = $rs->getString($startcol + 40);

			$this->s27 = $rs->getString($startcol + 41);

			$this->s28 = $rs->getString($startcol + 42);

			$this->s29 = $rs->getString($startcol + 43);

			$this->s30 = $rs->getString($startcol + 44);

			$this->ss24 = $rs->getString($startcol + 45);

			$this->ss25 = $rs->getString($startcol + 46);

			$this->ss26 = $rs->getString($startcol + 47);

			$this->ss27 = $rs->getString($startcol + 48);

			$this->ss28 = $rs->getString($startcol + 49);

			$this->ss29 = $rs->getString($startcol + 50);

			$this->ss30 = $rs->getString($startcol + 51);

			$this->requested = $rs->getString($startcol + 52);

			$this->completed_date = $rs->getTimestamp($startcol + 53, null);

			$this->customer = $rs->getString($startcol + 54);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 55; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Visitors object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(VisitorsPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			VisitorsPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(VisitorsPeer::DATABASE_NAME);
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
					$pk = VisitorsPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += VisitorsPeer::doUpdate($this, $con);
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


			if (($retval = VisitorsPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = VisitorsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getUserName();
				break;
			case 3:
				return $this->getEmail();
				break;
			case 4:
				return $this->getDepartment();
				break;
			case 5:
				return $this->getDateDeliver();
				break;
			case 6:
				return $this->getDateReturn();
				break;
			case 7:
				return $this->getJhxs();
				break;
			case 8:
				return $this->getJhs();
				break;
			case 9:
				return $this->getJhm();
				break;
			case 10:
				return $this->getJhl();
				break;
			case 11:
				return $this->getJhxl();
				break;
			case 12:
				return $this->getJhxxl();
				break;
			case 13:
				return $this->getJhxxxl();
				break;
			case 14:
				return $this->getJxs();
				break;
			case 15:
				return $this->getJs();
				break;
			case 16:
				return $this->getJm();
				break;
			case 17:
				return $this->getJl();
				break;
			case 18:
				return $this->getJxl();
				break;
			case 19:
				return $this->getJxxl();
				break;
			case 20:
				return $this->getJxxxl();
				break;
			case 21:
				return $this->getBxs();
				break;
			case 22:
				return $this->getBs();
				break;
			case 23:
				return $this->getBm();
				break;
			case 24:
				return $this->getBl();
				break;
			case 25:
				return $this->getBxl();
				break;
			case 26:
				return $this->getBxxl();
				break;
			case 27:
				return $this->getBxxxl();
				break;
			case 28:
				return $this->getHl();
				break;
			case 29:
				return $this->getH2l();
				break;
			case 30:
				return $this->getH3l();
				break;
			case 31:
				return $this->getLxs();
				break;
			case 32:
				return $this->getLs();
				break;
			case 33:
				return $this->getLm();
				break;
			case 34:
				return $this->getLl();
				break;
			case 35:
				return $this->getLxl();
				break;
			case 36:
				return $this->getLxxl();
				break;
			case 37:
				return $this->getLxxxl();
				break;
			case 38:
				return $this->getS24();
				break;
			case 39:
				return $this->getS25();
				break;
			case 40:
				return $this->getS26();
				break;
			case 41:
				return $this->getS27();
				break;
			case 42:
				return $this->getS28();
				break;
			case 43:
				return $this->getS29();
				break;
			case 44:
				return $this->getS30();
				break;
			case 45:
				return $this->getSs24();
				break;
			case 46:
				return $this->getSs25();
				break;
			case 47:
				return $this->getSs26();
				break;
			case 48:
				return $this->getSs27();
				break;
			case 49:
				return $this->getSs28();
				break;
			case 50:
				return $this->getSs29();
				break;
			case 51:
				return $this->getSs30();
				break;
			case 52:
				return $this->getRequested();
				break;
			case 53:
				return $this->getCompletedDate();
				break;
			case 54:
				return $this->getCustomer();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = VisitorsPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDateTime(),
			$keys[2] => $this->getUserName(),
			$keys[3] => $this->getEmail(),
			$keys[4] => $this->getDepartment(),
			$keys[5] => $this->getDateDeliver(),
			$keys[6] => $this->getDateReturn(),
			$keys[7] => $this->getJhxs(),
			$keys[8] => $this->getJhs(),
			$keys[9] => $this->getJhm(),
			$keys[10] => $this->getJhl(),
			$keys[11] => $this->getJhxl(),
			$keys[12] => $this->getJhxxl(),
			$keys[13] => $this->getJhxxxl(),
			$keys[14] => $this->getJxs(),
			$keys[15] => $this->getJs(),
			$keys[16] => $this->getJm(),
			$keys[17] => $this->getJl(),
			$keys[18] => $this->getJxl(),
			$keys[19] => $this->getJxxl(),
			$keys[20] => $this->getJxxxl(),
			$keys[21] => $this->getBxs(),
			$keys[22] => $this->getBs(),
			$keys[23] => $this->getBm(),
			$keys[24] => $this->getBl(),
			$keys[25] => $this->getBxl(),
			$keys[26] => $this->getBxxl(),
			$keys[27] => $this->getBxxxl(),
			$keys[28] => $this->getHl(),
			$keys[29] => $this->getH2l(),
			$keys[30] => $this->getH3l(),
			$keys[31] => $this->getLxs(),
			$keys[32] => $this->getLs(),
			$keys[33] => $this->getLm(),
			$keys[34] => $this->getLl(),
			$keys[35] => $this->getLxl(),
			$keys[36] => $this->getLxxl(),
			$keys[37] => $this->getLxxxl(),
			$keys[38] => $this->getS24(),
			$keys[39] => $this->getS25(),
			$keys[40] => $this->getS26(),
			$keys[41] => $this->getS27(),
			$keys[42] => $this->getS28(),
			$keys[43] => $this->getS29(),
			$keys[44] => $this->getS30(),
			$keys[45] => $this->getSs24(),
			$keys[46] => $this->getSs25(),
			$keys[47] => $this->getSs26(),
			$keys[48] => $this->getSs27(),
			$keys[49] => $this->getSs28(),
			$keys[50] => $this->getSs29(),
			$keys[51] => $this->getSs30(),
			$keys[52] => $this->getRequested(),
			$keys[53] => $this->getCompletedDate(),
			$keys[54] => $this->getCustomer(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = VisitorsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setUserName($value);
				break;
			case 3:
				$this->setEmail($value);
				break;
			case 4:
				$this->setDepartment($value);
				break;
			case 5:
				$this->setDateDeliver($value);
				break;
			case 6:
				$this->setDateReturn($value);
				break;
			case 7:
				$this->setJhxs($value);
				break;
			case 8:
				$this->setJhs($value);
				break;
			case 9:
				$this->setJhm($value);
				break;
			case 10:
				$this->setJhl($value);
				break;
			case 11:
				$this->setJhxl($value);
				break;
			case 12:
				$this->setJhxxl($value);
				break;
			case 13:
				$this->setJhxxxl($value);
				break;
			case 14:
				$this->setJxs($value);
				break;
			case 15:
				$this->setJs($value);
				break;
			case 16:
				$this->setJm($value);
				break;
			case 17:
				$this->setJl($value);
				break;
			case 18:
				$this->setJxl($value);
				break;
			case 19:
				$this->setJxxl($value);
				break;
			case 20:
				$this->setJxxxl($value);
				break;
			case 21:
				$this->setBxs($value);
				break;
			case 22:
				$this->setBs($value);
				break;
			case 23:
				$this->setBm($value);
				break;
			case 24:
				$this->setBl($value);
				break;
			case 25:
				$this->setBxl($value);
				break;
			case 26:
				$this->setBxxl($value);
				break;
			case 27:
				$this->setBxxxl($value);
				break;
			case 28:
				$this->setHl($value);
				break;
			case 29:
				$this->setH2l($value);
				break;
			case 30:
				$this->setH3l($value);
				break;
			case 31:
				$this->setLxs($value);
				break;
			case 32:
				$this->setLs($value);
				break;
			case 33:
				$this->setLm($value);
				break;
			case 34:
				$this->setLl($value);
				break;
			case 35:
				$this->setLxl($value);
				break;
			case 36:
				$this->setLxxl($value);
				break;
			case 37:
				$this->setLxxxl($value);
				break;
			case 38:
				$this->setS24($value);
				break;
			case 39:
				$this->setS25($value);
				break;
			case 40:
				$this->setS26($value);
				break;
			case 41:
				$this->setS27($value);
				break;
			case 42:
				$this->setS28($value);
				break;
			case 43:
				$this->setS29($value);
				break;
			case 44:
				$this->setS30($value);
				break;
			case 45:
				$this->setSs24($value);
				break;
			case 46:
				$this->setSs25($value);
				break;
			case 47:
				$this->setSs26($value);
				break;
			case 48:
				$this->setSs27($value);
				break;
			case 49:
				$this->setSs28($value);
				break;
			case 50:
				$this->setSs29($value);
				break;
			case 51:
				$this->setSs30($value);
				break;
			case 52:
				$this->setRequested($value);
				break;
			case 53:
				$this->setCompletedDate($value);
				break;
			case 54:
				$this->setCustomer($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = VisitorsPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDateTime($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setUserName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setEmail($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDepartment($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDateDeliver($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDateReturn($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setJhxs($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setJhs($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setJhm($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setJhl($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setJhxl($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setJhxxl($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setJhxxxl($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setJxs($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setJs($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setJm($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setJl($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setJxl($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setJxxl($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setJxxxl($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setBxs($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setBs($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setBm($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setBl($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setBxl($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setBxxl($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setBxxxl($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setHl($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setH2l($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setH3l($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setLxs($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setLs($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setLm($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setLl($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setLxl($arr[$keys[35]]);
		if (array_key_exists($keys[36], $arr)) $this->setLxxl($arr[$keys[36]]);
		if (array_key_exists($keys[37], $arr)) $this->setLxxxl($arr[$keys[37]]);
		if (array_key_exists($keys[38], $arr)) $this->setS24($arr[$keys[38]]);
		if (array_key_exists($keys[39], $arr)) $this->setS25($arr[$keys[39]]);
		if (array_key_exists($keys[40], $arr)) $this->setS26($arr[$keys[40]]);
		if (array_key_exists($keys[41], $arr)) $this->setS27($arr[$keys[41]]);
		if (array_key_exists($keys[42], $arr)) $this->setS28($arr[$keys[42]]);
		if (array_key_exists($keys[43], $arr)) $this->setS29($arr[$keys[43]]);
		if (array_key_exists($keys[44], $arr)) $this->setS30($arr[$keys[44]]);
		if (array_key_exists($keys[45], $arr)) $this->setSs24($arr[$keys[45]]);
		if (array_key_exists($keys[46], $arr)) $this->setSs25($arr[$keys[46]]);
		if (array_key_exists($keys[47], $arr)) $this->setSs26($arr[$keys[47]]);
		if (array_key_exists($keys[48], $arr)) $this->setSs27($arr[$keys[48]]);
		if (array_key_exists($keys[49], $arr)) $this->setSs28($arr[$keys[49]]);
		if (array_key_exists($keys[50], $arr)) $this->setSs29($arr[$keys[50]]);
		if (array_key_exists($keys[51], $arr)) $this->setSs30($arr[$keys[51]]);
		if (array_key_exists($keys[52], $arr)) $this->setRequested($arr[$keys[52]]);
		if (array_key_exists($keys[53], $arr)) $this->setCompletedDate($arr[$keys[53]]);
		if (array_key_exists($keys[54], $arr)) $this->setCustomer($arr[$keys[54]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(VisitorsPeer::DATABASE_NAME);

		if ($this->isColumnModified(VisitorsPeer::ID)) $criteria->add(VisitorsPeer::ID, $this->id);
		if ($this->isColumnModified(VisitorsPeer::DATE_TIME)) $criteria->add(VisitorsPeer::DATE_TIME, $this->date_time);
		if ($this->isColumnModified(VisitorsPeer::USER_NAME)) $criteria->add(VisitorsPeer::USER_NAME, $this->user_name);
		if ($this->isColumnModified(VisitorsPeer::EMAIL)) $criteria->add(VisitorsPeer::EMAIL, $this->email);
		if ($this->isColumnModified(VisitorsPeer::DEPARTMENT)) $criteria->add(VisitorsPeer::DEPARTMENT, $this->department);
		if ($this->isColumnModified(VisitorsPeer::DATE_DELIVER)) $criteria->add(VisitorsPeer::DATE_DELIVER, $this->date_deliver);
		if ($this->isColumnModified(VisitorsPeer::DATE_RETURN)) $criteria->add(VisitorsPeer::DATE_RETURN, $this->date_return);
		if ($this->isColumnModified(VisitorsPeer::JHXS)) $criteria->add(VisitorsPeer::JHXS, $this->jhxs);
		if ($this->isColumnModified(VisitorsPeer::JHS)) $criteria->add(VisitorsPeer::JHS, $this->jhs);
		if ($this->isColumnModified(VisitorsPeer::JHM)) $criteria->add(VisitorsPeer::JHM, $this->jhm);
		if ($this->isColumnModified(VisitorsPeer::JHL)) $criteria->add(VisitorsPeer::JHL, $this->jhl);
		if ($this->isColumnModified(VisitorsPeer::JHXL)) $criteria->add(VisitorsPeer::JHXL, $this->jhxl);
		if ($this->isColumnModified(VisitorsPeer::JHXXL)) $criteria->add(VisitorsPeer::JHXXL, $this->jhxxl);
		if ($this->isColumnModified(VisitorsPeer::JHXXXL)) $criteria->add(VisitorsPeer::JHXXXL, $this->jhxxxl);
		if ($this->isColumnModified(VisitorsPeer::JXS)) $criteria->add(VisitorsPeer::JXS, $this->jxs);
		if ($this->isColumnModified(VisitorsPeer::JS)) $criteria->add(VisitorsPeer::JS, $this->js);
		if ($this->isColumnModified(VisitorsPeer::JM)) $criteria->add(VisitorsPeer::JM, $this->jm);
		if ($this->isColumnModified(VisitorsPeer::JL)) $criteria->add(VisitorsPeer::JL, $this->jl);
		if ($this->isColumnModified(VisitorsPeer::JXL)) $criteria->add(VisitorsPeer::JXL, $this->jxl);
		if ($this->isColumnModified(VisitorsPeer::JXXL)) $criteria->add(VisitorsPeer::JXXL, $this->jxxl);
		if ($this->isColumnModified(VisitorsPeer::JXXXL)) $criteria->add(VisitorsPeer::JXXXL, $this->jxxxl);
		if ($this->isColumnModified(VisitorsPeer::BXS)) $criteria->add(VisitorsPeer::BXS, $this->bxs);
		if ($this->isColumnModified(VisitorsPeer::BS)) $criteria->add(VisitorsPeer::BS, $this->bs);
		if ($this->isColumnModified(VisitorsPeer::BM)) $criteria->add(VisitorsPeer::BM, $this->bm);
		if ($this->isColumnModified(VisitorsPeer::BL)) $criteria->add(VisitorsPeer::BL, $this->bl);
		if ($this->isColumnModified(VisitorsPeer::BXL)) $criteria->add(VisitorsPeer::BXL, $this->bxl);
		if ($this->isColumnModified(VisitorsPeer::BXXL)) $criteria->add(VisitorsPeer::BXXL, $this->bxxl);
		if ($this->isColumnModified(VisitorsPeer::BXXXL)) $criteria->add(VisitorsPeer::BXXXL, $this->bxxxl);
		if ($this->isColumnModified(VisitorsPeer::HL)) $criteria->add(VisitorsPeer::HL, $this->hl);
		if ($this->isColumnModified(VisitorsPeer::H2L)) $criteria->add(VisitorsPeer::H2L, $this->h2l);
		if ($this->isColumnModified(VisitorsPeer::H3L)) $criteria->add(VisitorsPeer::H3L, $this->h3l);
		if ($this->isColumnModified(VisitorsPeer::LXS)) $criteria->add(VisitorsPeer::LXS, $this->lxs);
		if ($this->isColumnModified(VisitorsPeer::LS)) $criteria->add(VisitorsPeer::LS, $this->ls);
		if ($this->isColumnModified(VisitorsPeer::LM)) $criteria->add(VisitorsPeer::LM, $this->lm);
		if ($this->isColumnModified(VisitorsPeer::LL)) $criteria->add(VisitorsPeer::LL, $this->ll);
		if ($this->isColumnModified(VisitorsPeer::LXL)) $criteria->add(VisitorsPeer::LXL, $this->lxl);
		if ($this->isColumnModified(VisitorsPeer::LXXL)) $criteria->add(VisitorsPeer::LXXL, $this->lxxl);
		if ($this->isColumnModified(VisitorsPeer::LXXXL)) $criteria->add(VisitorsPeer::LXXXL, $this->lxxxl);
		if ($this->isColumnModified(VisitorsPeer::S24)) $criteria->add(VisitorsPeer::S24, $this->s24);
		if ($this->isColumnModified(VisitorsPeer::S25)) $criteria->add(VisitorsPeer::S25, $this->s25);
		if ($this->isColumnModified(VisitorsPeer::S26)) $criteria->add(VisitorsPeer::S26, $this->s26);
		if ($this->isColumnModified(VisitorsPeer::S27)) $criteria->add(VisitorsPeer::S27, $this->s27);
		if ($this->isColumnModified(VisitorsPeer::S28)) $criteria->add(VisitorsPeer::S28, $this->s28);
		if ($this->isColumnModified(VisitorsPeer::S29)) $criteria->add(VisitorsPeer::S29, $this->s29);
		if ($this->isColumnModified(VisitorsPeer::S30)) $criteria->add(VisitorsPeer::S30, $this->s30);
		if ($this->isColumnModified(VisitorsPeer::SS24)) $criteria->add(VisitorsPeer::SS24, $this->ss24);
		if ($this->isColumnModified(VisitorsPeer::SS25)) $criteria->add(VisitorsPeer::SS25, $this->ss25);
		if ($this->isColumnModified(VisitorsPeer::SS26)) $criteria->add(VisitorsPeer::SS26, $this->ss26);
		if ($this->isColumnModified(VisitorsPeer::SS27)) $criteria->add(VisitorsPeer::SS27, $this->ss27);
		if ($this->isColumnModified(VisitorsPeer::SS28)) $criteria->add(VisitorsPeer::SS28, $this->ss28);
		if ($this->isColumnModified(VisitorsPeer::SS29)) $criteria->add(VisitorsPeer::SS29, $this->ss29);
		if ($this->isColumnModified(VisitorsPeer::SS30)) $criteria->add(VisitorsPeer::SS30, $this->ss30);
		if ($this->isColumnModified(VisitorsPeer::REQUESTED)) $criteria->add(VisitorsPeer::REQUESTED, $this->requested);
		if ($this->isColumnModified(VisitorsPeer::COMPLETED_DATE)) $criteria->add(VisitorsPeer::COMPLETED_DATE, $this->completed_date);
		if ($this->isColumnModified(VisitorsPeer::CUSTOMER)) $criteria->add(VisitorsPeer::CUSTOMER, $this->customer);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(VisitorsPeer::DATABASE_NAME);

		$criteria->add(VisitorsPeer::ID, $this->id);

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

		$copyObj->setUserName($this->user_name);

		$copyObj->setEmail($this->email);

		$copyObj->setDepartment($this->department);

		$copyObj->setDateDeliver($this->date_deliver);

		$copyObj->setDateReturn($this->date_return);

		$copyObj->setJhxs($this->jhxs);

		$copyObj->setJhs($this->jhs);

		$copyObj->setJhm($this->jhm);

		$copyObj->setJhl($this->jhl);

		$copyObj->setJhxl($this->jhxl);

		$copyObj->setJhxxl($this->jhxxl);

		$copyObj->setJhxxxl($this->jhxxxl);

		$copyObj->setJxs($this->jxs);

		$copyObj->setJs($this->js);

		$copyObj->setJm($this->jm);

		$copyObj->setJl($this->jl);

		$copyObj->setJxl($this->jxl);

		$copyObj->setJxxl($this->jxxl);

		$copyObj->setJxxxl($this->jxxxl);

		$copyObj->setBxs($this->bxs);

		$copyObj->setBs($this->bs);

		$copyObj->setBm($this->bm);

		$copyObj->setBl($this->bl);

		$copyObj->setBxl($this->bxl);

		$copyObj->setBxxl($this->bxxl);

		$copyObj->setBxxxl($this->bxxxl);

		$copyObj->setHl($this->hl);

		$copyObj->setH2l($this->h2l);

		$copyObj->setH3l($this->h3l);

		$copyObj->setLxs($this->lxs);

		$copyObj->setLs($this->ls);

		$copyObj->setLm($this->lm);

		$copyObj->setLl($this->ll);

		$copyObj->setLxl($this->lxl);

		$copyObj->setLxxl($this->lxxl);

		$copyObj->setLxxxl($this->lxxxl);

		$copyObj->setS24($this->s24);

		$copyObj->setS25($this->s25);

		$copyObj->setS26($this->s26);

		$copyObj->setS27($this->s27);

		$copyObj->setS28($this->s28);

		$copyObj->setS29($this->s29);

		$copyObj->setS30($this->s30);

		$copyObj->setSs24($this->ss24);

		$copyObj->setSs25($this->ss25);

		$copyObj->setSs26($this->ss26);

		$copyObj->setSs27($this->ss27);

		$copyObj->setSs28($this->ss28);

		$copyObj->setSs29($this->ss29);

		$copyObj->setSs30($this->ss30);

		$copyObj->setRequested($this->requested);

		$copyObj->setCompletedDate($this->completed_date);

		$copyObj->setCustomer($this->customer);


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
			self::$peer = new VisitorsPeer();
		}
		return self::$peer;
	}

} 