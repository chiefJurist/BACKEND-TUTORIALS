<?php
    function myCallback($item){
        return strlen($item);
    }

    $strings = ['apple', 'orange', 'banana', 'coconut'];

    $lengths = array_map('myCallback', $strings);
    print_r($lengths)
?>