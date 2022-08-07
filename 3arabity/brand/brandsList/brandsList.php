<?php
$conn = mysqli_connect('localhost', 'root', '', '3rabity');
$sql = "SELECT * FROM brands";
$data = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Brands</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>"Brands List"</h1>
  <table class="brands-table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Action</th>
      </tr>
      <thead>
      <tbody>
        <?php while ($brand = mysqli_fetch_assoc($data)) {
          $id = $brand["id"];
        ?>

          <tr>
            <td><?php echo $brand["id"]; ?></td>
            <td><?php echo $brand["name"]; ?></td>
            <td><button id="edit"><a style="color:white ;" href="http://localhost/3rabity/3arabity/brand/editBrandForm/editBrandForm.php?id=<?php echo $id ?>">Edit</a></button>
              <button id="del"><a style="color:white ;" href="http://localhost/3rabity/3arabity/brand/brand-delete.php?id=<?php echo $id ?>">Delete</a></button>
            </td>
          </tr>

        <?php } ?>

        <tr>
          <td colspan="3">
            <center><button id="edit" style="width:200px ;"><a href="http://localhost/3rabity/3arabity/brand/newBrandForm.php" style="color:white ;">Add New Brand</a> </button></center>
          </td>
        </tr>
      </tbody>

  </table>
</body>

</html>



C:\xampp\htdocs\3rabity\3arabity\brand