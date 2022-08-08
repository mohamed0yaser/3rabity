<?php
$id =  $_POST["idDepartment"];
$name =  $_POST["Name"];

$conn = mysqli_connect('localhost', 'root', '', '3rabity');

$sql = "UPDATE departments SET name = '$name' WHERE id = '$id'";

mysqli_query($conn, $sql);
header("Location:http://localhost/3rabity/3arabity/department/departmentList/departmentList.php");

 ?>
