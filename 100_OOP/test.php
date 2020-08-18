<?php

class animal{
    public $weight = 12;
    function makenoice() {
        echo "Animal : ... <br>";
    }
    public function __construct($weightValule = 1){
        $this ->weight = $weightValule;
        echo "Object created.<br>";
    }
}

echo "Flag 1<br>";
$obj = new animal();
echo "Flag 2<br>";
$obj -> makenoice();
$obj2 = $obj;
$obj = null;

echo "Flag 3<br>";
$obj2 = null;
echo "Flag 4<br>";

// $obj  = new animal();
// $obj -> makenoice();
// $obj -> weight = 20;
// echo $obj->weight , "<br>";
// echo $obj ->location = "*";

?>