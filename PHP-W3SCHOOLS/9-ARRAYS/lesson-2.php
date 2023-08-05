<?php
    //LOOPING THROUGH AN INDEXED ARRAY
    $cars = array("Volvo", "BMW", "Toyota");
    $arrLength = count($cars);

    for ($i=0; $i < $arrLength; $i++) { 
        echo $cars[$i];
        echo '<br>';
    }


?>