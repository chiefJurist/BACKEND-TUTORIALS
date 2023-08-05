<?php
    class A{
        public static function welcome() {
          echo "Hello World!";
        }
      }
      
      class B{
        public function message() {
          A::welcome();
        }
      }
      
      $obj = new B();
      $obj->message();
?>