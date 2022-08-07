<?php
$conn = mysqli_connect('localhost', 'root', '', '3rabity');
$sql = "SELECT * FROM payment_methods";
$data = mysqli_query($conn, $sql);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Payment Method</title>
        <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>"Payment Method List"</h1>
    <table class="payment_method-table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Action</th>
        </tr>
      <thead>
      <tbody>
        <?php while ($payment_method = mysqli_fetch_assoc($data)) {?>

          <tr>
              <td><?php echo $payment_method["id"]; ?></td>
              <td><?php echo $payment_method["name"]; ?></td>
              <td><button id="edit">Edit</button> <button id="del">Delete</button></td>
          </tr>

      <?php } ?>


      </tbody>

    </table>
  </body>
</html>
