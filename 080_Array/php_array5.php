<?php
header("content-type: text/html; charset=utf-8");

$season = array('01' => '春', '夏', '03' => '秋', '冬'); 

echo "每年的四季分別為：";
foreach ($season as $key => $value){
	echo "<br>" .  $key . "				" . $value;
}

?>