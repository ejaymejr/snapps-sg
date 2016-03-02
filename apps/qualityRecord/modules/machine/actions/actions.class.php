<?php

/**
 * machine actions.
 *
 * @package    qualityRecords
 * @subpackage machine
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class machineActions extends SnappsActions
{
	/**
	 * Executes index action
	 *
	 */
	public function executeIndex()
	{
		//$this->forward('default', 'module');
		$this->redirect('machine/daily1232Search');
	}

	public function executeHeatSealerPmSearch()
	{
		sfConfig::set('app_page_heading', '<span class="alignCenter"><h2>MICRONCLEAN HEAT SEALER PREVENTIVE MAINTENANCE SCHEDULE</h2></span>');
		$c = new Criteria();
		$c->addDescendingOrderByColumn(HeatSealerPmPeer::TRANS_DATE);
		$c->addDescendingOrderByColumn(HeatSealerPmPeer::DATE_MODIFIED);
		$this->pager = HeatSealerPmPeer::GetPager($c);
	
	}

	public function executeHeatSealerPmEdit()
	{
		$id = $this->_G('id');
		$rec = HeatSealerPmPeer::retrieveByPK($id);
		if ($rec){
			$this->_S('trans_date', $rec->getTransDate());
			$this->_S('machine_type', $rec->getMachineType());
			$this->_S('air_regulator', $rec->getAirRegulator());
			$this->_S('heat', $rec->getHeat());
			$this->_S('thermopatch', $rec->getThermopatch());
			$this->_S('dwell', $rec->getDwell());
			$this->_S('piston', $rec->getPiston());
			$this->_S('performed_by', $rec->getPerformedBy());
			$this->_S('verified_by', $rec->getVerifiedBy());
			$this->_S('verify_date', $rec->getVerifyDate());
			$this->_S('remark', $rec->getRemark());
		}
		$this->setTemplate('heatSealerpmAdd');
	}
	
	public function executeHeatSealerPmDelete()
	{
		$id = $this->_G('id');
		$this->record = HeatSealerPmPeer::retrieveByPK($id);
		$rec = $this->record->getTransDate().'('.$this->record->getMachineType().')';
		$this->record->delete();
		$this->_SUF($rec.' has been deleted successfuly.');
		$this->redirect('machine/heatSealerPmSearch');
	}
	
	public function executeDryerPmSearch()
	{
		sfConfig::set('app_page_heading', '<span class="alignCenter"><h2>MICRONCLEAN DRYER PREVENTIVE MAINTENANCE SCHEDULE</h2></span>');
		$c = new Criteria();
		$c->addDescendingOrderByColumn(DryerPmPeer::TRANS_DATE);
		$c->addDescendingOrderByColumn(DryerPmPeer::DATE_MODIFIED);
		$this->pager = DryerPmPeer::GetPager($c);
		
	}
	public function executeDryerPmEdit()
	{
		$id = $this->_G('id');
		$rec = DryerPmPeer::retrieveByPK($id);
		if ($rec){
			$this->_S('trans_date', $rec->getTransDate());
			$this->_S('machine_type', $rec->getMachineType());
			$this->_S('clean_machine', $rec->getCleanMachine());
			$this->_S('cage_shaft', $rec->getCageShaft());
			$this->_S('fan_bearing', $rec->getFanBearing());
			$this->_S('fan_shaft', $rec->getFanShaft());
			$this->_S('fan_motor', $rec->getFanMotor());
			$this->_S('cage_motor', $rec->getCageMotor());
			$this->_S('temp_control', $rec->getTempControl());
			$this->_S('temp_verify', $rec->getTempVerify());
			$this->_S('performed_by', $rec->getPerformedBy());
			$this->_S('verified_by', $rec->getVerifiedBy());
			$this->_S('verify_date', $rec->getVerifyDate());
			$this->_S('remark', $rec->getRemark());
		}
		$this->setTemplate('dryerpmAdd');
	}	
	public function executeDryerPmDelete()
	{
		$id = $this->_G('id');
		$this->record = DryerPmPeer::retrieveByPK($id);
		$rec = $this->record->getTransDate().'('.$this->record->getMachineType().')';
		$this->record->delete();
		$this->_SUF($rec.' has been deleted successfuly.');
		$this->redirect('machine/dryerPmSearch');
	}
	
	
	public function executeWasherPmSearch()
	{
		sfConfig::set('app_page_heading', '<span class="alignCenter"><h2>MICRONCLEAN WASHER PREVENTIVE MAINTENANCE SCHEDULE</h2></span>');
		$c = new Criteria();
		$c->addDescendingOrderByColumn(WasherPmPeer::TRANS_DATE);
		$c->addDescendingOrderByColumn(WasherPmPeer::DATE_MODIFIED);
		$this->pager = WasherPmPeer::GetPager($c);
	}
	
	public function executeWasherPmEdit()
	{
		$id = $this->_G('id');
		$rec = WasherPmPeer::retrieveByPK($id);
		if ($rec){
			$this->_S('trans_date', $rec->getTransDate());
			$this->_S('machine_type', $rec->getMachineType());
			$this->_S('clean_machine', $rec->getCleanMachine());
			$this->_S('purged_water', $rec->getPurgedWater());
			$this->_S('clean_door', $rec->getCleanDoor());
			$this->_S('check_belt', $rec->getCheckBelt());
			$this->_S('check_hose', $rec->getCheckHose());
			$this->_S('lubricate_bearings', $rec->getLubricateBearings());
			$this->_S('check_sensory', $rec->getCheckSensory() );
			$this->_S('check_brake', $rec->getCheckBrake());
			$this->_S('temp_control', $rec->getTempControl());
			$this->_S('temp_verify', $rec->getTempVerify());
			$this->_S('performed_by', $rec->getPerformedBy());
			$this->_S('verify_date', $rec->getVerifyDate());
			$this->_S('verified_by', $rec->getVerifiedBy());
			$this->_S('remark', $rec->getRemark());
		}
		$this->setTemplate('washerpmAdd');
	}
	
	public function executeWasherPmDelete()
	{
		$id = $this->_G('id');
		$this->record = WasherPmPeer::retrieveByPK($id);
		$rec = $this->record->getTransDate().'('.$this->record->getMachineType().')';
		$this->record->delete();
		$this->_SUF($rec.' has been deleted successfuly.');
		$this->redirect('machine/washerPmSearch');
	}
	
	public function executeDaily1232Search()
	{
		sfConfig::set('app_page_heading', '<span class="alignCenter"><h2>NANOCLEAN PREVENTIVE MAINTENANCE SCHEDULE</h2></span>');
		$c = new Pms1232abCriteria();
		$this->pager = Pms1232abPeer::GetPager($c);
	}

	public function executeDaily1232Edit()
	{
		$id = $this->_G('id');
		$rec = Pms1232abPeer::retrieveByPK($id);
		if ($rec){
			$this->_S('trans_date', $rec->getTransDate());
			$this->_S('machine_no', $rec->getMachineNo());
			$this->_S('wash_flow_rate', $rec->getWashFlowRate());
			$this->_S('rinse_flow_rate', $rec->getRinseFlowRate());
			$this->_S('cham_1', $rec->getCham1());
			$this->_S('cham_2', $rec->getCham2());
			$this->_S('panel_inspect', $rec->getPanelInspect());
			$this->_S('exit_inspect', $rec->getExitInspect());
			$this->_S('switch_control', $rec->getSwitchControl() );
			$this->_S('initial', $rec->getInitial());
			$this->_S('remark', $rec->getRemark());
		}
		$this->setTemplate('pms1232DailyAdd');
	}

    public function executeDaily1232Delete()
    {
        $id = $this->_G('id');
        $this->record = Pms1232abPeer::retrieveByPK($id);
        $rec = $this->record->getTransDate().'('.$this->record->getMachineNo().')';
        $this->record->delete();
        $this->_SUF($rec.' has been deleted successfuly.');
        $this->redirect('machine/daily1232Search');
    } 	
    
	public function executeWeekly1232Search()
	{
		sfConfig::set('app_page_heading', '<span class="alignCenter"><h2>NANOCLEAN PREVENTIVE MAINTENANCE SCHEDULE</h2></span>');
		$c = new Pms1232abWeeklyCriteria();
		$this->pager = Pms1232abWeeklyPeer::GetPager($c);
	}    
	
	public function executeWeekly1232Edit()
	{
		$id = $this->_G('id');
		$rec = Pms1232abWeeklyPeer::retrieveByPK($id);
		if ($rec){
			$this->_S('trans_date', $rec->getTransDate());
			$this->_S('machine_no', $rec->getMachineNo());
			$this->_S('sensor_diagnostic', $rec->getSensorDiagnostic());
			$this->_S('chamber_temp', $rec->getChamberTemp());
			$this->_S('actuator_diagnostic', $rec->getActuatorDiagnostic());
			$this->_S('basket_inspect', $rec->getBasketInspect());
			$this->_S('chamber_clean', $rec->getChamberClean());
			$this->_S('nozzle_inspect', $rec->getNozzleInspect());
			$this->_S('plumbing_inspect', $rec->getPlumbingInspect() );
			$this->_S('drive_roller', $rec->getDriveRoller() );
			$this->_S('drive_belt', $rec->getDriveBelt() );
			$this->_S('chain_tention', $rec->getChainTention() );
			$this->_S('initial', $rec->getInitial());
			$this->_S('remark', $rec->getRemark());
		}
		$this->setTemplate('pms1232WeeklyAdd');
	}

    public function executeWeekly1232Delete()
    {
        $id = $this->_G('id');
        $this->record = Pms1232abWeeklyPeer::retrieveByPK($id);
        $rec = $this->record->getTransDate().'('.$this->record->getMachineNo().')';
        $this->record->delete();
        $this->_SUF($rec.' has been deleted successfuly.');
        $this->redirect('machine/weekly1232Search');
    } 

	public function executeMonthly1232Search()
	{
		sfConfig::set('app_page_heading', '<span class="alignCenter"><h2>NANOCLEAN PREVENTIVE MAINTENANCE SCHEDULE</h2></span>');
		$c = new Pms1232abMonthlyCriteria();
		$this->pager = Pms1232abMonthlyPeer::GetPager($c);
	}     
    
	public function executeMonthly1232Edit()
	{
		$id = $this->_G('id');
		$rec = Pms1232abMonthlyPeer::retrieveByPK($id);
		if ($rec){
			$this->_S('trans_date', $rec->getTransDate());
			$this->_S('machine_no', $rec->getMachineNo());
			$this->_S('drain_system', $rec->getDrainSystem());
			$this->_S('electrical_system', $rec->getElectricalSystem());
			$this->_S('hoses_connectors', $rec->getHosesConnectors());
			$this->_S('initial', $rec->getInitial());
			$this->_S('remark', $rec->getRemark());
		}
		$this->setTemplate('pms1232MonthlyAdd');
	}	
    
    public function executeMonthly1232Delete()
    {
        $id = $this->_G('id');
        $this->record = Pms1232abMonthlyPeer::retrieveByPK($id);
        $rec = $this->record->getTransDate().'('.$this->record->getMachineNo().')';
        $this->record->delete();
        $this->_SUF($rec.' has been deleted successfuly.');
        $this->redirect('machine/monthly1232Search');
    }    
    
	public function executeQuarterly1232Search()
	{
		sfConfig::set('app_page_heading', '<span class="alignCenter"><h2>NANOCLEAN PREVENTIVE MAINTENANCE SCHEDULE</h2></span>');
		$c = new Pms1232abQuarterlyCriteria();
		$this->pager = Pms1232abQuarterlyPeer::GetPager($c);
	}

	public function executeQuarterly1232Edit()
	{
		$id = $this->_G('id');
		$rec = Pms1232abQuarterlyPeer::retrieveByPK($id);
		if ($rec){
			$this->_S('trans_date', $rec->getTransDate());
			$this->_S('machine_no', $rec->getMachineNo());
			$this->_S('quarter', $rec->getQuarter());
			$this->_S('date_completed', $rec->getDateCompleted());
			$this->_S('due_date', $rec->getDueDate());
			$this->_S('cda_filter', $rec->getCdaFilter());
			$this->_S('di_water_filter', $rec->getDiWaterFilter());
			$this->_S('initial', $rec->getInitial());
			$this->_S('remark', $rec->getRemark());
		}
		$this->setTemplate('pms1232QuarterlyAdd');
	}	
    
	
    public function executeQuarterly1232Delete()
    {
        $id = $this->_G('id');
        $this->record = Pms1232abQuarterlyPeer::retrieveByPK($id);
        $rec = $this->record->getTransDate().'('.$this->record->getMachineNo().')';
        $this->record->delete();
        $this->_SUF($rec.' has been deleted successfuly.');
        $this->redirect('machine/quarterly1232Search');
    }  	
    
	public function executeDaily6252Search()
	{
		sfConfig::set('app_page_heading', '<span class="alignCenter"><h2>NANOCLEAN PREVENTIVE MAINTENANCE SCHEDULE</h2></span>');
		$c = new Pms6252Criteria();
		$this->pager = Pms6252Peer::GetPager($c);
	}    
    
	public function executeDaily6252Edit()
	{
		$id = $this->_G('id');
		$rec = Pms6252Peer::retrieveByPK($id);
		if ($rec){
			$this->_S('trans_date', $rec->getTransDate());
			$this->_S('machine_no', $rec->getMachineNo());
			$this->_S('cda_di_water', $rec->getCdaDiWater());
			$this->_S('pre_inspect', $rec->getPreInspect());
			$this->_S('fluid_leak', $rec->getFluidLeak());
			$this->_S('panel_inspect', $rec->getPanelInspect());
			$this->_S('exit_inspect', $rec->getExitInspect());
			$this->_S('switch_control', $rec->getSwitchControl() );
			$this->_S('initial', $rec->getInitial());
			$this->_S('remark', $rec->getRemark());
		}
		$this->setTemplate('pms6252DailyAdd');
	}

    public function executeDaily6252Delete()
    {
        $id = $this->_G('id');
        $this->record = Pms6252Peer::retrieveByPK($id);
        $rec = $this->record->getTransDate().'('.$this->record->getMachineNo().')';
        $this->record->delete();
        $this->_SUF($rec.' has been deleted successfuly.');
        $this->redirect('machine/daily6252Search');
    } 	
	
    
	public function executeWeekly6252Search()
	{
		sfConfig::set('app_page_heading', '<span class="alignCenter"><h2>NANOCLEAN PREVENTIVE MAINTENANCE SCHEDULE</h2></span>');
		$c = new Pms6252WeeklyCriteria();
		$this->pager = Pms6252WeeklyPeer::GetPager($c);
	}     
    
	public function executeWeekly6252Edit()
	{
		$id = $this->_G('id');
		$rec = Pms6252WeeklyPeer::retrieveByPK($id);
		if ($rec){
			$this->_S('trans_date', $rec->getTransDate());
			$this->_S('machine_no', $rec->getMachineNo());
			$this->_S('sensor_diagnostic', $rec->getSensorDiagnostic());
			$this->_S('actuator_diagnostic', $rec->getActuatorDiagnostic());
			$this->_S('basket_inspect', $rec->getBasketInspect());
			$this->_S('chamber_clean', $rec->getChamberClean());
			$this->_S('nozzle_inspect', $rec->getNozzleInspect());
			$this->_S('plumbing_inspect', $rec->getPlumbingInspect() );
			$this->_S('drive_roller', $rec->getDriveRoller() );
			$this->_S('drive_belt', $rec->getDriveBelt() );
			$this->_S('chain_tention', $rec->getChainTention() );
			$this->_S('initial', $rec->getInitial());
			$this->_S('remark', $rec->getRemark());
		}
		$this->setTemplate('pms6252WeeklyAdd');
	}

    public function executeWeekly6252Delete()
    {
        $id = $this->_G('id');
        $this->record = Pms6252WeeklyPeer::retrieveByPK($id);
        $rec = $this->record->getTransDate().'('.$this->record->getMachineNo().')';
        $this->record->delete();
        $this->_SUF($rec.' has been deleted successfuly.');
        $this->redirect('machine/weekly6252Search');
    }    
    
    
	public function executeDoseCalibrationSearch()
	{
		sfConfig::set('app_page_heading', '<span class="alignCenter"><h2>NANOCLEAN PREVENTIVE MAINTENANCE SCHEDULE</h2></span>');
		$c = new DosingCalibrationCriteria();
		$this->pager = DosingCalibrationPeer::GetPager($c);
	}    
    
	public function executeDoseCalibrationEdit()
	{
		$id = $this->_G('id');
		$rec = DosingCalibrationPeer::retrieveByPK($id);
		if ($rec){
			$this->_S('trans_date', $rec->getTransDate());
			$this->_S('machine_no', $rec->getMachineNo());
			$this->_S('density', $rec->getDensity());
			$this->_S('pump_model', $rec->getPumpModel());
			$this->_S('eq_flow_rate', $rec->getEqFlowRate());
			$this->_S('frequency', $rec->getFrequency());
			$this->_S('flow_rate', $rec->getFlowRate());
			$this->_S('reading_time', $rec->getReadingTime());
			$this->_S('reading', $rec->getReading() );
			$this->_S('checked_by', $rec->getCheckedBy() );
			$this->_S('remark', $rec->getRemark() );
		}
		$this->setTemplate('doseCalibrationAdd');
	}

    public function executeDoseCalibrationDelete()
    {
        $id = $this->_G('id');
        $this->record = DosingCalibrationPeer::retrieveByPK($id);
        $rec = $this->record->getTransDate().'('.$this->record->getReading().')';
        $this->record->delete();
        $this->_SUF($rec.' has been deleted successfuly.');
        $this->redirect('machine/doseCalibrationSearch');
    }     
    
	public function executeMachineParameterSearch()
	{
		sfConfig::set('app_page_heading', '<span class="alignCenter"><h2>NANOCLEAN PREVENTIVE MAINTENANCE SCHEDULE</h2></span>');
		$c = new MachineParameterCriteria();
		$this->pager = MachineParameterPeer::GetPager($c);
	}     
    
	public function executeMachineParameterEdit()
	{
		$id = $this->_G('id');
		$rec = MachineParameterPeer::retrieveByPK($id);
		if ($rec){
			$this->_S('trans_date', $rec->getTransDate() .' '. $rec->getTransTime());
			$this->_S('machine_no', $rec->getMachineNo());
			$this->_S('di_water', $rec->getDiWater());
			$this->_S('cda1', $rec->getCda1());
			$this->_S('cda2', $rec->getCda2());
			$this->_S('cda_diff', $rec->getCdaDiff());
			$this->_S('sumptank', $rec->getSumptank());
			$this->_S('ultra_tank', $rec->getUltraTank());
			$this->_S('water_temp', $rec->getWaterTemp() );
			$this->_S('rinse_temp', $rec->getRinseTemp() );
			$this->_S('checked_by', $rec->getCheckedBy() );
			$this->_S('verified_by', $rec->getVerifiedBy() );
			$this->_S('remark', $rec->getRemark() );
		}
		$this->setTemplate('machineParameterAdd');
	}

    public function executeMachineParameterDelete()
    {
        $id = $this->_G('id');
        $this->record = MachineParameterPeer::retrieveByPK($id);
        $rec = $this->record->getTransDate().'('.$this->record->getMachineNo().')';
        $this->record->delete();
        $this->_SUF($rec.' has been deleted successfuly.');
        $this->redirect('machine/machineParameterSearch');
    }         
    
    
    
    
}
