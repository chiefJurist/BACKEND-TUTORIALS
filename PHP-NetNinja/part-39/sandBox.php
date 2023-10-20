<?php
    //file system - part1
    
    //$qoutes = readfile("readme.txt");
    //echo $qoutes;

    //Checking if file exists
    $file = "readme.txt";

    if (file_exists($file)) {
        //read file
        //echo readfile($file) . "<br/>";

        //copy file
        //copy($file, "quotes.txt");

        //Absolute path
        //echo realpath(($file)) . "<br/>";

        //file size
        //echo filesize($file) . "<br/>";

        //rename file
        //rename($file, "text.txt");
    }else {
        echo "file does not exist";
    }

    //Make Directory
    mkdir("quotes");
?> 