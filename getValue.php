<?php 
require "src/getValue_Class.php";

if(isset($_POST['btn-send'])) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $province = $_POST['province'];
    $email = $_POST['email'];

    $student = new GetValue($name,$gender,$province,$email);
    echo $student->getValue();    
}