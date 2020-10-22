<?php ///* Starts the session */
/* Check Login form submitted */
// $check = $_SESSION['checked'];
// if(!$check){
// header("location:Signin.php");
// } else{
// }
// if(isset($_POST['Submit'])){

//     header("location:./logout.php");
//     exit;
//     }
?>
<html>
    <head>
        <link rel="stylesheet" href="./css/styles.css">
        <link rel="stylesheet" href="./css/footer.css">

        <script src="https://kit.fontawesome.com/58185f11b0.js" crossorigin="anonymous"></script>
        <title>Contacts</title>
    </head>
    <body>

        <header>
            <div class="header-container">
                <div class="left-header-container">
                    <a href="./index.php" class="left-header-link">Home</a>
                    <a href="./Products.php" class="left-header-link">Products</a>
                    <a href="./News.php" class="left-header-link">News</a>
                    <a href="./AboutUs.php" class="left-header-link">About Us</a>

                </div>
                <div class="logo">
                    <h1>3D Art Gallary</h1>
                </div>

                <div class="right-header-container">

                    <a href="./contacts.php" class="right-header-link">Contacts</a>
                    <a href="./Help.php" class="right-header-link">Help</a>
                    <a href="./Signin.php" class="right-header-link">Sign in</a>
                    <a href="./Join.php" class="right-header-link">Join</a>
                    <a href="./Users.php" class="right-header-link">Users</a>
            </div>
        </header>

        <main>
                <ul >
                    <?php $array = explode("\n", file_get_contents('Contacts.txt'));?>
                    <?php foreach ($array as $item => $value):?>
                        <li class=>
                            <p><?php print_r($value)?></p>
                        </li>  
                        <?php endforeach; ?> 
                </ul>
            <!-- <form action="" method="post" name="Login_Form">
                <input name="Submit" type="submit" value="Logout" class="Button3"></td>
            </form> -->
           
        </main>

        <footer class="contacts">

            <ul class="contacts-list">
                <?php $array = explode("\n", file_get_contents('info.txt'));?>
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