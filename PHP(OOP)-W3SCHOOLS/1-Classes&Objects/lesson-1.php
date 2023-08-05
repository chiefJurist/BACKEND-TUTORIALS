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
    }
    //Note: In a class, variables are called properties and functions are called methods!
?>
