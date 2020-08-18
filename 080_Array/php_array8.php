<?php
	$testArray = array("A1", "A2", "A18");
	sort($testArray);
	var_dump($testArray);
	
	echo "<br /><hr>";

	
	natsort($testArray);
	var_dump($testArray);
?>
