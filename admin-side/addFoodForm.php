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
      <div style="font-size: 50px; margin-left: 200px;">
      <h3>
         اضافه کردن غذا 
      </h3>
      </div>
      <form action="/amirfood/admin-side/controllers/addFood.php" method="post" enctype="multipart/form-data">
         <div class="form-row">
            <div class="input-data">
               <input type="text" required name="name">
               <div class="underline"></div>
               <label for="">نام غذا</label>
            </div>

         </div>
         <div class="form-row">
            <div class="input-data">
               <input type="text" required name="materials">
               <div class="underline"></div>
               <label for="">مواد استفاده شده</label>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data">
               <input type="number" required name="price">
               <div class="underline"></div>
               <label for="">قیمت</label>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data">
               <input type="file" required name="image">
               <div class="underline"></div>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data">
               <select name="category">
                  <option value="pizza">پیتزا</option>
                  <option value="sandwich">ساندویج</option>
                  <option value="appetizer">پیش غذا</option>
                  <option value="drink">نوشیدنی</option>
               </select>
               <div class="underline"></div>
            </div>
         </div>
         <div class="form-row">
         <div class="input-data textarea">
            <br />
            <div class="form-row submit-btn">
               <div class="input-data">
                  <div class="inner"></div>
                  <input type="submit" value="اضافه کردن">
               </div>
            </div>
      </form>
      </div>
</body>
</html>
