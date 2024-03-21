<?php 
require './admin.model.php';
$condition = $_GET['q'];
$food_id = $_GET['foodId'];
updateCount($condition,$food_id);