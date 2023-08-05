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

    echo "Connected successfully <br>";

    // sql to insert data
    $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES('John', 'Doe', 'john@example.com');";
    $sql .= "INSERT INTO MyGuests (firstname, lastname, email)VALUES ('Mary', 'Moe', 'mary@example.com');";
    $sql .= "INSERT INTO MyGuests (firstname, lastname, email)VALUES ('Julie', 'Dooley', 'julie@example.com')";

    if (mysqli_multi_query($conn, $sql)) {
        echo "New record created successfully";
    }else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>