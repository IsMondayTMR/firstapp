<?php
    include './db/db.php';
    $ch = curl_init();
    // $fp = fopen("userfromlyn.php", "w");
    // curl_setopt($ch, CURLOPT_FILE, $fp);
    // curl_setopt($ch, CURLOPT_HEADER, 0);
        // curl_exec($ch);
    // curl_close($ch);
    // fclose($fp);
    curl_setopt($ch, CURLOPT_URL,'http://lyn272.net/AllTheUsers.php');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $contents = curl_exec ($ch);
    curl_close ($ch);
    $sql = "SELECT  *
            FROM `user_272`;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    $All = [];
    // print_r($array['first_name']);

    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            array_push($All,$row);
        }
        // <?php foreach ($array as $item => $value)
    }
    else{

    }
    // $_SESSION['result'] = $result_array;
    // header ("Location:../Users.php?add=success");

    ?>

<html>
    <head>
        <link rel="stylesheet" href="./css/styles.css">
        <link rel="stylesheet" href="./css/footer.css">
        <link rel="stylesheet" href="./css/grid.css">
        <script src="https://kit.fontawesome.com/58185f11b0.js" crossorigin="anonymous"></script>
        <title>Users</title>
    </head>
    <body>
            <a href = "./Users.php">Back</a>
            <h2>List from art gallary</h2>
                <?php if(isset($All)):?>
                    <?php if(!empty($All)):?>
                        <div class="row">
                        <div class="col-4">first name</div>
                        <div class="col-4">last name</div>
                        <div class="col-4">home address</div>
                        <div class="col-4">home phone</div>
                        <div class="col-4">cell phone</div>
                        </div>
                        <?php foreach ($All as $item => $value):?>
                            <div class="row">
                                <div class="col-4"><?php echo $value['first_name']?></div>
                                <div class="col-4"><?php echo $value['last_name']?></div>
                                <div class="col-4"><?php echo $value['home_address']?></div>
                                <div class="col-4"><?php echo $value['home_phone']?></div>
                                <div class="col-4"><?php echo $value['cell_phone']?></div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>  
                <?php endif; ?>

                <h2>List from lyn's fashion</h2>
                <?php 
                // if(is_readable("userfromlyn.php")){
                
                //     echo file_get_contents( "userfromlyn.php" ); // get the contents, and echo it out.
              
                //     }else{
                //     echo sprintf('file %s does not exist or is not readable',"userfromlyn.php");
                //     }
                    echo $contents;
                    ?>  
                    
                        
            </main>
        <script src="index.js"></script>
    </body>
</html>