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
        <?php while ($color = mysqli_fetch_assoc($data)) {
          $id = $color["id"]; ?>

          <tr>
            <td><?php echo $color["id"]; ?></td>
            <td><?php echo $color["name"]; ?></td>
            <td><?php echo $color["color_id"]; ?></td>
            <td>
              <button id="edit"><a style="color:white ;" href="http://localhost/3rabity/3arabity/color/editColorForm/editColorForm.php?id=<?php echo $id ?>">Edit</a> </button>
              <button id="edit"><a style="color:white ;" href="http://localhost/3rabity/3arabity/color/color-delete.php?id=<?php echo $id ?>">Delete</a> </button>
            </td>
          </tr>

        <?php } ?>
        <tr>
          <td colspan="4">
            <center><button id="edit" style="width:200px ;"><a href="http://localhost/3rabity/3arabity/color/newColorForm.php" style="color:white ;">Add New Color</a> </button></center>
          </td>
        </tr>

      </tbody>

  </table>
</body>

</html>