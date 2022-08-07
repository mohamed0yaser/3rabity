<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Edit Color</title>
  <link rel="stylesheet" href="stylecolor.css">
</head>

<body>
  <div class="login-box">
    <form action="editColor-save.php" method="post">
      <h1>Edit Color</h1>
      <div class="user-box">
        <input type="text" placeholder="ID Color" name="idColor" required>
        <label>ID Color</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="Enter New Color Name" name="Name" required>
        <label>Enter New Color Name</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="#Enter New Color Code" name="colorId">
        <label>#Enter New Color Code</label>
      </div>
      <button type="submit">
        submit
      </button>
      <button type="reset">
        <a href="#"> back</a>
      </button>
    </form>
  </div>