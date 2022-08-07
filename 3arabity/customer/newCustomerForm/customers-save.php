<?php
$name = $_POST["name"] ;
$image = $_POST["cI"];
$phone = $_POST["cPhone"] ;
$address = $_POST["cAddress"] ;
$email = $_POST["cEmail"] ;
$bdate = $_POST["cBdate"] ;
$id_number = $_POST["cNI"];
$id_image = $_POST["cNII"];
$city_id = $_POST["CityID"] ;


$conn = mysqli_connect('localhost', 'root', '', '3rabity');

$sql = "INSERT INTO customers(name,image, phone, address, email, bdate, city_id, id_number,id_image)
VALUES ('$name','$image', '$phone', '$address', '$email', '$bdate', '$city_id', '$id_number','$id_image')";

mysqli_query($conn, $sql);

header("Location:http://localhost/3rabity/3arabity/customer/customersList/customersList.php")
 ?>
