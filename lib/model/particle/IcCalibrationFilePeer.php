<?php

/**
 * Subclass for performing query and update operations on the 'ic_calibration_file' table.
 *
 * 
 *
 * @package lib.model.particle
 */ 
class IcCalibrationFilePeer extends BaseIcCalibrationFilePeer
{
	public static function getDataByIcCalibrationIDProofNumber($id, $proof)
	{
		$c = new Criteria();
		$c->add(self::IC_CALIBRATION_ID, $id);
		$c->add(self::PROOF_NUMBER, $proof);
		$rs = self::doSelectOne($c);
		return $rs? $rs->getFilename() : '';
	}
}
