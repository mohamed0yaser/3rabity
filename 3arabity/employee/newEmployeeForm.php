<?php
$conn = mysqli_connect('localhost', 'root', '', '3rabity');
$sql = "SELECT * FROM departments";
$query = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>New Employee</title>
  <link rel="stylesheet" href="styleemployee.css">
</head>

<body>
  <div class="login-box">
    <form action="newEmployee-save.php" method="POST">
      <h2>New Employee</h2>
      <div class="user-box">
        <input type="text" name=" name" placeholder="Username" required="">
        <label>Username</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="your image" name="eImage" required>
        <label>your image</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="Phone" name="ePhone" required>
        <label>Phone</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="Address" name="eAddress" required>
        <label>Address</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="Email" name="eEmail" required>
        <label>Email</label>
      </div>
      <div class="user-box" style="margin:auto;">
        <label>Department</label><br><br>
        <select style="height: 50px; background: transparent; color:white;" name="departID">
          <option style="color:black;">-- Please Chose Your Department --</option>
          <?php while ($Department = mysqli_fetch_assoc($query)) { ?>
            <option style="color:black;" value="<?php echo $Department['id'] ?>"><?php echo $Department['name'] ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="user-box">
        <input type="text" placeholder="Basic Salary" name="eSalary" required>
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
</body>

</html>