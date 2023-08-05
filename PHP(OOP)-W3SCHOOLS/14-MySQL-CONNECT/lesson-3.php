<?php
    //MYSQLi PDO
    $servername = "localhost";
    $username = "chiefJurist";
    $password = "#Chibueze2003";
    $myDB = "";

    //Create Connection
   try {
        $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
        //Set PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected Succesfully";
   } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
   }
?>