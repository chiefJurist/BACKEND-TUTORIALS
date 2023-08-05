<?php 
    //multidimensional indexed arrays
    $blogs = [
        ['Half of a yellow sun', 'Ngozi', 'lorem', 10],
        ['Chike and the river', 'Achebe', 'lorem', 30],
        ['Things fall appart', 'Chinua', 'lorem', 20],
    ];

    //MUTIDIMENSIONAL ASSOCIATIVE ARRAYS
    $blogs2 = [
        ['name' => 'Half of a yellow sun', 'author' => 'Ngozi', 'content' => 'lorem', 'likes' => 10],
        ['name' => 'Chike and the river', 'author' => 'Achebe', 'content' => 'lorem', 'likes' => 30],
        ['name' => 'Things fall appart', 'author' => 'Chinua', 'content' => 'lorem', 'likes' => 20],
    ];

    $popped = array_pop($blogs2)
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php tutorials</title>
    </head>
    <body>
        <h2>INDEXED MULTIDIMENSIONAL ARRAYS</h2>
        <h4> <?php print_r($blogs) ?> </h4>
        <h4> <?php print_r($blogs[1]) ?> </h4>
        <h4> <?php echo $blogs[2][1] ?> </h4><br><br>

        <h2>ASSOCIATIVE MULTIDIMENSIONAL ARRAY</h2>
        <h4> <?php print_r($blogs2) ?> </h4>
        <h4> <?php echo $blogs2[0]['likes'] ?> </h4>
        <h4> <?php print_r($popped) ?> </h4>
    </body>
</html>