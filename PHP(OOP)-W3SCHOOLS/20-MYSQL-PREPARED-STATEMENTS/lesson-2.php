<?php
    //PREPARED STATEMENTS WITH PDO
    $servername = "localhost";
    $username = "chiefJurist";
    $password = "#Chibueze2003";
    $dbName = "myDB3";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
        //Set PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected Succesfully <br>";

        //Prepare SQL and bind parameters
        $stmt = $conn->prepare("INSERT INTO MyGuests(firstname, lastname, email) VALUES(:firstname, :lastname, :email)");
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':email', $email);

        // insert a row
        $firstname = "John";
        $lastname = "Doe";
        $email = "john@example.com";
        $stmt->execute();

        // insert another row
        $firstname = "Julie";
        $lastname = "Dooley";
        $email = "julie@example.com";
        $stmt->execute();

        // insert another row
        $firstname = "Mary";
        $lastname = "Moe";
        $email = "mary@example.com";
        $stmt->execute();

        echo "New records created successfully";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
?>