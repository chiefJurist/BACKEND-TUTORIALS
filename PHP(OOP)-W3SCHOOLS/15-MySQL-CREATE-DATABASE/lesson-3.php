<?php
    //MYSQLi PDO
    $servername = "localhost";
    $username = "chiefJurist";
    $password = "#Chibueze2003";

    try {
        $conn = new PDO("mysql:host=$servername", $username, $password);
        //Set PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected Successfully";

        
        $sql = "CREATE DATABASE myDB3";

        //use exec() because no results are returned
        $conn->exec($sql);
        echo "Database created successfully <br>";
    } catch (PDOException $e) {
        echo $sql . $e->getMessage();
    }
?>