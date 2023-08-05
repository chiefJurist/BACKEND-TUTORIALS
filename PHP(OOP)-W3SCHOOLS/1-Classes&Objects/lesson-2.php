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
    }

    $apple = new Fruit();
    $banana = new Fruit();

    $apple->setName("apple");
    $banana->setName("banana");

    echo $apple->getName();
    echo '<br>';
    echo $banana->getName();
?>