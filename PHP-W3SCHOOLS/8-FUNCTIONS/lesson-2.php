<?php declare(strict_types=1);
    //Default arguments
    function setHeight($minheight = 50){
        echo "The height is : $minheight CM <br>";
    }

    echo setHeight(350);
    echo "<br>";
    echo setHeight();
    echo "<br>";
    echo setHeight(135);
?>