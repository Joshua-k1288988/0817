<?php
    $x = 101;
    $y = &$x;

    $y = 200;

    echo "x = $x<br>";
    echo "y = $y<br>";

    echo '<hr>';
    
    unset($x);
    echo "y = $y<br>";
    echo "x = $x<br>";
?>
    