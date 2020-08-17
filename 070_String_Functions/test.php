<?php

$s = "01234567891234";


$resule = str_replace("12", "-", $s);
echo $resule."<br>";
// $pos = strpos($s, "34");
$pos = strpos($s, "0"); // 有找到回傳位置，沒有找到回傳布林代數0
if($pos !== false){
    echo "found: $pos";
}
else{
    echo "not found";
}
 echo "<br>". gettype($pos);
?>