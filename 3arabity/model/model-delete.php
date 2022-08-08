<?php
    $id = $_GET['id'];
    $conn= mysqli_connect('localhost','root','','3rabity');
    $sql="DELETE FROM models WHERE id='$id'";

    mysqli_query($conn,$sql);
header("Location:http://localhost/3rabity/3arabity/model/modelsList/modelsList.php");

    ?>