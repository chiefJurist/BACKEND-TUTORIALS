<?php
    //OBJECT ORIENTED MYSQLI
    $servername = "localhost";
    $username = "chiefJurist";
    $password = "#Chibueze2003";
    $dbName = "myDB";

    //Create connection
    $conn = new mysqli($servername, $username, $password, $dbName);
    if ($conn->connect_error) {
        die("Connection Error: " . $conn->connect_error);
    }

    echo "Connected Successfully";

    // sql to create table
    $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES('John', 'Doe', 'john@example.com')";

    if ($conn->query($sql) === true) {
        echo "Data inserted successfully";
    }else {
        echo "Error inserting data:  $conn->error";
    }

    $conn->close();
?>