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

        public function getName(){
            return $this->name;
        }
        public function getGender(){
            return $this->gender;
        }
        public function getProvince(){
            return $this->province;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getValueName(){
            $getName = $this->getName();
            return $getName;
        }
        public function getValueGender(){
            $getGender = $this->getValueGender();
            return $getGender;
        }
        public function getValueProvince(){
            $getProvince = $this->getProvince();
            return $getProvince;
        }
        public function getValueEmail(){
            $getEmail = $this->getValueEmail();
            return $getEmail;
        }
    }
?>