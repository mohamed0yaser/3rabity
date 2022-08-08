<?php
$image = $_POST["eImage"];
$name = $_POST["name"];
$phone = $_POST["ePhone"];
$address = $_POST["eAddress"];
$email = $_POST["eEmail"];
$department_id = $_POST["departID"];
$basic_salary = $_POST["eSalary"];

$conn = mysqli_connect('localhost', 'root', '', '3rabity');

$sql = "INSERT INTO employees(image, name, phone, address, email, department_id, basic_salary)
VALUES('$image', '$name', '$phone', '$address', '$email', '$department_id', '$basic_salary')";

mysqli_query($conn, $sql);
header("Location:http://localhost/3rabity/3arabity/employee/employeesList/employeesList.php");

 ?>
