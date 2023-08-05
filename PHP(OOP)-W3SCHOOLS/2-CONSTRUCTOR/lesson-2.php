<?php
    //Define Objects
    class Fruit{
        public $name;
        public $color;

        public function __construct($name, $color){
            $this->name = $name;
            $this->color = $color;
        }

        public function getName(){
            return $this->name;
        }
        public function getColor(){
            return $this->color;
        }
    }

    $apple = new Fruit("Apple", "red");

    echo "Name: " .  $apple->getName();
    echo '<br>';
    echo "Color: " . $apple->getColor();
?>