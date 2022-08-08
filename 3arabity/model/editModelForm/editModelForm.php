<?php
$id = $_GET['id'];
$conn = mysqli_connect('localhost', 'root', '', '3rabity');
$sql = "SELECT * FROM models WHERE id='$id'";
$data = mysqli_query($conn, $sql);
$model = mysqli_fetch_assoc($data);
          $sql1 = "SELECT * FROM brands";
          $data1 = mysqli_query($conn, $sql1);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>New Model</title>
  <link rel="stylesheet" href="stylemodel.css">
</head>

<body>
  <div class="login-box">
    <form action="editmodel-save.php" method="POST">
      <h2>New Model</h2>
      <div class="user-box">
        <input type="text" placeholder="Enter Model ID" name="modelid" value="<?php echo $model['id'] ?>" required>
        <label>Enter Model ID</label>
      </div>
      <div class="user-box">
        <input type="text" placeholder="Enter Model Name" name="modelName" value="<?php echo $model['name'] ?>" required>
        <label>Enter Model Name</label>
      </div>
      <div class="user-box" style="margin:auto;">
        <label>Brand</label><br><br>
        <select style="height: 50px; background: transparent; color:white;" name="brandId">
          <option style="color:black;">-- Please Chose Your Brand --</option>
          <?php while ($brand = mysqli_fetch_assoc($data1)) { ?>
            <option style="color:black;" value="<?php echo $brand['id'] ?>" <?php if ($model['brand_id'] == $brand['id']) { ?>selected <?php }  ?>><?php echo $brand['name'] ?></option>
          <?php } ?>
        </select>
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