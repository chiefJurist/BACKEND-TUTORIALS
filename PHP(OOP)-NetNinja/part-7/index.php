<?php 
    //INHERITANCE CHAPTER
    class User{
        //properties  and methods will go here
        public $username;

        private $email;

        public function __construct($username, $email){
            $this->username = $username;
            $this->email = $email;
        }

        public function addFriend(){
            return "$this->email added a new friend";
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

        public function __construct($username, $email, $level){
            $this->level = $level;
            parent::__construct($username, $email);
        }
    }


    $userOne = new User('Mario', 'mario@thenetninja.co.uk');
    $userTwo = new User('Luigi', 'luigi@thenetninja.co.uk');
    $userThree = new Admin('Yoshi', 'yoshi@thenetninja.co.uk', 5);

    echo $userThree->username . '<br>';
    echo $userThree->getEmail() . '<br>';
    echo $userThree->level . '<br>';
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