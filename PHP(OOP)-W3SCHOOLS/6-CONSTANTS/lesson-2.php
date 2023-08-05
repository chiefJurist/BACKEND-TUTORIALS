<?php
    class Goodbye{
        const LEAVING_MESSAGE = "Thank you for trying your best everyday";

        public function bye(){
            echo self::LEAVING_MESSAGE;
        }
    }

    $goodbye = new Goodbye();
    $goodbye->bye();
?>