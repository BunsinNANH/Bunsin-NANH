<?php 
    class GetValue{
        public $name;
        public $gender;
        public $province;
        public $email;

        public function __construct($name,$gender,$province,$email){
            $this->name = $name;
            $this->gender = $gender;
            $this->province = $province;
            $this->email = $email;
        }

        public function getInput(){
            return "<p>Name:<span>".$this->name."</span></p>".
                    "<p>Gender:<span>".$this->gender."</span></p>".
                    "<p>Province:<span>".$this->province."</span></p>".
                    "<p>Email:<span>".$this->email."</span></p>";
        }

        public function getValue(){
            $this->getInput();
        }
    }
?>