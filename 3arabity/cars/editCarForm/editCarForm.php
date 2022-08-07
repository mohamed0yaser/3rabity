<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Edit Car</title>
  <link rel="stylesheet" href="stylecar.css">
</head>

<body>
  <div class="login-box">
    <form action="editCar-save.php" method="post">
      <h1>Edit Car</h1><br>
      <h2>------------------</h2>
      <div class="user-box">
        <input type="text" placeholder="ID" name="idCar" required>
        <label>ID</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="Image" name="image" required>
        <label>Image</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="model_id" name="modelID" required>
        <label>model_id</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="Color ID" name=" colorID" required="">
        <label>Color ID</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="plate_number" name="plateNum" required>
        <label>plate_number</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="year_id" name="yID" required>
        <label>year_id</label>
      </div>
      <div class="user-box">
        <input type="float" placeholder="price_per_hour" name="pPH" required>
        <label>price_per_hour</label>
      </div>
      <button type="submit">
        submit
      </button>
      <button type="reset">
        <a href="#"> back</a>
      </button>
    </form>
  </div>


</body>

</html>