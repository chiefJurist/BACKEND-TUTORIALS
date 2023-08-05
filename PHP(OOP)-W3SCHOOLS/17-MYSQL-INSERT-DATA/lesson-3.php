<?php
    //MYSQLi PDO
    $servername = "localhost";
    $username = "chiefJurist";
    $password = "#Chibueze2003";
    $dbName = "myDB3";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
        //Set PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected Successfully";

        // sql to insert data
        $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";
        
        //use exec because no results are teturned
        $conn->exec($sql);
        echo "Data inserted successfully <br>";
    } catch (PDOException $e) {
        echo $sql . $e->getMessage();
    }

    $conn = null;
?>