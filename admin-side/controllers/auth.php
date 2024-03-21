<?php
require '../controllers/admin.model.php';
$username = $_POST['username'];
$password = md5($_POST['password']);
loginAdmin($username,$password);