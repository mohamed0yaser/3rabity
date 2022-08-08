<?php
$id =  $_POST["idColor"];
$name =  $_POST["Name"];
$code = $_POST['colorId'];

$conn = mysqli_connect('localhost', 'root', '', '3rabity');

$sql = "UPDATE colors SET name = '$name' and color_id ='$code' WHERE id = '$id'";

mysqli_query($conn, $sql);


header("Location:http://localhost/3rabity/3arabity/color/colorsList/colorsList.php")
 ?>
