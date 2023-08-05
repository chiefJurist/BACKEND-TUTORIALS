<?php 
    $radius = 25; //This is an integer
    $pi = 3.142; // This is a float (or double) because it has decimals

    //basic operators are : *, /, -, +, **(for raised to power), ++, --, +=, -=  etc.
    //php follows the rule of BIDMAS (BRACKETS, INDICES, DIVISION, MULTIPLICATION, ADDITION AND SUBTRACTION)


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php tutorials</title>
    </head>
    <body>
        <h4> <?php echo $radius * $pi ?> </h4>
        <h4> <?php echo $radius ** 2 ?> </h4>
        <h4> <?php echo 2 * (4+9) / 3?> </h4>
        <h4> <?php echo $radius++ ?> </h4>
        <h4> <?php echo $radius ?> </h4>
        <h4> <?php echo $pi-- ?> </h4>
        <h4> <?php echo $pi ?> </h4>
        <h4> <?php echo $radius +=10 ?></h4>
        <h4> <?php echo $radius = $radius +10 ?></h4> <!-- SAME WITH += -->
        <h4> <?php echo $pi *= 1000 ?> </h4>
        <h4> <?php echo $pi /= 1000 ?> </h4>
        <h4> <?php echo floor($pi) ?> </h4>
        <h4> <?php echo ceil($pi) ?> </h4>
        <h4> <?php echo pi() ?> </h4>
    </body>
</html>