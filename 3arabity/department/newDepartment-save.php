<?php
$department = $_POST["departmentName"];
//mysqli_connect('host', 'userName', 'password', 'databaseName')
$conn = mysqli_connect('localhost', 'root', '', '3rabity');

$sql = "INSERT INTO departments (name) VALUES('$department')";

mysqli_query($conn, $sql);
header("Location:http://localhost/3rabity/3arabity/department/departmentList/departmentList.php");
 ?>
