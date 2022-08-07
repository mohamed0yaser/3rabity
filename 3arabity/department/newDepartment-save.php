<?php
$department = $_POST["departmentName"];
//mysqli_connect('host', 'userName', 'password', 'databaseName')
$conn = mysqli_connect('localhost', 'root', '', '3rabity');

$sql = "INSERT INTO departments (name) VALUES('$department')";

mysqli_query($conn, $sql);

echo "<h1> new Department has been added successfully.</h1>";
 ?>
