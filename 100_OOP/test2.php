<?php

    class Ctest{
        public $Price = 100;
        private $databag;

        public function __set($k = 2, $v = 5){
            echo "__set is running . $k   $v <br>";
            $databag[$k] = $v;
        }

        public function __get($k = 2){
            echo "__get is called . <br>";
            return $this ->databag[$k];
        }
    }


    $obj = new Ctest();
    echo $obj -> Price, "<br>";
    echo $obj ->Location = "Taichung<br>";
    echo $obj ->Location, "<br>"

?>