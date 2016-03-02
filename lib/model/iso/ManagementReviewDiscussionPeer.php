<?php

/**
 * Subclass for performing query and update operations on the 'management_review_discussion' table.
 *
 * 
 *
 * @package lib.model.iso
 */ 
class ManagementReviewDiscussionPeer extends BaseManagementReviewDiscussionPeer
{
	public static function GetDataByManagementReviewID($mgtReviewID)
	{
		$c = new Criteria();
		$c->add(self::MANAGEMENT_REVIEW_ID, $mgtReviewID);
		$c->addAscendingOrderByColumn(self::INDEX_NO);
		$rs = self::doSelect($c);
		return $rs;	
	}
	
	public static function GetDataByID($id)
	{
		$c = new Criteria();
		$c->add(self::ID, $id);
		$rs = self::doSelectOne($c);
		return $rs;
	}
}
