<?php
    echo PHP_FLOAT_MAX; //The largest floating number supported
    echo "<br>";
    echo PHP_FLOAT_MIN; //The smallest floating number supported
    echo "<br>";
    echo PHP_FLOAT_DIG; //The number of decimal that can be rounded into a float and back without precision loss
    echo "<br>";
    echo PHP_FLOAT_EPSILON; //The smalllest representable positive number x, so that x+1.0 !=1.0
    echo "<br>";

    $x = 10.365;
    $y = 10;
    $z = 2 * 4.5;

    var_dump(is_float($x)); //Checking if the variable is a float
    echo "<br>";
    var_dump(is_float($y));
    echo "<br>";
    var_dump(is_float($z));
    echo "<br>";
    var_dump(is_double($x)); //Alias of is_float()
    echo "<br>";
    var_dump(is_double($y));
    echo "<br>";
    var_dump(is_double($z));
    echo "<br>";
?>