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
        <?php while ($model = mysqli_fetch_assoc($data)) {?>

          <tr>
              <td><?php echo $model["id"]; ?></td>
              <td><?php echo $model["name"]; ?></td>
              <td><?php echo $model["brand_id"]; ?></td>
              <td><button id="edit">Edit</button> <button id="del">Delete</button></td>
          </tr>

      <?php } ?>


      </tbody>

    </table>
  </body>
</html>
