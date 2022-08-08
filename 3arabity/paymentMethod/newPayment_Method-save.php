<?php
$payment_method = $_POST["Payment_MethodName"];
//mysqli_connect('host', 'userName', 'password', 'databaseName')
$conn = mysqli_connect('localhost', 'root', '', '3rabity');

$sql = "INSERT INTO payment_methods (name) VALUES('$payment_method')";

mysqli_query($conn, $sql);

header("Location:http://localhost/3rabity/3arabity/paymentMethod/payment_methodsList/payment_methodsList.php")
 ?>
