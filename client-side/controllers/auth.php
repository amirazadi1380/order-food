<?php
require '../controllers/user.model.php';
$username = $_POST['username'];
$password = md5($_POST['password']);
loginUser($username,$password);