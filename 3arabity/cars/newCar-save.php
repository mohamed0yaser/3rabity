<?php
$image = $_POST["image"];
$model_id = $_POST["modelID"];
$color_id = $_POST["colorID"];
$plate_number = $_POST["plateNum"];
$year_id = $_POST["yID"];
$price_per_hour = $_POST["pPH"];


$conn = mysqli_connect('localhost', 'root', '', '3rabity');

$sql = "INSERT INTO cars (image, model_id, color_id, plate_number, year_id, price_per_hour)
VALUES ('$image', '$model_id', '$color_id', '$plate_number', '$year_id', '$price_per_hour')";

mysqli_query($conn, $sql);
header("Location:http://localhost/3rabity/3arabity/cars/carsList/carsList.php");

 ?>
