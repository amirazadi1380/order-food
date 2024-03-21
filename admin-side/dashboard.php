<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>


    </script>
</head>

<body>
    <?php
    include '../config.php';
    include '../profile.php';
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
        <div style="border:1px solid black; margin: 5px; width:300px; background:black; color:white; ">
            <h2><?php echo  $food['name']; ?></h2>
            <img style="width: 100px;" src=<?php echo "./images/" . $food['img_src']; ?> alt="pic">
            <p><?php echo $food['materials']; ?></p>
            <h2><?php echo  $food['price']; ?></h2>
            <h2><?php echo  $food['category']; ?></h2>
            <button><a href=<?php echo "/amirfood/admin-side/controllers/updateCount.php?q=minus&foodId=$food[food_id]"; ?>>-</a></button>
            <button><a href=<?php echo "/amirfood/admin-side/controllers/updateCount.php?q=add&foodId=$food[food_id]"; ?>>+</a></button>
            <p><span>تعداد : </span><?php 
                if ($food['count'] != 0){
                    echo $food['count'];
                }
                else{
                    echo "اتمام موجودی";
                }
            ?></p>
        </div>
        <?php } ?>
    </div>
    dashboard
    <a href="signup.php">ادمین جدید</a>
    <a href="logout.php">خروج</a>
    <a href="addFoodForm.php">اضافه کردن غذا</a>
</body>

</html>