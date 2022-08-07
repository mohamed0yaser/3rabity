<?php
$id =  $_POST["idPayment_Method"];
$name =  $_POST["Name"];


$conn = mysqli_connect('localhost', 'root', '', '3rabity');

$sql = "UPDATE payment_method SET name = '$name' WHERE id = '$id'";

mysqli_query($conn, $sql);


 ?>
