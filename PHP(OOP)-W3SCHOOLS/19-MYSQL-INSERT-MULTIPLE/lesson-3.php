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
        echo "Connected Successfully <br>";

        //begin transaction
        $conn->beginTransaction();

        //Our SQL statements
        $conn->exec("INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')");
        $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)VALUES ('Mary', 'Moe', 'mary@example.com')");
        $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)VALUES ('Julie', 'Dooley', 'julie@example.com')");
        
        //Commit the transactions
        $conn->commit();
        echo "New records created successfully.";
    } catch(PDOException $e) {
        //Rollback the transaction if something failed
        $conn->rollBack();
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
?>