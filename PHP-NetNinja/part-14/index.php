<?php
    //VARIABLE SCOPE
    //Using the global keyword allows you to use a global function locally.

    $name = 'Mario';

    function sayHello(){
        //changing the variable with a global keyword locally also affects the main global variable
        global $name;
        echo "hello $name <br>";

        $name = "Yoshi";
    }
    sayHello();
    echo $name . '<br>';

    function sayBye($name){
        //changing the parameter name locally does not affect the main global variable
        echo "bye $name <br>";
        $name = 'Shaun';
        echo "bye $name <br>";
    }
    sayBye('Tony');
    sayBye($name);
    echo $name . '<br>';

    function sayWelldone(&$name){
        //changing the parameter name locally only affects the main global variable when the & (ampersant sign is used)
        echo "welldone $name <br>";
        $name = 'Shaun';
        echo "welldone $name <br>";
    }

    sayWelldone($name);
    echo $name . '<br>';