<?php
$conn = mysqli_connect('localhost', 'root', '', '3rabity');
$sql = "SELECT * FROM cities";
$query = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>New Customer</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="login-box">
    <form action="customers-save.php" method="POST">
      <h2>New Customer</h2>
      <div class="user-box">
        <input type="text" name=" name" required="">
        <label>Username</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="your image" name="cI" required>
        <label>your image</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="Phone" name="cPhone" required>
        <label>Phone</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="Address" name="cAddress" required>
        <label>Address</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="Email" name="cEmail" required>
        <label>Email</label>
      </div>
      <div class="user-box">
        <input type="date" placeholder="Birth Date" name="cBdate" required>
      </div>
      <div class="user-box">
        <input type="text" placeholder="National ID" name="cNI" required>
        <label>National ID</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="National ID Image" name="cNII" required>
        <label>National ID Image</label>
      </div>
      <!--
      <div class="user-box">
        <input type="text" placeholder="city" name="CityID" required>
        <label>city</label>
      </div>-->
      <div class="user-box" style="margin:auto;">
        <label>city</label><br><br>
        <select style="height: 50px; background: transparent; color:white;" name="CityID">
          <option style="color:black;">-- Please Chose Your City --</option>
          <?php while ($city = mysqli_fetch_assoc($query)) { ?>
            <option style="color:black;" value="<?php echo $city['id'] ?>"><?php echo $city['name'] ?></option>
          <?php } ?>
        </select>
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