<?php
    trait Message1{
        public function msg1(){
            echo "OOP is fun!";
        }
    }
    
    class Welcome{
        use Message1;
    }

    $obj = new Welcome();
    $obj->msg1();
?>