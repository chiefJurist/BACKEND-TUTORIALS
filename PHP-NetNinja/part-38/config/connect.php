<?php
    //Connecting to a database
    $conn = mysqli_connect("localHost", "chiefJurist", "#Chibueze2003", "ninja_pizzas");

    //Checking the connection
    if (!$conn) {
        echo "connection error" . mysqli_connect_error();
    }
?>