<?php 
    function sayHello(){
        echo "Good morning Anthony";
    }
    
    function sayHello2($name){
        echo "Good morning $name";
    }

    function sayHello3($name = 'Tony'){//Adding a default value in case...
        echo "Good morning $name";
    }

    function sayHello4($name = 'Tony', $time = 'morning'){//Adding a default value in case...
        echo "Good $time $name";
    }

    function formatProduct($product){
        echo "{$product["name"]} cost {$product['price']} to buy <br/>";
    }

    function formatProduct2($product){
        return "{$product['name']} cost {$product['price']} to buy <br/>";
    }
    $formatted = formatProduct2(['name' => 'apple', 'price' => '$10']);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php tutorials</title>
    </head>
    <body>
        <h4> <?php sayHello()//Calling The Function ?> </h4>
        <h4> <?php sayHello2("Edward") ?> </h4>
        <h4> <?php sayHello3("Edward") ?> </h4>
        <h4> <?php sayHello3() ?> </h4>
        <h4> <?php sayHello4("Edward", "afternoon") ?> </h4>
        <h4> <?php sayHello4("Edward") ?> </h4>
        <h4> <?php formatProduct(['name' => 'apple', 'price' => '$10']) ?> </h4>
        <h4> <?php echo $formatted ?> </h4>
    </body>
</html>