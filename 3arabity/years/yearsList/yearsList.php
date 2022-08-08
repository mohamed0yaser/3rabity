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
        <?php while ($year = mysqli_fetch_assoc($data)) {
          $id= $year["id"]; ?>

          <tr>
            <td><?php echo $year["id"]; ?></td>
            <td><?php echo $year["name"]; ?></td>
            <td><button id="edit"><a style="color:white ;" href="http://localhost/3rabity/3arabity/years/editYearForm/editYearForm.php?id=<?php echo $id ?>">Edit</a></button>
              <button id="del"><a style="color:white ;" href="http://localhost/3rabity/3arabity/years/year-delete.php?id=<?php echo $id ?>">Delete</a></button>
            </td>
          </tr>
        <?php } ?>
        <tr>
          <td colspan="9">
            <center><button id="edit" style="width:200px ;"><a href="http://localhost/3rabity/3arabity/years/newYearForm.php" style="color:white ;">Add New Customer</a> </button></center>
          </td>
        </tr>
      </tbody>

  </table>
</body>

</html>