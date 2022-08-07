<?php
    $id = $_GET['id'];
    $conn= mysqli_connect('localhost','root','','3rabity');
    $sql="DELETE FROM customers WHERE id='$id'";

    mysqli_query($conn,$sql);
    header("Location:http://localhost/3rabity/3arabity/customer/customersList/customersList.php")
    ?>