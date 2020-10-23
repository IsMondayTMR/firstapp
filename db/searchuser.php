<?php
    include_once './db.php';
    $var = $_POST['search'];
    session_start();
    
    $sql = "SELECT first_name, last_name, home_address, home_phone, cell_phone  
            FROM `user_272` WHERE first_name = '$var' OR last_name = '$var' OR home_address = '$var' OR home_phone = '$var' OR cell_phone = '$var';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    $result_array = [];
    // print_r($array['first_name']);

    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            array_push($result_array,$row);
        }
        // <?php foreach ($array as $item => $value)
    }
    else{
        echo "no content";
    }
    $_SESSION['result'] = $result_array;
    header ("Location:../Users.php?add=success");
    ?>