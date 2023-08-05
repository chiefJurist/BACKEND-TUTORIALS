<?php
    //MYSQLi OBJECT ORIENTED
    $servername = "localhost";
    $username = "chiefJurist";
    $password = "#Chibueze2003";

    //Create Connection
    $conn = new mysqli($servername, $username, $password);

    //Check Connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    echo "Connected Successfully";
?>