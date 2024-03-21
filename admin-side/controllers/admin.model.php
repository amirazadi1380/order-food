<?php 
include '../../config.php';
function createAdmin ($username,$password){
    global $conn;
    $sql = "INSERT INTO admins (username,password) VALUES ('$username', '$password')";
    $result = mysqli_query($conn,$sql);
    if ($result){
        header("location: /amirfood/admin-side/login.php");
    }
    else{
        header("location: /amirfood/admin-side/signup.php");

    }
}
function loginAdmin ($username,$password){
    session_start();
    global $conn;
    $sql = "SELECT * FROM admins WHERE username = '$username' AND password = '$password' ";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) == 1){
        $_SESSION['username'] = $username;
        $_SESSION['admin_id'] = mysqli_fetch_assoc($result)['admin_id'];
        header("location: /amirfood/admin-side/dashboard.php");
    }
    else{
        header("location: /amirfood/admin-side/login.php?q=failed");

    }
}
function addFood ($name,$materials,$price,$img_src,$category,$admin_id){

global $conn;
$sql = "INSERT INTO foods (name,materials,price,img_src,category,admin_id) VALUES ('$name','$materials',$price,'$img_src','$category',$admin_id)";
$result = mysqli_query($conn,$sql);
if ($result){
    header("location: /amirfood/admin-side/dashboard.php");
}
else{
    header("location: /amirfood/admin-side/addFoodForm.php");

}
}

function updateCount ($condition,$food_id){
    global $conn;
    $number = 0;
    if ($condition == 'add'){
        $number = 1;
    }
    else{
        $number = -1;
    }
    $sql = "UPDATE foods SET count = count + $number  WHERE food_id = $food_id";
    mysqli_query($conn,$sql);
    header("location: /amirfood/admin-side/dashboard.php");
}