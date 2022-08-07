<?php
$conn = mysqli_connect('localhost', 'root', '', '3rabity');
$sql = "SELECT * FROM cities";
$data = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Cities</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>"Cities List"</h1>

    <table class="cities-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Active</th>
            </tr>
            <thead>
            <tbody>
                <?php while ($city = mysqli_fetch_assoc($data)) {
                    $id = $city["id"]; ?>

                    <tr>
                        <td><?php echo $city["id"]; ?></td>
                        <td><?php echo $city["name"]; ?></td>
                        <td><button id="edit"><a style="color:white ;" href="http://localhost/3rabity/3arabity/city/editCityForm/editCityForm.php?id=<?php echo $id ?>">Edit</a>
                            </button> <button id="del"><a style="color:white ;" href="http://localhost/3rabity/3arabity/city/city-delete.php?id=<?php echo $id ?>">Delete</a></button></td>

                    </tr>


                <?php } ?>
                <tr>
                    <td colspan="3">
                        <center><button id="edit" style="width:200px ;"><a href="http://localhost/3rabity/3arabity/city/newCityForm/newCityForm.php" style="color:white ;">Add New City</a> </button></center>
                    </td>
                </tr>

            </tbody>

    </table>
</body>

</html>