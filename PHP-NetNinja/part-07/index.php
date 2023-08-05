<?php 
    //In PHP we have three types of arrays : Indexed arrays, Associate arrays and multi-dimensional arrays

    //INDEXED ARRAYS
    $peopleOne = ['Chioma', 'Oluchi', 'Chinaza'];

    $peopleTwo = array('Chioma', 'Oluchi', 'Chinaza');//This is another way to create arrays

    $age = [26, 23, 13];

    $age[2] = 14; //This is how to overide a particular index in an array

    $age[] = 20; //This for adding a new element to the array

    array_push($age, 19); //This is another way to add value to an array.
    //The first argument is the name of the array while the second argument is the new element to be added

    $details = array_merge($peopleOne, $age); //merges arrays together


    //ASSOCIATIVE ARRAYS (KEYS& VALUE PAIRS)
    $family = ['first'=>'Chioma', 'second'=>'Oluchi', 'third'=>'Chibueze', 'fourth'=>'Chinaza'];

    $family2 = array('first'=>'Chioma', 'second'=>'Oluchi', 'third'=>'Chibueze', 'fourth'=>'Chinaza');

    $family['mother'] = 'Ngozi'; //This is for adding a new element
    $family['father'] = 'Chidi';

    //NOTE THAT ALL THE FUNCTIONS OF AN INDEXED ARRAY WORK IN ASSOCIATIVE ARRAYS INCLUDING OVERIDING AN ELEMENT
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php tutorials</title>
    </head>
    <body>
        <h2>INDEXED ARRAYS</h2>
        <h4> <?php echo $peopleOne[1] ?> </h4>

        <h4> <?php echo $peopleTwo[0] ?> </h4>

        <h4> <?php echo $age[2] ?> </h4>

        <h4> <?php print_r($peopleTwo) ?> </h4><!--THis is for viewing the whole array-->

        <h4> <?php print_r($age) ?> </h4>

        <h4> <?php echo count($age) ?> </h4><!--This is just like array.length in JavaScript-->

        <h4> <?php print_r($details) ?> </h4> <br><br>

        <h2>ASSOCIATIVE ARRAYS</h2>
        <h4> <?php echo $family['fourth'] ?> </h4>

        <h4> <?php print_r($family) ?> </h4>

        <h4> <?php print_r($family2) ?> </h4>
    </body>
</html>