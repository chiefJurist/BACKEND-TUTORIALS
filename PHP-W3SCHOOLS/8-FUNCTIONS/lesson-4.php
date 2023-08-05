<?php declare(strict_types=1);
    //Return Type Declarations
    function addNumbers2(float $a, float $b) : float{
        return $a + $b;
    }

    echo addNumbers2(1.25, 5.2);

    /*function addNumbers3(float $a, float $b) : int{
        return $a + $b;
    }

    echo addNumbers3(1.25, 5.2);*/
    //The above will generate an error
?>