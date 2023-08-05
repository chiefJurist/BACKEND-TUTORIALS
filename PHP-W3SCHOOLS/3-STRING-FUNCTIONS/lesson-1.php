<?php
    $str = "This is the string I will be using for testing";
    $str2 = 'This is the "string" I will be using for testing';

    echo $str;
    echo "<br>";

    echo strlen($str); //Returns the length
    echo "<br>";

    echo str_word_count($str); // Returns the number of words
    echo "<br>";

    echo strrev($str); //Returns the reversed version of the string
    echo "<br>";

    echo strpos($str, "is"); //Returns the position of the first occurence of the substring
    echo "<br>";

    echo str_replace("I", "Anthony", $str);
    echo "<br>";


    echo addcslashes($str, "I"); //Add a backslash in front of the character "I"
    echo "<br>";

    echo addslashes($str2); //Add a backslash in front of each double quote (")
    echo "<br>";

    echo bin2hex($str); //Convert to hexadecimal values
    echo "<br>";

    echo chop($str, "testing"); //Remove characters from the right end of a string
    echo "<br>";

    echo chr(0x52); //Return characters from different ASCII values
    echo "<br>";

    echo chunk_split($str, 1, "/"); //Split the string after specified number of characters 
    //and add a "/" or any specified seperator after each split
    echo "<br>";
    
?>