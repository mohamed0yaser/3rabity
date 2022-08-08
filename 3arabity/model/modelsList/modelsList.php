<?php
$conn = mysqli_connect('localhost', 'root', '', '3rabity');
$sql = "SELECT * FROM models";
$data = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Model</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>"Model List"</h1>
  <table class="model-table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Brand ID</th>
        <th>Action</th>
      </tr>
      <thead>
      <tbody>
        <?php while ($model = mysqli_fetch_assoc($data)) { 
          $id= $model["id"];?>

          <tr>
            <td><?php echo $model["id"]; ?></td>
            <td><?php echo $model["name"]; ?></td>
            <td><?php echo $model["brand_id"]; ?></td>
            <td><button id="edit"><a style="color:white ;" href="http://localhost/3rabity/3arabity/model/editModelForm/editModelForm.php?id=<?php echo $id ?>">Edit</a></button>
              <button id="del"><a style="color:white ;" href="http://localhost/3rabity/3arabity/model/model-delete.php?id=<?php echo $id ?>">Delete</a></button>
            </td>
          </tr>
        <?php } ?>
        <tr>
          <td colspan="9">
            <center><button id="edit" style="width:200px ;"><a href="http://localhost/3rabity/3arabity/model/newModelForm.php" style="color:white ;">Add New Customer</a> </button></center>
          </td>
        </tr>
      </tbody>

  </table>
</body>

</html>