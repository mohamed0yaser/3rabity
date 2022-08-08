<?php
$id = $_GET['id'];
$conn = mysqli_connect('localhost', 'root', '', '3rabity');
$sql = "SELECT * FROM cars WHERE id='$id'";
$data = mysqli_query($conn, $sql);
$sql1 = "SELECT * FROM models";
$data1 = mysqli_query($conn, $sql1);
$sql2 = "SELECT * FROM colors";
$data2 = mysqli_query($conn, $sql2);
$sql3 = "SELECT * FROM years";
$data3 = mysqli_query($conn, $sql3);
$car = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Edit Car</title>
  <link rel="stylesheet" href="stylecar.css">
</head>

<body>
  <div class="login-box">
    <form action="editCar-save.php" method="post">
      <h1>Edit Car</h1><br>
      <h2>------------------</h2>
      <div class="user-box">
        <input type="text" placeholder="ID" name="idCar" value="<?php echo $car['id'] ?>" required>
        <label>ID</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="Image" name="image" value="<?php echo $car['image'] ?>" required>
        <label>Image</label>
      </div>
      <div class="user-box" style="margin:auto;">
        <label>model</label><br><br>
        <select style="height: 50px; background: transparent; color:white;" name="modelID">
          <option style="color:black;">-- Please Chose Your model --</option>
          <?php while ($model = mysqli_fetch_assoc($data1)) { ?>
            <option style="color:black;" value="<?php echo $model['id'] ?>" <?php if ($car['model_id'] == $model['id']) { ?>selected <?php }  ?>><?php echo $model['name'] ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="user-box" style="margin:auto;">
        <label>color</label><br><br>
        <select style="height: 50px; background: transparent; color:white;" name="colorID">
          <option style="color:black;">-- Please Chose Your color --</option>
          <?php while ($color = mysqli_fetch_assoc($data2)) { ?>
            <option style="color:black;" value="<?php echo $color['id'] ?>" <?php if ($car['color_id'] == $color['id']) { ?>selected <?php }  ?>><?php echo $color['name'] ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="user-box">
        <input type="text" placeholder="plate_number" name="plateNum" value="<?php echo $car['plate_number'] ?>" required>
        <label>plate_number</label>
      </div>
      <div class="user-box" style="margin:auto;">
        <label>Year</label><br><br>
        <select style="height: 50px; background: transparent; color:white;" name="yID">
          <option style="color:black;">-- Please Chose Your Year --</option>
          <?php while ($year = mysqli_fetch_assoc($data3)) { ?>
            <option style="color:black;" value="<?php echo $year['id'] ?>" <?php if ($car['year_id'] == $year['id']) { ?>selected <?php }  ?>><?php echo $year['name'] ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="user-box">
        <input type="float" placeholder="price_per_hour" name="pPH" value="<?php echo $car['price_per_hour'] ?>" required>
        <label>price_per_hour</label>
      </div>
      <button type="submit">
        submit
      </button>
      <button type="reset">
        <a href="#"> back</a>
      </button>
    </form>
  </div>


</body>

</html>