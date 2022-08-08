<?php
$conn = mysqli_connect('localhost', 'root', '', '3rabity');
$sql = "SELECT * FROM brands";
$query = mysqli_query($conn, $sql);

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
    <form action="newModel-save.php" method="POST">
      <h2>New Model</h2>
      <div class="user-box">
        <input type="text" placeholder="Enter Model Name" name="modelName" required>
        <label>Enter Model Name</label>
      </div>
      <div class="user-box" style="margin:auto;">
        <label>Brand</label><br><br>
        <select style="height: 50px; background: transparent; color:white;" name="brandId">
          <option style="color:black;">-- Please Chose Your Brand --</option>
          <?php while ($brand = mysqli_fetch_assoc($query)) { ?>
            <option style="color:black;" value="<?php echo $brand['id'] ?>"><?php echo $brand['name'] ?></option>
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