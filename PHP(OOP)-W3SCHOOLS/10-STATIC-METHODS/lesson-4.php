<?php
    class Domain{
        protected static function getWebsiteName() {
          return "W3Schools.com";
        }
    }
    
    class DomainW3 extends Domain{
        public $websiteName;

        public function __construct(){
            $this->websiteName = parent::getWebsiteName();
        }
    }

    $domainW3 = new DomainW3();
    echo $domainW3->websiteName;
?>