    <?php
    session_start();
    if (isset($_SESSION['username'])){
        echo "<h1>$_SESSION[username]</h1>";
    } 
    else{
        header("location: /amirfood/admin-side/login.php");
    }
    ?>
