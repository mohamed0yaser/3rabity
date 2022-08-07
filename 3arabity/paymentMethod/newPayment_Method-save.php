<?php
$payment_method = $_POST["Payment_MethodName"];
//mysqli_connect('host', 'userName', 'password', 'databaseName')
$conn = mysqli_connect('localhost', 'root', '', '3rabity');

$sql = "INSERT INTO payment_methods (name) VALUES('$payment_method')";

mysqli_query($conn, $sql);

echo "<h1> new Payment_Method has been added successfully.</h1>";
 ?>
