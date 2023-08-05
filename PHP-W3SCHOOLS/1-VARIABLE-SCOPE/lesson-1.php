<?php 
    $x = 5;
    $y = 10;
    function myTest(){
        $GLOBALS["y"] = $GLOBALS["x"] + $GLOBALS["y"];
    }

    echo $y . "<br>";

    myTest();

    echo $y;
?>
