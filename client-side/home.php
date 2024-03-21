<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <script>
        let number = 0
        const addOrder = (id) => {
            let xhr = new XMLHttpRequest();
            xhr.open("GET", "/amirfood/client-side/controllers/orderFood.php?q=add&foodId=" + id, true)
            xhr.send();
        }
        const minusOrder = (id) => {
            let xhr = new XMLHttpRequest();
            xhr.open("GET", "/amirfood/client-side/controllers/orderFood.php?q=minus&foodId=" + id, true)
            xhr.send();
        }
    </script>

</head>

<body>
   <?php include '../profile.php'; ?>
   <a href="./factor.php">فاکتور</a>
   <div class="home">
   <?php
    include '../config.php';
    $sql = "SELECT * FROM foods";
    $result = mysqli_query($conn, $sql);
    $foods = [];
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $foods[] = $row;
        }
    }
    foreach ($foods as $food) {
        ?>
        <div style="border:1px solid black; margin: 5px; width:300px; height: 300px; background:black; color:white; border-radius: 10px; display: flex; flex-direction: column; justify-content: center; align-items: center; ">
            <h2><?php echo  $food['name']; ?></h2>
            <img style="width: 100px;" src=<?php echo "../admin-side/images/" . $food['img_src']; ?> alt="pic">
            <p><?php echo $food['materials']; ?></p>
            <h2><?php echo  $food['price']; ?></h2>
            <h2><?php echo  $food['category']; ?></h2>
            <button style="width: 60px; height:30px; background:white; cursor:pointer;" onclick="addOrder(<?php echo $food['food_id']; ?>)">+</button>
            <button style="width: 60px; height:30px; background:white; cursor:pointer;" onclick="minusOrder(<?php echo $food['food_id']; ?>)">-</button>
            <p><?php
                if ($food['count'] == 0) { echo "اتمام موجودی";}
                ?></p>
        </div>
        <?php } ?>
    </div>
    <a href="./controllers/logout.php">خروج</a>
    </body>

</html>