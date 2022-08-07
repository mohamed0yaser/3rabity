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
         <th>Action<th>
       </tr>
      <thead>
      <tbody>
        <?php while ($cars = mysqli_fetch_assoc($car_list)) {?>
        <tr>
          <td><?php echo $cars["id"] ?></td>
          <td><?php echo $cars["image"] ?></td>
          <td><?php echo $cars["model_id"] ?></td>
          <td><?php echo $cars["color_id"] ?></td>
          <td><?php echo $cars["plate_number"] ?></td>
          <td><?php echo $cars["year_id"] ?></td>
          <td><?php echo $cars["price_per_hour"] ?></td>
          <td><button id="edit">Edit</button> <button id="del">Delete</button></td>
        </tr>
      <?php  } ?>

    </tbody>

  </table>
   </body>
 </html>
