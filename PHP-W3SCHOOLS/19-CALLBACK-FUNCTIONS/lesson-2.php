<?php
    //Using an anonymous function
    $strings = ['apple', 'orange', 'banana', 'coconut'];

    $lengths = array_map(function ($item){return strlen($item);}, $strings);
    print_r($lengths);
?>