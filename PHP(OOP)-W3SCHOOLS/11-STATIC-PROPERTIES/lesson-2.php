<?php
    class Pi{
        public static $value=3.14159;
        public function staticValue(){
            return self::$value;
        }
    }

    $pi = new Pi();
    echo $pi->staticValue();
?>