<?php 
require './admin.model.php';
$username = $_POST['username'];
$pass = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

if($pass === $confirmPassword){
    $password = md5($pass);
    createAdmin($username,$password);
}
else{
    header("location: /amirfood/admin-side/signup.php?q=failed");
}