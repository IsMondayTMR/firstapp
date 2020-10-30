<?php 
$last_visited_array = [];
$data = [];
$most_visited_display = [];
$highest = 0;

if(isset($_COOKIE['a'])){
    $data = $_COOKIE['a'];
    $data = stripslashes($data);
    $last_visited_array = json_decode($data,true);
    // $last_visited_array = (array)$last_visited_array;
}

if(isset($_COOKIE['most_visited_array'])){
    $new_most_visited_array = [];
    $most_data = $_COOKIE['most_visited_array'];
    $most_data = stripslashes($most_data);
    $new_most_visited_array = json_decode($most_data,true);
    $sort_array = $new_most_visited_array;
    arsort($sort_array);
 
}else{
    $most_visited_array = array('model1' => 0,'model2' => 0,'model3' => 0,'model4' => 0,'model5' => 0,'model6' => 0,'model7' => 0,'model8' => 0,'model9' => 0,'model10' => 0);
    $json = json_encode($most_visited_array);
    setcookie('most_visited_array', $json, time() + (86400*30),'/');
}
?>

<html>
    <head>
        <link rel="stylesheet" href="./css/styles.css">
        <link rel="stylesheet" href="./css/footer.css">
        <link rel="stylesheet" href="./css/grid.css">
        <script src="https://kit.fontawesome.com/58185f11b0.js" crossorigin="anonymous"></script>
        <title>Products</title>
    </head>
    <body>

        <header>
                <div class="header-container">
                    <div class="left-header-container">
                        <a href="index.php" class="left-header-link">Home</a>
                        <a href="Products.php" class="left-header-link">Products</a>
                        <a href="News.php" class="left-header-link">News</a>
                        <a href="AboutUs.php" class="left-header-link">About Us</a>

                    </div>
                    <div class="logo">
                        <h1>3D Art Gallary</h1>
                    </div>

                    <div class="right-header-container">

                        <a href="contacts.php" class="right-header-link">Contacts</a>
                        <a href="Help.php" class="right-header-link">Help</a>
                        <a href="Signin.php" class="right-header-link">Sign in</a>
                        <a href="./Join.php" class="right-header-link">Join</a>
                        <a href="./Users.php" class="right-header-link">Users</a>
                    </div>
                </div>
            </header>

            <main>
                <?php $array = explode("\n", file_get_contents('./product_info/name.txt'));?>
                    <ul class="row" style = "list-style-type:none; ">
                        <?php foreach ($array as $item => $value):?>
                            <li class="col-4">

                                <a href="./product/<?=$value?>.php"><?php echo $value?></a>
                                <p> price: $29.99</p>
                            </li>  
                            <?php endforeach; ?> 
                    </ul>
<!-- previous 5 visited site -->
                <a href = "./visitedpage/visited.php" class="visit" >last five visited(click here):</a>
                    <?php foreach ($last_visited_array as $item => $value):?>
                        <li class="col-4">

                        <a href="./product/<?=$value?>.php"><?php echo $value?></a>
                        <p> price: $29.99</p>
                        </li>  
                    <?php endforeach; ?> 
<!-- five most visited site -->
                <a href = "./visitedpage/visited.php" class="visit" >five most visited(click here):</a>

                    <?php $i=0?>
                    <?php foreach($sort_array as $item => $value):?>
                        <?php if($i<5):?>
                                <?php if($value>0):?>
                                    <li class="col-4">
                                        <a href="./product/<?=$item?>.php"><?php echo $item?></a>
                                        <p> price: $29.99</p>
                                        <p>visit : <?php echo $value;?></p>
                                    </li>  
                                <?php $i+=1;?>
                            <?php endif;?>
                        <?php endif;?>
                    <?php endforeach; ?> 
            </main>

            <footer class="contacts">

                    <?php $array = explode("\n", file_get_contents('info.txt'));?>
                    <ul class="contacts-list">
                    <?php foreach ($array as $item => $value):?>
                        <li class="contacts-list__item">
                            <p><?php echo $value?></p>
                        </li>  
                        <?php endforeach; ?> 
                    </ul>

                    <a href="mailto:bo.an.563641292@gmail.com" class="social-list__link"><i class="far fa-envelope"></i></a>

                    <a class="social-list__link" href="https://facebook.com"><i class="fab fa-facebook"></i></a>

                    <a class="social-list__link" href="https://twitter.com"><i class="fab fa-twitter"></i></a>

                    <a class="social-list__link" href="https://github.com/IsMondayTMR"><i class="fab fa-github"></i></a>


            </footer>
        <script src="index.js"></script>
    </body>
</html>