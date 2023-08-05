<?php
    //PHP - Inheritance and the Protected Access Modifier
    class Fruit{
        public $name;
        public $color;

        public function __construct($name, $color){
            $this->name = $name;
            $this->color = $color;
        }

        protected function intro(){
            echo "The fruit is {$this->name} and it is {$this->color} in color <br>";
        }
    }

    //Strawberry Extends Fruit
    class Strawberry extends Fruit{
        public function message(){
            echo "Am I a fruit or a berry? <br>";

            //Call the protected function
            $this->intro();
        }
    }

    //Instantiating
    $strawberry = new Strawberry("strawberry", "red");
    $strawberry->message();
    $strawberry->intro();//Will display an error
?>