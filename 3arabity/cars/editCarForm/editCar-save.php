<?php

$id = $_POST["idCar"];
$image = $_POST["image"];
$model_id = $_POST["modelID"];
$color_id = $_POST["colorID"];
$plate_number = $_POST["plateNum"];
$year_id = $_POST["yID"];
$price_per_hour = $_POST["pPH"];

$conn = mysqli_connect('localhost', 'root', '', '3rabity');

$sql = "UPDATE cars SET image = '$image',model_id='$model_id',color_id='$color_id',plate_number='$plate_number',year_id='$year_id',price_per_hour='$price_per_hour' WHERE id = '$id'";

mysqli_query($conn, $sql);
header("Location:http://localhost/3rabity/3arabity/cars/carsList/carsList.php");
 ?>
