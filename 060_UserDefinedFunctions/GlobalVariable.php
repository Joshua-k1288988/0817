<?php
$a = 20;
function myFunction($b) {
	//echo "a = $a<br>";
	$a = 30;
	//echo "a = $a<br>";
	global $a, $c;  // a= 20
	//echo "a = $a<br>";
	return $c = ($b + $a); // c = 40 + 20 = 60
}
// 請預測答案是多少?
echo myFunction(40) + $c; // 60 + 60
?>