<?php
    echo PHP_INT_MAX; //The largest integer supported
    echo "<br>";
    echo PHP_INT_MIN; //The smallest integer supported
    echo "<br>";
    echo PHP_INT_SIZE; //The size of an integer in bytes
    echo "<br>";

    $x = 10.365;
    $y = 10;
    $z = 2 * 4.5;

    echo var_dump(is_int($x)); //Checking if the variable is an integer
    echo "<br>";
    echo var_dump(is_int($y));
    echo "<br>";
    echo var_dump(is_int($z));
    echo "<br>";

    echo var_dump(is_integer($x)); //ALIAS of is_int()
    echo "<br>";
    echo var_dump(is_integer($y));
    echo "<br>";
    echo var_dump(is_integer($z));
    echo "<br>";

    echo var_dump(is_long($x)); //ALIAS of is_int()
    echo "<br>";
    echo var_dump(is_long($y));
    echo "<br>";
    echo var_dump(is_long($z));
    echo "<br>";
?>