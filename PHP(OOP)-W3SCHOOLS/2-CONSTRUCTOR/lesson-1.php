<?php
    //Define Objects
    class Fruit{
        public $name;
        public $color;

        public function __construct($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }
    }

    $apple = new Fruit("Apple");

    echo $apple->getName();
?>