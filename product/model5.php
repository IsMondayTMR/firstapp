<?php 
    $last_visited_array = [];
    $data = [];
    $model_id = 'model5';
    if(isset($_COOKIE['a'])){
        $data = $_COOKIE['a'];
        $data = stripslashes($data);
        $last_visited_array = json_decode($data,true);
        $last_visited_array = (array)$last_visited_array;
        
    }
    array_push($last_visited_array,$model_id);
    if(count($last_visited_array)>5){
        // print_r("larger than 5");
        array_shift($last_visited_array);
    }
    $json = json_encode($last_visited_array);
    setcookie('a', $json, time() + (3600),'/');

    if(isset($_COOKIE['most_visited_array'])){
        $D_most_visited_array = $_COOKIE['most_visited_array'];
        // print_r($D_most_visited_array);
        $D_most_visited_array = stripslashes($D_most_visited_array);
        $most_visited_array = json_decode($D_most_visited_array,true);
        foreach ($most_visited_array as $key => $value){
            if($key == $model_id ){
                $most_visited_array[$key] = $most_visited_array[$key]+1;
            }
        }
        // print_r($most_visited_array);
    }
    $most_json = json_encode($most_visited_array);
    setcookie('most_visited_array', $most_json, time() + (3600),'/');
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

      

            <main>
              
                <a href = "../Products.php">Back</a>
                <img 
                    src ="../img/bo-an-a.jpg" 
                    style = 
                    "display: block;
                    max-width: 100%;
                    height: 400px;
                    object-fit: cover;
                    position: relative;"
                />  
                <h2>Mage Stuff</h2>
                <p>from WOW</p>     
            </main>


        <script src="index.js"></script>
    </body>
</html>