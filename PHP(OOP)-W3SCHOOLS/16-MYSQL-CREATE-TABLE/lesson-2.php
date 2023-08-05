<?php
    //PROCEDURAL MYSQLI
    $servername = "localhost";
    $username = "chiefJurist";
    $password = "#Chibueze2003";
    $dbName = "myDB2";

    //Create Connection 
    $conn = mysqli_connect($servername, $username, $password, $dbName);
    if (!$conn) {
        die("Connection error: " . mysqli_connect_error());
    }

    echo "Connected successfully";

    // sql to create table
    $sql = "CREATE TABLE MyGuests (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if (mysqli_query($conn, $sql)) {
        echo "Table created successfully";
    }else {
        echo "Error Creating Table" . mysqli_error($conn);
    }
?>