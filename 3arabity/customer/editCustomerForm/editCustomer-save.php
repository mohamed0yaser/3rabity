<?php
$id= $_POST['cID'];
$name = $_POST["cName"];
$image = $_POST["cI"];
$phone = $_POST["cPhone"];
$address = $_POST["cAddress"];
$email = $_POST["cEmail"];
$date = $_POST["cBdate"];
$id_number = $_POST["cNI"];
$id_image = $_POST["cNII"];
$city_id = $_POST["CityID"];



$conn = mysqli_connect('localhost', 'root', '', '3rabity');

$sql = "UPDATE customers SET  image='$image',id_image='$id_image',name = '$name',phone='$phone',address='$address',email='$email',bdate='$date',id_number='$id_number',city_id='$city_id' WHERE id = '$id'";

mysqli_query($conn, $sql);

header("Location:http://localhost/3rabity/3arabity/customer/customersList/customersList.php")


 ?>
