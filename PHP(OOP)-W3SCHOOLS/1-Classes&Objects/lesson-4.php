<?php
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
    var_dump($apple instanceof Fruit);
?>