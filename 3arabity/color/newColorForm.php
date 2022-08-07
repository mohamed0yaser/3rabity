<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>New Color</title>
  <link rel="stylesheet" href="stylecolor.css">
</head>

<body>
  <div class="login-box">
    <form action="newColor-save.php" method="POST">
      <h2>New Color</h2>
      <div class="user-box">
        <input type="text" placeholder="Enter Color Name" name="colorName" required>
        <label>Enter Color Name</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="#Enter Color Code" name="colorId" >
        <label>#Enter Color Code</label>
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