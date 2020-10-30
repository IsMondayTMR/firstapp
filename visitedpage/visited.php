<?php 
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
 
}
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

    <a href = "../Products.php">Back</a>
<!-- previous 5 visited site -->
<h3>last five visited:</h3>
            <?php if(isset($_COOKIE['a'])):?>
                    <?php foreach ($last_visited_array as $item => $value):?>
                        <li class="col-4">

                        <a href="./product/<?=$value?>.php"><?php echo $value?></a>
                        <p> price: $29.99</p>
                        </li>  
                    <?php endforeach; ?> 
            <?php endif;?>
<!-- five most visited site -->
                    <h3>five most visited:</h3>
                <?php if(isset($_COOKIE['most_visited_array'])):?>
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
                <?php endif;?>

        <script src="index.js"></script>
    </body>
</html>