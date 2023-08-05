<?php
    //PREPARED STATEMENTS WITH MySQLi
    $servername = "localhost";
    $username = "chiefJurist";
    $password = "#Chibueze2003";
    $dbName = "myDB";

    //create connection
    $conn = new mysqli($servername, $username, $password, $dbName);

    //check connection
    if ($conn->connect_error) {
        die("Connection Error: " . $conn->connect_error);
    }

    //prepare and bind
    $stmt = $conn->prepare("INSERT INTO MyGuests(firstname, lastname, email) VALUES(?, ?, ?)");
    $stmt->bind_param("sss", $firstname, $lastname, $email);

    //Set parameters and execute
    $firstname = "John";
    $lastname = "Doe";
    $email = "john@example.com";
    $stmt->execute();

    $firstname = "Mary";
    $lastname = "Moe";
    $email = "mary@example.com";
    $stmt->execute();

    $firstname = "Jullie";
    $lastname = "Dooley";
    $email = "jullie@example.com";
    $stmt->execute();

    echo "New records created successfully";

    $stmt->close();
    $conn->close();
?>