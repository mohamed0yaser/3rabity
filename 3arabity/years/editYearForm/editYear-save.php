<?php
$id =  $_POST["idYear"];
$name =  $_POST["Name"];

$conn = mysqli_connect('localhost', 'root', '', '3rabity');

$sql = "UPDATE years SET name = '$name' WHERE id = '$id'";

mysqli_query($conn, $sql);


 ?>
