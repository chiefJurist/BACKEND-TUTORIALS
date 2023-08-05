<?php 
    //CONSTRUCTOR CHAPTER
    class User{
        //properties  and methods will go here
        public $username;

        public $email;

        public function __construct($username, $email){
            $this->username = $username;
            $this->email = $email;
        }

        public function addFriend(){
            return "$this->username added a new friend";
        }
    }

    //Creating an object by Instantiating the class "User";
    $userOne = new User('Mario', 'mario@thenetninja.co.uk');
    $userTwo = new User('Luigi', 'luigi@thenetninja.co.uk');

    //Accesing the properties and methods of the class
    echo $userOne->username . '<br>';
    echo $userOne->email . '<br>';
    echo $userOne->addFriend() . '<br><br>';

    //Accesing the properties and methods of the class for the second user
    echo $userTwo->username . '<br>';
    echo $userTwo->email . '<br>';
    echo $userTwo->addFriend() . '<br>';
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