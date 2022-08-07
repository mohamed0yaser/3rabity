<?php
$id =  $_POST["idBrand"];
$name =  $_POST["Name"];

$conn = mysqli_connect('localhost', 'root', '', '3rabity');

$sql = "UPDATE brands SET name = '$name' WHERE id = '$id'";

mysqli_query($conn, $sql);

header("Location:http://localhost/3rabity/3arabity/brand/brandsList/brandsList.php");
 ?>
