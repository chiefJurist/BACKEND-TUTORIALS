<?php
    //Exception with try...catch...finally
    function divide($dividend, $divisor){
        if ($divisor == 0) {
            throw new Exception("Division by zero ");
        }
        return $dividend/$divisor;
    }

    try {
        echo divide(5, 0);
    } catch (Exception $ex) {
        echo "Unable to divide <br>";
    } finally{
        echo "Process complete";
    }
?>