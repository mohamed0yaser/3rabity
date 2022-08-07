<?php
$id =  $_POST["idCity"];
$name =  $_POST["Name"];

$conn = mysqli_connect('localhost', 'root', '', '3rabity');

$sql = "UPDATE cities SET name = '$name' WHERE id = '$id'";

mysqli_query($conn, $sql);

header("Location:http://localhost/3rabity/3arabity/city/citiesList/citiesList.php")
 ?>
