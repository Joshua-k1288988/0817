<?php

function test10($i) {
	return $i + 10;
}
function test100($i) {
	return $i + 100;
}
// $x = 1;
// echo test($x);

$x = 2;
$p = "test100";
echo $p($x);

?>