<?php
    //PHP - The final Keyword
    //The Fruit class can't be extended
    final class Fruit{
        public $name;
        public $color;

        public function __construct($name, $color){
            $this->name = $name;
            $this->color = $color;
        }

        public function intro(){
            echo "The fruit is {$this->name} and it is {$this->color} in color <br>";
        }
    }

    //Strawberry Extends Fruit
    class Strawberry extends Fruit{
        public $weight;
        public function __construct($name, $color, $weight) {
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
        }
        public function intro(){
            echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
        }
    }

    //Instantiating
    $strawberry = new Strawberry("strawberry", "red", 50);
    $strawberry->intro();
?>