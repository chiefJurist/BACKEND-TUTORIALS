<?php declare(strict_types=1);
    //Returning Values
    function sum(int $a, int $b){
        $c = $a + $b;
        return $c;
    }

    echo "5+10 = " .sum (5, 10) . '<br>';
    echo "7+13 = " .sum (7, 13) . '<br>';
    echo "2+4 = " .sum (2, 4) . '<br>';
?>