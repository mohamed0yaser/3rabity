<?php
$id = $_GET['id'];
$conn = mysqli_connect('localhost', 'root', '', '3rabity');
$sql = "SELECT * FROM colors WHERE id='$id'";
$data = mysqli_query($conn, $sql);
$color = mysqli_fetch_assoc($data);
?>
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
        <input type="text" placeholder="ID Color" name="idColor" value="<?php echo $color['id'] ?>" required>
        <label>ID Color</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="Enter New Color Name" name="Name" value="<?php echo $color['name'] ?>" required>
        <label>Enter New Color Name</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="#Enter New Color Code" name="colorId" value="<?php echo $color['color_id'] ?>">
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