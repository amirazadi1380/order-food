<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>signup</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="./styles.css">

</head>
<body>
<div class="container">
   <?php if (isset($_GET['q']) && $_GET['q'] == 'failed') echo "رمز مطاقت ندارد"; ?>
      <div style="font-size: 50px; margin-left: 180px;">
        ساخت کاربر جدید
    </div>
    <a href="./login.php">log in</a>

      <form action="./controllers/createUser.php" method="post">
         <div class="form-row">
            <div class="input-data">
               <input type="text" name="username" required>
               <div class="underline"></div>
               <label for="">نام کاربری</label>
            </div>

         </div>
         <div class="form-row">
            <div class="input-data">
               <input type="text" required name="password">
               <div class="underline"></div>
               <label for="">رمز عبور</label>
            </div>
            <div class="input-data">
               <input type="text" name="confirmPassword" required>
               <div class="underline"></div>
               <label for="">تایید رمز عبور</label>
            </div>
            <div style="display: flex; justify-content:center; align-items:center;">
               <input type="radio" name="gender" value="female"><p style="font-size:10px;">female</p>
               <input type="radio" name="gender" value="male"><p style="font-size:10px;">male</p>
               <div class="underline"></div>
            </div>
         </div>
         <div class="form-row">
         <div class="input-data textarea">

            <br />
            <div class="form-row submit-btn">
               <div class="input-data">
                  <div class="inner"></div>
                  <input type="submit" value="ثبت">
               </div>
            </div>
            
      </form>
      </div>
  
</body>
</html>
