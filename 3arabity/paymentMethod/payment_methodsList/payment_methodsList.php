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
        <?php while ($payment_method = mysqli_fetch_assoc($data)) {
          $id = $payment_method["id"]; ?>

          <tr>
            <td><?php echo $payment_method["id"]; ?></td>
            <td><?php echo $payment_method["name"]; ?></td>
            <td><button id="edit"><a style="color:white ;" href="http://localhost/3rabity/3arabity/paymentMethod/editPayment_MethodForm/editPayment_MethodForm.php?id=<?php echo $id ?>">Edit</a></button>
              <button id="del"><a style="color:white ;" href="http://localhost/3rabity/3arabity/paymentMethod/payment_methods-delete.php?id=<?php echo $id ?>">Delete</a></button>
            </td>
          </tr>
        <?php } ?>
        <tr>
          <td colspan="9">
            <center><button id="edit" style="width:200px ;"><a href="http://localhost/3rabity/3arabity/paymentMethod/newpaymentMethodForm.php" style="color:white ;">Add New Customer</a> </button></center>
          </td>
        </tr>
      </tbody>

  </table>
</body>

</html>