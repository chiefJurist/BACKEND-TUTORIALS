<?php
    class User{
        private $email;
        private $name;

        public function __construct($name, $email){
            $this -> email = $email;
            $this -> name = $name;
        }

        public function login(){
            echo'This user logged in';
        }

        public function getName(){
            return $this -> name;
        }

        public function setName($name){
            if (is_string($name) && strlen($name) >1) {
                $this -> name = $name;
                return "The name has benn updated to $name";
            }else{
                return"Not a valid name";
            }
        }
    }

    /*$userOne = new User("Anthony", "anthonynnanna004@gmail.com");
    $userOne -> login();
    $userOne -> name = 50;
    echo $userOne -> name;*/

    $userTwo = new User("Anthony", "anthonynnanna004@gmail.com");
    echo "{$userTwo ->getName()} <br/>";
    //$userTwo -> setName(50);
    //echo $userTwo ->getName();
    $userTwo -> setName("Chiboy");
    echo $userTwo ->getName();
?>