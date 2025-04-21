<?php
    //Connecting to a database
    $conn = mysqli_connect("localHost", "chiefJurist", "#Chibueze2003", "ninja_pizzas");

    //Checking the connection
    if (!$conn) {
        echo "connection error" . mysqli_connect_error();
    }

    //Write query for certain pizzas
    $sql = "SELECT title, ingredients, id FROM pizzas";

    //Make query and get results
    $result = mysqli_query($conn, $sql);

    //Fetch the resulting rows as an array
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //View what we just did
    print_r($pizzas);

    //free result from memory
    mysqli_free_result($result);

    //close connection
    mysqli_close($conn)
?>
<!DOCTYPE html>
<html>
    <?php include("templates/header.php") ?> 
    <?php include("templates/footer.php") ?>
</html>