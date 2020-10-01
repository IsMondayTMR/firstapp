<html>
    <head>
        <link rel="stylesheet" href="./css/styles.css">
        <script src="https://kit.fontawesome.com/58185f11b0.js" crossorigin="anonymous"></script>
        <title>ArtGallary</title>
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
                </div>
            </div>
        </header>

        <main>
            <div class="search-container">
                <h1 class="search-container-title">Search your favorite art</h1>
                <p class="search-container-subtitle">We'll help you find the art you'll love</p>
                <input type="search" placeholder="Enter name or keywords you want to search" class="search-container-searchbar"></input>
            </div>

            <div class="grid-container">
                <h2 class="grid-container-title">We have the most listings and constant updates.</h2>
                <h2 class="grid-container-subtitle">So you'll never miss out</h2>
            
            </div>

            <div class="grid-list">

                    <a href="" class="grid-card">
                    <img src="./img/bo-an-a.jpg" alt="#" class="grid-card-image">
                    
                    </a>
                    
                    <a href="" class="grid-card">

                        <img src="./img/bo-an-fabric.jpg" alt="#" class="grid-card-image">
                    </a>

                    <a href="" class="grid-card">
                        <img src="./img/bo-an-nvrenzhe.png" alt="#" class="grid-card-image">
                    
                    </a>
                    
                    <a href="" class="grid-card">
                        <img src="./img/bo-an-jinshanshan.jpg" alt="#" class="grid-card-image">
                    
                    </a>

                    <!-- <a href="" class="grid-card">
                        <img src="./img/bo-an-suit.jpg" alt="#" class="grid-card-image">
                    </a> -->

                    <a href="" class="grid-card">
                        <img src="./img/bo-an-touxiang.jpg" alt="#" class="grid-card-image">
                    </a>
                    
            </div>
        </main>

        <footer class="contacts">
            <?php $array = explode("\n", file_get_contents('info.txt'));?>
            <ul class="contacts-list">
                <li class="contacts-list__item">
                    <p>Company: <?php echo $array[0]?></p>
                </li>
                <li class="contacts-list__item">
                    <p>Address: <?php echo $array[1]?></p>
                </li>
                <li class="contacts-list__item">
                    <p>Phone: <?php echo $array[2]?></p>
                </li>
                <li class="contacts-list__item">
                    <p>Course: <?php echo $array[3]?></p>
                </li>

                
            </ul>
        
            <a href="mailto:bo.an.563641292@gmail.com" class="social-list__link"><i class="far fa-envelope"></i></a>

            <a class="social-list__link" href="https://facebook.com"><i class="fab fa-facebook"></i></a>

            <a class="social-list__link" href="https://twitter.com"><i class="fab fa-twitter"></i></a>

            <a class="social-list__link" href="https://github.com/IsMondayTMR"><i class="fab fa-github"></i></a>
    

        </footer>
        <script src="index.js"></script>
    </body>
</html>