<?php
$id=$_POST["ID"];
$image = $_POST["eImage"];
$name = $_POST["name"];
$phone = $_POST["ePhone"];
$address = $_POST["eAddress"];
$email = $_POST["eEmail"];
$department_id = $_POST["departID"];
$basic_salary = $_POST["eSalary"];

$conn = mysqli_connect('localhost', 'root', '', '3rabity');

$sql = "UPDATE employees SET image ='$image', name ='$name', phone='$phone', address ='$address', email='$email', department_id ='$department_id', basic_salary='$basic_salary' WHERE id = '$id'";

mysqli_query($conn, $sql);

header("Location:http://localhost/3rabity/3arabity/employee/employeesList/employeesList.php");
?>