<?php
    function printIterable(iterable $myIterable){
        foreach ($myIterable as $item) {
            echo $item . '<br>';
        }
    }

    $arr = ['a', 'b', 'c'];
    $cars = ['lexus', 'BMW', 'Lambourgini', 'Bugatti', 'Rolls-Roylce'];
    printIterable($arr);
    printIterable($cars);
?>