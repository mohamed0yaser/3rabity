<?php
$id = $_GET['id'];
$conn = mysqli_connect('localhost', 'root', '', '3rabity');
$sql = "SELECT * FROM cities WHERE id='$id'";
$data = mysqli_query($conn, $sql);
$city = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Edit City</title>
  <link rel="stylesheet" href="stylecity.css">
</head>

<body>

  <div class="login-box">
    <form action="editCity-save.php" method="post">
      <h1>Edit City</h1>
      <div class="user-box">
        <input type="text" placeholder="ID City" name="idCity" value="<?php echo $city['id'] ?>" required>
        <label>ID City</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="Enter New City Name" name="Name" value="<?php echo $city['name'] ?>" required>
        <label>Enter New City Name</label>
      </div>
      <button type="submit">
        submit
      </button>
      <button type="reset">
        <a href="#"> back</a>
      </button>
    </form>
  </div>