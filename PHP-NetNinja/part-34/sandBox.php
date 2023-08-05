<?php
    $score = 40;

    /*//If statement
    if ($score > 20) {
        echo 'High Score';
    }else{
        echo 'Low Score';
    }*/

    //TENARY OPERATORS
    $score>20? "HighScore" : "Low Score";
    //You can store the operator in a variable and echo the variable or even echo the operator directly
    $val = $score>20? "HighScore" : "Low Score";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php tutorials</title>
    </head>
    <body>
        <h4><?php echo $val?></h4>   
    </body>
</html>