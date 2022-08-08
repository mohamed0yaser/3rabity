<?php
$color = $_POST["colorName"];
//mysqli_connect('host', 'userName', 'password', 'databaseName')
$conn = mysqli_connect('localhost', 'root', '', '3rabity');

$sql = "INSERT INTO colors (name) VALUES('$color')";

mysqli_query($conn, $sql);


header("Location:http://localhost/3rabity/3arabity/color/colorsList/colorsList.php") 
?>
