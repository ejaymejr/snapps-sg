<?php
// $Source$
// $Id$



?>

	
	<div class="div-clear"></div>

	</div>
	<div id="menu-bottom">	
	</div>
	<div id="footer">
    <?php echo DateUtils::DuDate('l, d M Y'); ?>
	</div>
</div>
</div>
</body>
</html>


<?php 
$isDebug = false;

if ($isDebug) {
    echo '<pre>';
    if (isset($currentLogin)) var_dump($currentLogin); 
    if (isset($_SESSION)) var_dump($_SESSION); 
    if (isset($_GET)) var_dump($_GET); 
    if (isset($_POST)) var_dump($_POST); 
    if (isset($project)) var_dump($project);
    if (isset($receiving)) var_dump($receiving);
    if (isset($shipment)) var_dump($shipment);
    echo '</pre>';
}
?>