<?php 
include '../../config.php';
function createUser ($username,$password,$gender){
    global $conn;
    $sql = "INSERT INTO users (username,password,gender) VALUES ('$username', '$password','$gender')";
    $result = mysqli_query($conn,$sql);
    if ($result){
        header("location: /amirfood/client-side/login.php");
    }
    else{
        header("location: /amirfood/client-side/signup.php");

    }
}
function loginUser ($username,$password){
    session_start();
    global $conn;
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) == 1){
        $_SESSION['username'] = $username;
        $_SESSION['user_id'] = mysqli_fetch_assoc($result)['user_id'];
        header("location: /amirfood/client-side/home.php");
    }
    else{
        header("location: /amirfood/client-side/login.php?q=failed");

    }
}

function orderFood ($name,$price,$user_id,$query){
    global $conn;
    $check_sql = "SELECT * FROM orders WHERE name = '$name' AND price = $price AND user_id = $user_id ";
    $result = mysqli_query($conn,$check_sql);
    if (mysqli_num_rows($result) > 0){
        if ($query == 'add'){
            $number = +1;
        }
        else{
            $number = -1;
        }
            $sql = "UPDATE orders SET count = count + $number WHERE name = '$name' AND price = $price AND user_id = $user_id";
        mysqli_query($conn,$sql);
        var_dump($number);
    }
    else{
        $sql = "INSERT INTO orders (name,price,user_id) VALUES ('$name',$price,$user_id)";
        mysqli_query($conn,$sql);
    }
    // header("location: ../home.php");
}

function deleteOrder($order_id){
    global $conn;
    $sql = "DELETE FROM orders WHERE order_id = $order_id";
    mysqli_query($conn,$sql);
    header("location: ../factor.php?q=success");
}