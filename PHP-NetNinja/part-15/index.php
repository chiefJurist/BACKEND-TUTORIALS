<?php ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php tutorials</title>
    </head>
    <body>
        <h4> <?php include('ninjas.php') ?> </h4>

        <h4> <?php include'ninjas.php' ?> </h4>

        <h4> <?php require('ninjas.php') ?> </h4>

        <h4> <?php require'ninjas.php' ?> </h4>

        <h4> <?php include('ninjass.php') ?> </h4>

        <h4> <?php echo 'end of code' ?> </h4>

        <h4> <?php require('ninjass.php') ?> </h4>

        <h4> <?php echo 'end of code' ?> </h4>
        <!--The code stops execution if a mistake is made in the case of require-->
    </body>
</html>