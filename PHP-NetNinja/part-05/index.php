<?php 
    $stringOne = "My email is ";
    $stringTwo = "anthonynnanna004@gmail.com";
    $name = "AnThOny";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php tutorials</title>
    </head>
    <body>
        <h2><?php echo $stringOne . $stringTwo ?></h2>
        <h2>
            <?php echo "My email is $stringTwo" ?> <!--this interpolation works only in double quotes-->
        </h2>
        <h2> <?php echo "The Ninja Screamed \"whaaa\"" ?> </h2>
        <h2> <?php echo 'The Ninja Screamed "whaaa"' ?> </h2>
        <h2> <?php echo $stringOne[0]//This works like JavaScript charAt method ?> </h2>
        <h2> <?php echo $stringTwo[2] ?> </h2>

        <!--BELOW ARE EXAMPLES OF STRING FUNCTIONS (THEY ARE LIKE JAVASCRIPT METHODS AND PROPERTIES)-->
        <h2> <?php echo strlen($name) //Like the length property ?> </h2>
        <h2> <?php echo strtoupper($name) // Like toUpperCase method ?> </h2>
        <h2> <?php echo strtolower($name) //Like toLowerCase method ?> </h2>
        <h2> <?php echo str_replace('anthony', 'edward', $stringTwo) ?> </h2>
        <!--THE FIRST ARGUMENT IS WHAT TO BE REPLACED, THE SECOND IS THE REPLACEMENT, WHILE THE NAME OF THE VARIABLE IS THE LAST ARGUMENT-->
    </body>
</html>