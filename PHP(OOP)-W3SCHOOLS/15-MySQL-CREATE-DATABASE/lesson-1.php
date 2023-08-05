<?php
    //OBJECT ORIENTED MYSQLI
    $servername = "localhost";
    $username = "chiefJurist";
    $password = "#Chibueze2003";

    //Create connection
    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        die("Connection Error: " . $conn->connect_error);
    }

    echo "Connected Successfully";

    //CREATE DATABASE
    $sql = "CREATE DATABASE myDB";
    if ($conn->query($sql) === true) {
        echo "Database created successfully";
    }else {
        echo "Error Creating Database" . $conn->connect_error;
    }
?>