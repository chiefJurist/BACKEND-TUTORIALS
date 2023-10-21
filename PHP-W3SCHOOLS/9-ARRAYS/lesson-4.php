<?php
    //ARRAY SORTING
    $age = array('Peter'=>'35', 'Ben'=>'30', 'Joe'=>'43');
    $cars = array("Volvo", "BMW", "Toyota");


    print_r($cars);
    echo '<br>';
    print_r($age);
    echo '<br><br>';

    sort($age);//Sorts indexed arrays in ascending order
    sort($cars);
    print_r($age);
    echo '<br>';
    print_r($cars);
    echo '<br><br>';

    $age = array('Peter'=>'35', 'Ben'=>'30', 'Joe'=>'43');
    $cars = array("Volvo", "BMW", "Toyota");
    rsort($age);//Sorts indexed arrays in descending order
    rsort($cars);
    print_r($age);
    echo '<br>';
    print_r($cars);
    echo '<br><br>';

    $age = array('Peter'=>'35', 'Ben'=>'30', 'Joe'=>'43');
    $cars = array("Volvo", "BMW", "Toyota");
    asort($age);//Sorts asssociative arrays in ascending order according to the values
    asort($cars);
    print_r($age);
    echo '<br>';
    print_r($cars);
    echo '<br><br>';

    $age = array('Peter'=>'35', 'Ben'=>'30', 'Joe'=>'43');
    $cars = array("Volvo", "BMW", "Toyota");
    ksort($age);//Sorts asssociative arrays in ascending order according to the keys
    ksort($cars);
    print_r($age);
    echo '<br>';
    print_r($cars);
    echo '<br><br>';

    $age = array('Peter'=>'35', 'Ben'=>'30', 'Joe'=>'43');
    $cars = array("Volvo", "BMW", "Toyota");
    arsort($age);//Sorts asssociative arrays in descending order according to the values
    arsort($cars);
    print_r($age);
    echo '<br>';
    print_r($cars);
    echo '<br><br>';

    $age = array('Peter'=>'35', 'Ben'=>'30', 'Joe'=>'43');
    $cars = array("Volvo", "BMW", "Toyota");
    krsort($age);//Sorts asssociative arrays in ascending order according to the keys
    krsort($cars);
    print_r($age);
    echo '<br>';
    print_r($cars);
    echo '<br><br>';
?>