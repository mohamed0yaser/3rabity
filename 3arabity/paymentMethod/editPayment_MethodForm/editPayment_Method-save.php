<?php
$id =  $_POST["idPayment_Method"];
$name =  $_POST["Name"];


$conn = mysqli_connect('localhost', 'root', '', '3rabity');

$sql = "UPDATE payment_methods SET name = '$name' WHERE id = '$id'";

mysqli_query($conn, $sql);
header("Location:http://localhost/3rabity/3arabity/paymentMethod/payment_methodsList/payment_methodsList.php")


 ?>
