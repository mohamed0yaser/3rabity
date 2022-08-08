<?php
$id =  $_POST["modelid"];
$name =  $_POST["modelName"];
$brand = $_POST['brandId'];

$conn = mysqli_connect('localhost', 'root', '', '3rabity');

$sql = "UPDATE models SET name = '$name' , brand_id ='$brand' WHERE id = '$id'";

mysqli_query($conn, $sql);


header("Location:http://localhost/3rabity/3arabity/model/modelsList/modelsList.php")
 ?>
