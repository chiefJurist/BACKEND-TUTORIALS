<?php
    //PHP - More on Static Methods
    class Greeting{
        public static function welcome(){
            echo 'Hello World!';
        }

        public function __construct(){
            self::welcome();
        }
    }

    //Call static method
    new Greeting();
?>