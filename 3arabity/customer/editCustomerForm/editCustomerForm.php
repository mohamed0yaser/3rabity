<?php
$id = $_GET['id'];
$conn = mysqli_connect('localhost', 'root', '', '3rabity');
$sql = "SELECT * FROM cities";
$sql1 = "SELECT * FROM customers WHERE id='$id'";
$data1 = mysqli_query($conn, $sql1);
$data = mysqli_query($conn, $sql);
$cust = mysqli_fetch_assoc($data1);


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Edit Customer</title>
  <link rel="stylesheet" href="stylee.css">
</head>

<body>
  <div class="login-box">
    <form action="editcustomer-save.php" method="POST">
      <h2>Edit Customer</h2>
      <div class="user-box">
        <input type="text" placeholder='Enter the ID' name=" cID" value="<?php echo $cust['id'] ?>" required="">
      </div>
      <div class="user-box">
        <input type="text" placeholder='New Username' name=" cName" value="<?php echo $cust['name'] ?>" required="">
      </div>
      <div class="user-box">
        <input type="text" placeholder="New your image" name="cI" value="<?php echo $cust['image'] ?>">
      </div>
      <div class="user-box">
        <input type="text" placeholder="New Phone" name="cPhone" value="<?php echo $cust['phone'] ?>" required>
      </div>
      <div class="user-box">
        <input type="text" placeholder="New Address" name="cAddress" value="<?php echo $cust['address'] ?>" required>
      </div>
      <div class="user-box">
        <input type="text" placeholder="New Email" name="cEmail" value="<?php echo $cust['email'] ?>" required>
      </div>
      <div class="user-box">
        <input type="date" placeholder="New Birth Date" name="cBdate" value="<?php echo $cust['bdate'] ?>" required>
      </div>
      <div class=" user-box">
        <input type="text" placeholder="New National ID" name="cNI" value="<?php echo $cust['id_number'] ?>" required>
      </div>
      <div class="user-box">
        <input type="text" placeholder="New National ID Image" name="cNII" value="<?php echo $cust['id_image'] ?>">
      </div>
      <!--
      <div class="user-box">
        <input type="text" placeholder="city" name="CityID" required>
        <label>city</label>
      </div>-->
      <div class="user-box" style="margin:auto;">
        <select style="height: 50px; background: transparent; color:white;" name="CityID" value="<?php echo $cust['city_id'] ?>">
          <option style="color:black;" disabled selected>-- Please Chose Your New City --</option>
          <?php while ($city = mysqli_fetch_assoc($data)) { ?>
            <option style="color:black;" value="<?php echo $city['id'] ?>" <?php if ($cust['city_id'] == $city['id']) { ?>selected <?php }  ?>><?php echo $city['name'] ?></option>
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