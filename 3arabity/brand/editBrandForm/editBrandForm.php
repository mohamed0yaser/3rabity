<?php
$id = $_GET['id'];
$conn = mysqli_connect('localhost', 'root', '', '3rabity');
$sql = "SELECT * FROM brands WHERE id='$id'";
$data = mysqli_query($conn, $sql);
$brand = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Edit Brand</title>
  <link rel="stylesheet" href="styleBrand.css">
</head>

<body>
  <div class="login-box">
    <form action="editBrand-save.php" method="post">
      <h1>Edit Brand</h1>
      <div class="user-box">
        <input type="text" placeholder="ID Brand" name="idBrand" value="<?php echo $brand['id'] ?>" required>
        <label>ID Brand</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="Enter New Brand Name" name="Name" value="<?php echo $brand['name'] ?>" required>
        <label>Enter New Brand Name</label>
      </div>
      <button type="submit">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        submit
      </button>
      <button type="reset">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <a href="#"> back</a>
      </button>
    </form>
  </div>