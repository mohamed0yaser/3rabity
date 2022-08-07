<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Edit Year</title>
  <link rel="stylesheet" href="styleyear.css">
</head>

<body>
  <div class="login-box">
    <form action="editYear-save.php" method="post">
      <h1>Edit Year</h1>
      <div class="user-box">
        <input type="text" placeholder="ID Year" name="idYear" required>
        <label>ID Year</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="Enter New Year Name" name="Name" required>
        <label>Enter New Year Number</label>
      </div>

      <button type="submit" name="save_bt">save</button>
      <a href="#">back</a>
    </form>
  </div>