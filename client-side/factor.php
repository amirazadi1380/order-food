<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="./home.php">home</a>
    <?php
    if (isset($_GET['q'])) {
        if ($_GET['q'] == 'success') {
            echo "با موفقیت آیتم حذف شد";
        } else {
            echo "خطایی رخ داده است";
        }
    }
    require '../config.php';
    session_start();
    $user_id = $_SESSION['user_id'];
    $totall_price_sql = "SELECT SUM(price * count) AS totall_price FROM orders WHERE user_id = $user_id";
    $result = mysqli_query($conn, $totall_price_sql);
    $totall_price = mysqli_fetch_assoc($result)['totall_price'];
    $sql = "SELECT * FROM orders WHERE user_id = $user_id";
    $my_result = mysqli_query($conn, $sql);
    $allOrders = [];
    if (mysqli_num_rows($my_result) > 0) {
        while ($row = mysqli_fetch_assoc($my_result)) {
            $allOrders[] = $row;
        }
    }
    foreach ($allOrders as $order) {
    ?>
        <div>
            <h3><?php echo $order['name']; ?></h3>
            <h3><?php echo $order['price']; ?>قیمت</h3>
            <p> <?php echo $order['count']; ?>تعداد </p>
            <button><a href=<?php echo "/amirfood/client-side/controllers/deleteOrder.php?orderId=$order[order_id]"; ?>>حذف</a></button>
        </div>
    <?php } ?>
    <h1><?php echo $totall_price; ?>قیمت کل</h1>
</body>

</html>