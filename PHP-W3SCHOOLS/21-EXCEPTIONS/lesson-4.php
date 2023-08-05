<?php
    //Exception objects with parameters and methods
    function divide($dividend, $divisor){
        if ($divisor == 0) {
            throw new Exception("Division by zero ", 1);
        }
        return $dividend/$divisor;
    }

    try {
        echo divide(5, 0);
    } catch (Exception $ex) {
       $code = $ex->getCode();
       $message = $ex->getMessage();
       $file = $ex->getFile();
       $line = $ex->getLine();

       echo "Exception was thrown in $file on line $line : [code $code] $message" ;
    }
?>