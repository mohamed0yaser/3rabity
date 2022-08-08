<?php

$conn = mysqli_connect('localhost', 'root', '', '3rabity');
$sql = "SELECT * FROM cars";
$car_list = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Cars</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>"Cars List"</h1>
  <table class="cars-table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Image</th>
        <th>ModelID</th>
        <th>ColorID</th>
        <th>PlateNumber</th>
        <th>YearID</th>
        <th>PricePerHour</th>
        <th>Action
        <th>
      </tr>
      <thead>
      <tbody>
        <?php while ($cars = mysqli_fetch_assoc($car_list)) {
          $id = $cars["id"];
        ?>
          <tr>
            <td><?php echo $cars["id"] ?></td>
            <td><?php echo $cars["image"] ?></td>
            <td><?php echo $cars["model_id"] ?></td>
            <td><?php echo $cars["color_id"] ?></td>
            <td><?php echo $cars["plate_number"] ?></td>
            <td><?php echo $cars["year_id"] ?></td>
            <td><?php echo $cars["price_per_hour"] ?></td>
            <td>
              <button id="del"><a style="color:white ;" href="http://localhost/3rabity/3arabity/cars/editCarForm/editCarForm.php?id=<?php echo $id ?>">EDIT</a></button>
              <button id="del"><a style="color:white ;" href="http://localhost/3rabity/3arabity/cars/delete-car.php?id=<?php echo $id ?>">Delete</a></button>
            </td>
          </tr>
        <?php  } ?>
        <tr>
          <td colspan="8">
            <center><button id="edit" style="width:200px ;"><a href="http://localhost/3rabity/3arabity/cars/newCar.php" style="color:white ;">Add New Car</a> </button></center>
          </td>
        </tr>
      </tbody>

  </table>
</body>

</html>