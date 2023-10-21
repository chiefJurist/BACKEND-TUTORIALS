<?php
    //Define Objects
    class Fruit{
        //Properties
        public $name;
        public $color;

        //Methods
        function setName($name){
            $this->name = $name;
        }
        function getName(){
            return $this->name;
        }
        function setColor($color){
            $this->color = $color;
        }
        function getColor(){
            return $this->color;
        }
    }

    $apple = new Fruit();
    $banana = new Fruit();

    $apple->setName("apple");
    $banana->setName("banana");
    $apple->setColor("red");
    $banana->setColor("green");

    echo "Name: {$apple->getName()}";
    echo '<br>';
    echo "Color: {$apple->getColor()}";
    echo '<br><br>';
    echo "Name:  {$banana->getName()}";
    echo '<br>';
    echo "Color: {$banana->getColor()}";
?>