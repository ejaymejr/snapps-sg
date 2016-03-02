<?php
// $Source$
// $Id$

$searchTemplate = isset($searchTemplate) ? $searchTemplate : 'list_header_search';
$pagerTemplate = isset($pagerTemplate) ? $pagerTemplate : 'list_pager';
$headerTemplate = isset($headerTemplate) ? $headerTemplate : 'global/datagrid/header';

?>
<div id="DIVdataGridContainerCategory" class="defaultGrid dataGridContainer " style="width:100%">
    <div class="dataGridContent LightHeader">    
    <form name="" action="" method="get">
    <?php echo input_hidden_tag('sortBy', $sf_params->get('sortBy')) ?>
    <?php echo input_hidden_tag('sortOrder', $sf_params->get('sortOrder')) ?>
    
    <table class="dataGridTable" style="width:100%;" cellpadding="4" cellspacing="2" border="0">
    <?php if ($headerTemplate) include_partial($headerTemplate, array('hs' => $headers, 'headerBaseURL' => url_for($baseURL), 'searchContainerID' => $searchContainerID)) ?>
    <?php if ($searchTemplate) include_partial($searchTemplate, array('searchContainerID' => $searchContainerID)) ?>
    <?php if ($pagerTemplate) include_partial($pagerTemplate, array('pager' => $pager)) ?>
    </table>
    </form>
    </div>     
    <div class="dataGridHeader">
    <div class="dataGridPagination">    
    <?php echo pager_navigation($pager, $baseURL, array('query_string' => $_SERVER['QUERY_STRING'])); ?>
    </div>
    Total: <?php echo $pager->getNbResults(); ?> record(s)</div>
</div>

