<?php
$brand = $_POST["brandName"];
//mysqli_connect('host', 'userName', 'password', 'databaseName')
$conn = mysqli_connect('localhost', 'root', '', '3rabity');

$sql = "INSERT INTO brands (name) VALUES('$brand')";

mysqli_query($conn, $sql);

header("Location:http://localhost/3rabity/3arabity/brand/brandsList/brandsList.php");
?>