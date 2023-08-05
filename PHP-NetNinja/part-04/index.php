<?php 
    $name = "Anthony"; //This is a variable that stores a string (works like var in JavaScript)
    $age = 19; //This is a variable that stores an integer
    define("NAME", "Nnanna"); // The first quote is the variable name while the second is the value (works like const in JavaScript)
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php tutorials</title>
    </head>
    <body>
        <h1>User Profile Page</h1>
        <h2> <?php echo $name; ?> </h2>
        <h2> <?php echo $age; ?> </h2>
        <h2> <?php echo NAME ?> </h2>
    </body>
</html>