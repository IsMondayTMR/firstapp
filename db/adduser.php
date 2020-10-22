<?php
    include_once './db.php';
    $first = $_POST['FirstName'];
    $last = $_POST['LastName'];
    $address = $_POST['HomeAddress'];
    $homephone = $_POST['Homephone'];
    $cellphone = $_POST['Cellphone'];
    
    $sql = "INSERT INTO user_272 ( first_name, last_name, home_address, home_phone, cell_phone) VALUES ('$first','$last','$address','$homephone','$cellphone');";
    mysqli_query($conn, $sql);
    header ("Location:../Users.php?add=success")
    ?>