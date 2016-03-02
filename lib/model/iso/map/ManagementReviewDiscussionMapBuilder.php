<?php



class ManagementReviewDiscussionMapBuilder {

	
	const CLASS_NAME = 'lib.model.iso.map.ManagementReviewDiscussionMapBuilder';

	
	private $dbMap;

	
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap('iso');

		$tMap = $this->dbMap->addTable('management_review_discussion');
		$tMap->setPhpName('ManagementReviewDiscussion');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('MANAGEMENT_REVIEW_ID', 'ManagementReviewId', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('DISCUSSION', 'Discussion', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('PROP_ACTION', 'PropAction', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('ACTION_DATE', 'ActionDate', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('INDEX_NO', 'IndexNo', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('DATE_CREATED', 'DateCreated', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('CREATED_BY', 'CreatedBy', 'string', CreoleTypes::VARCHAR, false, 45);

		$tMap->addColumn('DATE_MODIFIED', 'DateModified', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('MODIFIED_BY', 'ModifiedBy', 'string', CreoleTypes::VARCHAR, false, 45);

	} 
} 