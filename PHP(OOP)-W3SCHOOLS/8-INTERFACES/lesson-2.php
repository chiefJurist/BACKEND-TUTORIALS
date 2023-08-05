<?php
    interface Animal{
        public function makeSound();
    }

    class Cat implements Animal{
        public function makeSound(){
            echo "meow";
        }
    }

    class Dog implements Animal{
        public function makeSound(){
            echo "bark";
        }
    }

    class Mouse implements Animal{
        public function makeSound(){
            echo "squeak";
        }
    }

    //Create a list of animals
    $cat = new Cat();
    $dog = new Dog();
    $mouse = new Mouse();
    $animals = array($cat, $dog, $mouse);

    //Tell the animals to make sound
    foreach ($animals as $animal) {
        $animal->makeSound();
        echo "<br>";
    }
?>