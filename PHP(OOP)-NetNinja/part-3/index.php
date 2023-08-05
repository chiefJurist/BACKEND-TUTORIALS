<?php
    //PROPERTIES AND METHODS CHAPTER

    class User{
        //properties  and methods will go here
        public $username = 'ryu';
        public $email = 'ryu@thenetninja.co.uk';
        public function addFriend(){
            return "$this->username added a new friend";
        }
    }

    //Creating an object by Instantiating the class "user";
    $userOne = new User();
    $userTwo = new User();

    //Accesing the properties and methods of the class
    echo $userOne->username . '<br>';
    echo $userOne->email . '<br>';
    echo $userOne->addFriend() . '<br><br>';

    //Personalizing the properties for the second user
    $userTwo->username = "yoshi";
    $userTwo->email = "yoshi@thenetninja.co.uk";

    //Accesing the properties and methods of the class for the second user
    echo $userTwo->username . '<br>';
    echo $userTwo->email . '<br>';
    echo $userTwo->addFriend() . '<br>';


    //FOR SEEING A CLASS PROPERTIES AND METHODS
    //print_r(get_class_vars('User'));
    //print_r(get_class_methods('User'));
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