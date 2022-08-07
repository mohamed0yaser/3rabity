<?php
$year = $_POST["yearName"];
//mysqli_connect('host', 'userName', 'password', 'databaseName')
$conn = mysqli_connect('localhost', 'root', '', '3rabity');

$sql = "INSERT INTO years (name) VALUES('$year')";

mysqli_query($conn, $sql);

echo "<h1> new Year has been added successfully.</h1>";
 ?>
