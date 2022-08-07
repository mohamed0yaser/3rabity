<?php
$conn = mysqli_connect('localhost', 'root', '', '3rabity');
$sql = "SELECT * FROM colors";
$data = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Color</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>"Color List"</h1>
  <table class="color-table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Color ID</th>
        <th>Action</th>
      </tr>
      <thead>
      <tbody>
        <?php while ($color = mysqli_fetch_assoc($data)) { ?>

          <tr>
            <td><?php echo $color["id"]; ?></td>
            <td><?php echo $color["name"]; ?></td>
            <td><?php echo $color["color_id"]; ?></td>
            <td><button id="edit"><a style="color:white ;" href="http://localhost/3rabity/3arabity/color/editColorForm/editColorForm.php">Edit</a> </button> <button id="del">Delete</button></td>
          </tr>

        <?php } ?>


      </tbody>

  </table>
</body>

</html>