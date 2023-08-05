<?php 

    //create a user validator class to handle validation
    //constructor which takes in POST data from form validation
    //check required "fields to check" are present in the data
    //create methods to validate individual fields
    //--- methods to validate a username
    //--- methods to validate an email
    //return an error once all checks are done

    class UserValidator{
        private $data;
        private $errors = [];
        private static $fields = ['username',  'email'];

        public function __construct($post_data){
            $this->data = $post_data;
        }

        public function validateForm(){
            foreach (self::$fields as $field) {
                if (array_key_exists($field, $this->data)) {
                    trigger_error("$field does not exist");
                    return;
                }
            }

            $this->validateUsername();
            $this->validateEmail();
            return $this->errors;
        }


        private function validateUsername(){
            $val = trim($this->data["username"]);

            if (empty($val)) {
                $this->addError('username', 'username cannot be empty');
            }else{
                if (!preg_match('/^[a-zA-Z0-9]{6,12}$/', $val)) {
                    $this->addError('username', 'username must be alphanumeric and 6 - 12 chars');
                }
            }
        }


        private function validateEmail(){
            $val = trim($this->data["email"]);

            if (empty($val)) {
                $this->addError('email', 'email cannot be empty');
            }else{
                if (!filter_var($val, FILTER_VALIDATE_EMAIL)) {
                    $this->addError('email', 'email must be a valid email');
                }
            }
        }


        private function addError($key, $value){
            $this->errors[$key] = $value;
        }
    }
?>