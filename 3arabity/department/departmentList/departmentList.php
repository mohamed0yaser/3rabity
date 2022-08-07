<?php
$conn = mysqli_connect('localhost', 'root', '', '3rabity');
$sql = "SELECT * FROM departments";
$data = mysqli_query($conn, $sql);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Department</title>
        <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>"Department List"</h1>
    <table class="department-table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Action</th>
        </tr>
      <thead>
      <tbody>
        <?php while ($department = mysqli_fetch_assoc($data)) {?>

          <tr>
              <td><?php echo $department["id"]; ?></td>
              <td><?php echo $department["name"]; ?></td>
              <td><button id="edit">Edit</button> <button id="del">Delete</button></td>
          </tr>

      <?php } ?>


      </tbody>

    </table>
  </body>
</html>
