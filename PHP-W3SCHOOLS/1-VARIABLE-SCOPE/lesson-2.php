<?php
    function myTest2(){
        static $x = 10;
        echo $x . '<br>';
        $x++;
    }
    echo myTest2();
    echo myTest2();
    echo myTest2();

    function myTest3(){
        $x = 10;
        echo $x . '<br>';
        $x++;
    }
    echo myTest3();
    echo myTest3();
    echo myTest3();

    /*
        when a function is completed/ executed, all of it's variables are deleted. 
        If we want these local variables not to be deleted, we would use the "static" keyword as seen above
    */
?>