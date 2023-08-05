<?php
    abstract class ParentClass{
        //abstract method with an argument
        abstract protected function prefixName($name);
    }

    class ChildClass extends ParentClass{
        public function prefixName($name, $seperator=".", $greet="Dear"){
            if ($name == "John Doe") {
                $prefix = "Mr";
            }elseif ($name == "Jane Doe") {
                $prefix = "Mrs";
            }else {
                $prefix = "";
            }

            return "{$greet} {$prefix}{$seperator} {$name}";
        }
    }

    $class = new ChildClass();
    echo $class->prefixName("John Doe");
    echo "<br>";
    echo $class->prefixName("Jane Doe");
?>