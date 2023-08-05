<?php
    //FILE SYSTEM - PART2

    $file = "readme.txt";

    //opening a file for reading
    $handle =fopen($file, "a+");

    //read the file
    //echo fread($handle, fileSize($file)) . "<br/>";
    //echo fread($handle, 112);

    //read a single line
    //echo fgets(($handle));
    //echo fgets(($handle));

    //Read single character
    //echo fgetc($handle);
    //echo fgetc($handle);

    //writing to the file
    fwrite($handle, "\nAlmost everything popular is wrong");//This overwrites the firstline if you use r+ instead of a+

    //closing a file
    fclose($handle);

    //For deleting a file
    unlink($file);
?>