<?php 
    //GETTERS AND SETTERS CHAPTER
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

    $userOne = new User('Mario', 'mario@thenetninja.co.uk');
    $userTwo = new User('Luigi', 'luigi@thenetninja.co.uk');

    //Setting the email using a setter
    $userOne->setEmail('yoshi@thenetninja.co.uk');
    $userTwo->setEmail('yoshithenetninja.co.uk');//Won't work because it doesn't contain the @ symbol

    echo $userOne->getEmail() . '<br>';
    echo $userTwo->getEmail();
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