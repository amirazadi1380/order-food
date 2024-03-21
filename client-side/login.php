<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="styles.css">
   <title>Document</title>
</head>

<body>

   <div class="container">
      <?php if (isset($_GET['q']) && ($_GET['q']) == 'failed') {
         echo "<h1 style='color:red; margin-left:200px;'>اطلاعات نادرست است</h1>";
      }
      ?>
      <div style="font-size: 50px; margin-left: 180px;">
         ورود به پنل ادمین
      </div>
      <a href="./signup.php">sign in</a>
      <form action="/amirfood/client-side/controllers/auth.php" method="post">
         <div class="form-row">
            <div class="input-data">
               <input type="text" required name="username">
               <div class="underline"></div>
               <label for="">نام کاربری</label>
            </div>

         </div>
         <div class="form-row">
            <div class="input-data">
               <input type="password" required name="password">
               <div class="underline"></div>
               <label for="">رمز عبور</label>
            </div>

         </div>
         <div class="form-row">
            <div class="input-data textarea">
               <br />
               <div class="form-row submit-btn">
                  <div class="input-data">
                     <div class="inner"></div>
                     <input type="submit" value="ورود">
                  </div>
               </div>
      </form>
   </div>
</body>

</html>