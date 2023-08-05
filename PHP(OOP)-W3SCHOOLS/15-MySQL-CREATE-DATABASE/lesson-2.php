<?php
    //PROCEDURAL MYSQLI
    $servername = "localhost";
    $username = "chiefJurist";
    $password = "#Chibueze2003";

    //Create Connection 
    $conn = mysqli_connect($servername, $username, $password);
    if (!$conn) {
        die("Connection error: " . mysqli_connect_error());
    }

    echo "Connected successfully";

    //Creating the database
    $sql = "CREATE DATABASE myDB2";
    if (mysqli_query($conn, $sql)) {
        echo "Database created successfully";
    }else {
        echo "Error Creating Database" . mysqli_error($conn);
    }
?>