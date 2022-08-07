<?php
$conn = mysqli_connect('localhost', 'root', '', '3rabity');
$sql = "SELECT * FROM customers";
$cust_list = mysqli_query($conn, $sql);
//$customers = mysqli_fetch_row($data);
//print_r ($city);
//echo $city[1];
//$customers = mysqli_fetch_assoc($data);
//echo $city["name"];

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Customers</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>"Customers List"</h1><br><br>
  <table class="customers-table">
    <thead>

      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Email</th>
        <th>Birth date</th>
        <th>City</th>
        <th>National ID</th>
        <th>Action</th>
      </tr>
      <thead>
      <tbody>

        <?php while ($customers = mysqli_fetch_assoc($cust_list)) {
          $id = $customers["id"]; ?>
          <tr>
            <td><?php echo $customers["id"] ?></td>
            <td><?php echo $customers["name"] ?></td>
            <td><?php echo $customers["phone"] ?></td>
            <td><?php echo $customers["address"] ?></td>
            <td><?php echo $customers["email"] ?></td>
            <td><?php echo $customers["bdate"] ?></td>
            <td><?php echo $customers["city_id"] ?></td>
            <td><?php echo $customers["id_number"] ?></td>
            <td><button id="edit"><a style="color:white ;" href="http://localhost/3rabity/3arabity/customer/editCustomerForm/editCustomerForm.php?id=<?php echo $id ?>">Edit</a></button>
              <button id="del"><a style="color:white ;" href="http://localhost/3rabity/3arabity/customer/customer-delete.php?id=<?php echo $id ?>">Delete</a></button>
            </td>
          </tr>
        <?php } ?>
        <tr>
          <td colspan="9">
            <center><button id="edit" style="width:200px ;"><a href="http://localhost/3rabity/3arabity/customer/newCustomerForm/newCustomerForm.php" style="color:white ;">Add New Customer</a> </button></center>
          </td>
        </tr>

      </tbody>

  </table>
</body>

</html>