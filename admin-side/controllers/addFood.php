<?php 
require './admin.model.php';
session_start();
$admin_id = $_SESSION['admin_id'];
$name = $_POST['name'];
$materials = $_POST['materials'];
$price = $_POST['price'];
$category = $_POST['category'];
$img_src = $_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],"../images/".$img_src);
addFood($name,$materials,$price,$img_src,$category,$admin_id);