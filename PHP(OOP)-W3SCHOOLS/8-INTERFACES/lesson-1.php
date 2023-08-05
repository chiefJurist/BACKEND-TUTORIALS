<?php
    interface Animal{
        public function makeSound();
    }

    class Cat implements Animal{
        public function makeSound(){
            echo "meow";
        }
    }

    $animal = new Cat();
    $animal->makeSound();
?>