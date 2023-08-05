<?php 
    //PROTECTED MODIFIER CHAPTER
    class User{
        //properties  and methods will go here
        public $username;
        protected $email;
        public $role = 'member';//Property to be overidden

        public function __construct($username, $email){
            $this->username = $username;
            $this->email = $email;
        }

        public function addFriend(){
            return "$this->email added a new friend";
        }

        public function message(){ //Method to be overidden
            return "$this->email sent you a new message";
        }


        //Getters
        public function getEmail(){
            return $this->email;
        }

        //Setters
        public function setEmail($email){
            if (strpos($email, '@') > -1) {
                $this->email = $email;
            }
        }
    }

    class Admin extends User{
        public $level;
        public $role = 'Admin';

        public function __construct($username, $email, $level){
            $this->level = $level;
            parent::__construct($username, $email);
        }

        public function message(){ //Method to be overidden
            return "$this->email, an admin, sent you a new message";
        }
    }


    $userOne = new User('Mario', 'mario@thenetninja.co.uk');
    $userTwo = new User('Luigi', 'luigi@thenetninja.co.uk');
    $userThree = new Admin('Yoshi', 'yoshi@thenetninja.co.uk', 5);

    //Showing Overidden properties
    echo 'userOne is a: ' . $userOne->role .'<br>';
    echo 'userThree is a: ' . $userThree->role .'<br>';

    //Showing Overidden methods
    echo $userOne->message() . '<br>';
    echo $userTwo->message() . '<br>';
    echo $userThree->message() . '<br>';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP OOP TUTORIAL</title>
    </head>
    <body>
        <div></div>
    </body>
</html>