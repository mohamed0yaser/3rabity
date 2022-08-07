<?php
$conn = mysqli_connect('localhost', 'root', '', '3rabity');
$sql = "SELECT * FROM years";
$data = mysqli_query($conn, $sql);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Years</title>
        <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>"Years List"</h1>
    <table class="years-table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Action</th>
        </tr>
      <thead>
      <tbody>
        <?php while ($year = mysqli_fetch_assoc($data)) {?>

          <tr>
              <td><?php echo $year["id"]; ?></td>
              <td><?php echo $year["name"]; ?></td>
              <td><button id="edit">Edit</button> <button id="del">Delete</button></td>
          </tr>

      <?php } ?>


      </tbody>

    </table>
  </body>
</html>
