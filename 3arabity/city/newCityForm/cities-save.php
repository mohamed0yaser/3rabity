<?php
$city = $_POST["cityName"];
//mysqli_connect('host', 'userName', 'password', 'databaseName')
$conn = mysqli_connect('localhost', 'root', '', '3rabity');

$sql = "INSERT INTO cities (name) VALUES('$city')";

mysqli_query($conn, $sql);

header("Location:http://localhost/3rabity/3arabity/city/citiesList/citiesList.php")
 ?>
