<?php 
require './user.model.php';
session_start();
require '../../config.php';
$user_id = $_SESSION['user_id'];
$order_id = $_GET['orderId'];
deleteOrder($order_id);