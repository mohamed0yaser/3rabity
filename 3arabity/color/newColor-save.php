<?php
$color = $_POST["colorName"];
//mysqli_connect('host', 'userName', 'password', 'databaseName')
$conn = mysqli_connect('localhost', 'root', '', '3rabity');

$sql = "INSERT INTO colors (name) VALUES('$color')";

mysqli_query($conn, $sql);

echo "<h1> new Color has been added successfully.</h1>";
 ?>
