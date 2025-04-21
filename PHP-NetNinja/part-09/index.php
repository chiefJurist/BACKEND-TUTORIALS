<?php 
//LOOPS
$ninjas = ['shaun', 'ryu', 'yoshi'];

for ($i=0; $i < count($ninjas); $i++) { 
    echo $ninjas[$i] . '<br/>';
}

//FOREACH LOOP
foreach ($ninjas as $key => $ninja) {
    echo $ninja . '<br/>';
}

$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lighting bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];

foreach ($products as $key => $product) {
    echo $product['name'] . ' - ' . $product['price'];
    echo '<br/>';
}

// WHILE LOOPS
$a = 0;
while ($a < count($products)) {
    echo $products[$a]['name'];
    echo '<br/>';
    $a++ ;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php tutorials</title>
    </head>
    <body>
        <h1>Products</h1>
        <ul>
            <?php foreach ($products as $product) { ?>
                <h3><?php echo $product['name']; ?></h3>
                <p>£ <?php echo $product['price']; ?></p>
            <?php } ?>
        </ul>
    </body>
</html>