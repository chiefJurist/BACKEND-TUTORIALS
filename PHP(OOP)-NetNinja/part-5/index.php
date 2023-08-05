<?php 
    //ACCESS MODIFIERS CHAPTER
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
    }

    $userOne = new User('Mario', 'mario@thenetninja.co.uk');
    $userTwo = new User('Luigi', 'luigi@thenetninja.co.uk');


    //Changing the value of email for the first user
    //$userOne->email = 'abc@gmail.com';

    //echo $userOne->email . '<br>';
    //echo $userTwo->email . '<br>';

    //Note that the addFriend() still works
    echo $userOne->addFriend();
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