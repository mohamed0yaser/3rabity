<?php

$conn = mysqli_connect('localhost', 'root', '', '3rabity');
$sql = "SELECT * FROM employees";
$emp_list = mysqli_query($conn, $sql);


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Employees</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>"Employees List"</h1>
  <table class="employees-table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Email</th>
        <th>Department ID</th>
        <th>Basic Salary</th>
        <th>Action</th>
      </tr>
      <thead>
      <tbody>
        <?php while ($employees = mysqli_fetch_assoc($emp_list)) {
          $id = $employees["id"] ?>
          <tr>
            <td><?php echo $employees["id"] ?></td>
            <td><?php echo $employees["image"] ?></td>
            <td><?php echo $employees["name"] ?></td>
            <td><?php echo $employees["phone"] ?></td>
            <td><?php echo $employees["address"] ?></td>
            <td><?php echo $employees["email"] ?></td>
            <td><?php echo $employees["department_id"] ?></td>
            <td><?php echo $employees["basic_salary"] ?></td>
            <td><button id="edit"><a style="color:white ;" href="http://localhost/3rabity/3arabity/employee/editEmpForm/editEmpForm.php?id=<?php echo $id ?>">Edit</a></button>
              <button id="del"><a style="color:white ;" href="http://localhost/3rabity/3arabity/employee/emp-delete.php?id=<?php echo $id ?>">Delete</a></button>
            </td>
          <?php } ?>
          <tr>
            <td colspan="9">
              <center><button id="edit" style="width:200px ;"><a href="http://localhost/3rabity/3arabity/employee/newEmployeeForm.php" style="color:white ;">Add New Customer</a> </button></center>
            </td>
          </tr>
      </tbody>

  </table>
</body>

</html>