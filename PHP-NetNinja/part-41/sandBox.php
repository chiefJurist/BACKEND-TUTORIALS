<?php
    //classes
    /*class User{
        public $email;
        public $name;

        public function __construct(){
            $this -> email = "anthonynnanna004@gmail.com";
            $this -> name = "Anthony Nnanna";
        }

        public function login(){
            echo'This user logged in';
        }
    }

    $userOne = new User();
    $userOne -> login();
    echo $userOne -> name;*/

    class User{
        public $email;
        public $name;

        public function __construct($name, $email){
            $this -> email = $email;
            $this -> name = $name;
        }

        public function login(){
            echo'This user logged in';
        }
    }

    $userOne = new User("Anthony", "anthonynnanna004@gmail.com");
    $userOne -> login();
    echo $userOne -> name;
?>