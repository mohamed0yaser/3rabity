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
        <?php while($employees = mysqli_fetch_assoc($emp_list)) { ?>
        <tr>
            <td><?php echo $employees["id"] ?></td>
            <td><?php echo $employees["image"] ?></td>
            <td><?php echo $employees["name"] ?></td>
            <td><?php echo $employees["phone"] ?></td>
            <td><?php echo $employees["address"] ?></td>
            <td><?php echo $employees["email"] ?></td>
            <td><?php echo $employees["department_id"] ?></td>
            <td><?php echo $employees["basic_salary"] ?></td>
            <td><button id="edit">Edit</button> <button id="del">Delete</button></td>
        </tr>
      <?php } ?>

      </tbody>

    </table>
  </body>
</html>
