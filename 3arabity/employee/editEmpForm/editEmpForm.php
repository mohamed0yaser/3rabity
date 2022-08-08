<?php
$id = $_GET['id'];
$conn = mysqli_connect('localhost', 'root', '', '3rabity');
$sql = "SELECT * FROM employees WHERE id='$id'";
$data = mysqli_query($conn, $sql);
$emp = mysqli_fetch_assoc($data);
$sql1 = "SELECT * FROM departments ";
$data1 = mysqli_query($conn, $sql1);
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
    <form action="editEmp-save.php" method="post">
      <h2>New Employee</h2>
      <div class="user-box">
        <input type="text" name=" ID" placeholder="ID" value="<?php echo $emp['id'] ?>" required>
        <label>ID</label>
      </div>
      <div class="user-box">
        <input type="text" name=" name" placeholder="Username" value="<?php echo $emp['name'] ?>" required>
        <label>Username</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="your image" name="eImage" value="<?php echo $emp['image'] ?>" required>
        <label>your image</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="Phone" name="ePhone" value="<?php echo $emp['phone'] ?>" required>
        <label>Phone</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="Address" name="eAddress" value="<?php echo $emp['address'] ?>" required>
        <label>Address</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="Email" name="eEmail" value="<?php echo $emp['email'] ?>" required>
        <label>Email</label>
      </div>
      <div class="user-box" style="margin:auto;">
        <label>Department</label><br><br>
        <select style="height: 50px; background: transparent; color:white;" name="departID">
          <option style="color:black;">-- Please Chose Your Department --</option>
          <?php while ($Department = mysqli_fetch_assoc($data1)) { ?>
            <option style="color:black;" value="<?php echo $Department['id'] ?>" <?php if ($emp['department_id'] == $Department['id']) { ?>selected <?php }  ?>><?php echo $Department['name'] ?></option>
          <?php } ?>
        </select>
      </div>
      <br>
      <div class="user-box">
        <input type="text" placeholder="Basic Salary" name="eSalary" value="<?php echo $emp['basic_salary'] ?>" required>
        <label>Basic Salary</label>
      </div>
      <button type="submit">
        submit
      </button>
      <button>
        back
      </button>
    </form>
  </div>