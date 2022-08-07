<?php
$model = $_POST["modelName"];
$brand = $_POST["brandId"];
//mysqli_connect('host', 'userName', 'password', 'databaseName')
$conn = mysqli_connect('localhost', 'root', '', '3rabity');

$sql = "INSERT INTO models (name,brand_id) VALUES('$model','$brand')";

mysqli_query($conn, $sql);

echo "<h1> new Model has been added successfully.</h1>";
 ?>
