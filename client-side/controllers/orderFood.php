<?php 
session_start();
require '../../config.php';
require './user.model.php';
$food_id = $_GET['foodId'];
$query = $_GET['q'];
$sql = "SELECT * FROM foods WHERE food_id = $food_id ";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0){
    $food = mysqli_fetch_assoc($result);
}
var_dump($food);
$user_id = $_SESSION['user_id'];
var_dump($user_id);
orderFood($food['name'],$food['price'],$user_id,$query);