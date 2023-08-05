<?php
    //Passing Arguments by Reference
    $num = 2;
    echo $num .'<br>';

    function add_five(& $value){
        $value += 5;
    }

    add_five($num);
    echo $num .'<br>';

    add_five($num);
    echo $num .'<br>';
?>