<?php
    $x = 100 ;
    function foo(){ //只能用自己的變數
        global $x; // 取得全域變數
        global $y; // 把$y變成全域變數
        if(isset($x) ){
            echo $x;
        }
        else{
            echo '$x not exists';
        }
    }

    foo();
?>