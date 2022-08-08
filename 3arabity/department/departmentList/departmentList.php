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
        <?php while ($department = mysqli_fetch_assoc($data)) {
          $id = $department['id'];        ?>

          <tr>
            <td><?php echo $department["id"]; ?></td>
            <td><?php echo $department["name"]; ?></td>
            <td>
              <button id="edit"><a style="color:white ;" href="http://localhost/3rabity/3arabity/department/editDepartmentForm/editDepartmentForm.php?id=<?php echo $id ?>">Edit</a></button>
              <button id="del"><a style="color:white ;" href="http://localhost/3rabity/3arabity/department/department-delete.php?id=<?php echo $id ?>">Delete</a></button>
            </td>
          </tr>

        <?php } ?>

        <tr>
          <td colspan="3">
            <center><button id="edit" style="width:200px ;"><a href="http://localhost/3rabity/3arabity/department/newDepartmentForm.php" style="color:white ;">Add New Department</a> </button></center>
          </td>
        </tr>
      </tbody>

  </table>
</body>

</html>