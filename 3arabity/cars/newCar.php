<?php

$conn = mysqli_connect('localhost', 'root', '', '3rabity');
$sql1 = "SELECT * FROM models";
$data1 = mysqli_query($conn, $sql1);
$sql2 = "SELECT * FROM colors";
$data2 = mysqli_query($conn, $sql2);
$sql3 = "SELECT * FROM years";
$data3 = mysqli_query($conn, $sql3);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>New Car</title>
    <link rel="stylesheet" href="stylecar.css">
</head>

<body>
    <div class="login-box">
        <form action="newCar-save.php" method="POST">
            <h2>New Car</h2>
            <div class="user-box">
                <input type="text" placeholder="Image" name="image" required>
                <label>Image</label>
            </div>
            <div class="user-box" style="margin:auto;">
                <label>model</label><br><br>
                <select style="height: 50px; background: transparent; color:white;" name="modelID">
                    <option style="color:black;">-- Please Chose Your model --</option>
                    <?php while ($model = mysqli_fetch_assoc($data1)) { ?>
                        <option style="color:black;" value="<?php echo $model['id'] ?>"><?php echo $model['name'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="user-box" style="margin:auto;">
                <label>color</label><br><br>
                <select style="height: 50px; background: transparent; color:white;" name="colorID">
                    <option style="color:black;">-- Please Chose Your color --</option>
                    <?php while ($color = mysqli_fetch_assoc($data2)) { ?>
                        <option style="color:black;" value="<?php echo $color['id'] ?>"><?php echo $color['name'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <br>
            <div class="user-box">
                <input type="text" placeholder="plate_number" name="plateNum" required>
                <label>plate_number</label>
            </div>
            <<div class="user-box" style="margin:auto;">
                <label>Year</label><br><br>
                <select style="height: 50px; background: transparent; color:white;" name="yID">
                    <option style="color:black;">-- Please Chose Your Year --</option>
                    <?php while ($year = mysqli_fetch_assoc($data3)) { ?>
                        <option style="color:black;" value="<?php echo $year['id'] ?>"><?php echo $year['name'] ?></option>
                    <?php } ?>
                </select>
    </div>
    <br>
    <div class="user-box">
        <input type="float" placeholder="price_per_hour" name="pPH" required>
        <label>price_per_hour</label>
    </div>
    <button type="submit">
        submit
    </button>
    <button type="reset">
        <a href="#"> back</a>
    </button>
    </form>
    </div>
</body>

</html>