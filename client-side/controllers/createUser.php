<?php
require './user.model.php';
$username = $_POST['username'];
$pass = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
$gender = $_POST['gender'];

if($pass === $confirmPassword){
    $password = md5($pass);
    createUser($username,$password,$gender);
}
else{
    header("location: /amirfood/client-side/signup.php?q=failed");
}