<?php
    //MYSQLi PROCEDURAL
    $servername = "localhost";
    $username = "chiefJurist";
    $password = "#Chibueze2003";

    //Create Connection
    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn) {
        die("Connection Error " . mysqli_connect_error());
    }

    echo "Connected Successfully";
?>