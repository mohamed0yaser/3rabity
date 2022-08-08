<?php
$id = $_GET['id'];
$conn = mysqli_connect('localhost', 'root', '', '3rabity');
$sql = "SELECT * FROM departments WHERE id='$id'";
$data = mysqli_query($conn, $sql);
$department = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Edit Department</title>
  <link rel="stylesheet" href="styleBrand.css">
</head>

<body>
  <div class="login-box">
    <form action="editDepartment-save.php" method="post">
      <h1>Edit Department</h1>
      <div class="user-box">
        <input type="text" placeholder="ID Department" name="idDepartment" value="<?php echo $department['id'] ?>" required>
        <label>ID Department</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="Enter New Department Name" name="Name" value="<?php echo $department['name'] ?>" required>
        <label>Enter New Department Name</label>
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