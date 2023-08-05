<?php
    //Using Callbacks in user defined functions
    function exclaim($str){
        return $str . '!';
    }

    function ask($str){
        return $str . "?";
    }

    function printFormatted($str, $format){
        echo $format($str);
    }

    printFormatted('Hello world', 'exclaim');
    echo '<br>';
    printFormatted('Hello world', 'ask');
?>