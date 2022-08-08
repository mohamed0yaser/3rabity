<?php
$year = $_POST["yearName"];
//mysqli_connect('host', 'userName', 'password', 'databaseName')
$conn = mysqli_connect('localhost', 'root', '', '3rabity');

$sql = "INSERT INTO years (name) VALUES('$year')";

mysqli_query($conn, $sql);

header("Location:http://localhost/3rabity/3arabity/years/yearsList/yearsList.php"); ?>
