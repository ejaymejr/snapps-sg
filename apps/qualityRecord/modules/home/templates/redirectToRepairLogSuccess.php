<?php
	use_helper('Validation', 'Javascript');
	echo javascript_tag('
		window.open("http://app.micronclean/micronclean/qualityRecord/machine/processEventLogSearch", "_blank", "");
		');
?>

<div class="alignCenter">
<?php
echo image_tag('quality.jpg');
?>
</div>