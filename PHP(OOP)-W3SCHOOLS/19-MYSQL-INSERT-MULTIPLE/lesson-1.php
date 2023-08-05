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

    echo "Connected Successfully <br>";

    // sql to create table
    $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com');";
    $sql .= "INSERT INTO MyGuests (firstname, lastname, email)VALUES ('Mary', 'Moe', 'mary@example.com');";
    $sql .= "INSERT INTO MyGuests (firstname, lastname, email)VALUES ('Julie', 'Dooley', 'julie@example.com')";

    if ($conn->multi_query($sql) === true) {
        echo "New records created successfully";
    }else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>