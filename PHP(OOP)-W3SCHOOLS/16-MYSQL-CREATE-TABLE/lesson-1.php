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
    $sql = "CREATE TABLE MyGuests (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if ($conn->query($sql) === true) {
        echo "Table Created successfully";
    }else {
        echo "Error Creating table $conn->error";
    }
?>