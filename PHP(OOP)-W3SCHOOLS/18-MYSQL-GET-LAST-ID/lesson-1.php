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

    // sql to get last id
    $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES('John', 'Doe', 'john@example.com')";

    if ($conn->query($sql) === true) {
        $last_id = $conn->insert_id;
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    }else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>