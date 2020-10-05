<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portfolio</title>
        
        <script src="https://kit.fontawesome.com/58185f11b0.js" crossorigin="anonymous"></script>
        
         
        <link rel="stylesheet" href="css/AboutUs.css">

        <!-- Update these with your own fonts -->
        <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:400,900|Source+Sans+Pro:300,900&display=swap" rel="stylesheet">

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
                    <!-- <div class="logo-text">
                        <h1>3D Art Gallary</h1>
                    </div> -->

                    <div class="right-header-container">

                        <a href="./contacts.php" class="right-header-link">Contacts</a>
                        <a href="./Help.php" class="right-header-link">Help</a>
                        <a href="./Signin.php" class="right-header-link ">Sign in</a>
                        <a href="./Join.php" class="right-header-link">Join</a>
                </div>
        </header>

        <!-- Introduction -->
        <section class="intro" id="home">
            <h1 class="section__title section__title--intro">
                Hi, I am <strong>Bo</strong>
            </h1>
            <p class="section__subtitle section__subtitle--intro">front-end dev</p>
            <img src="./img/gundam_avater.jpg" alt="a picture of gundam_avater" class="intro__img">
        </section>

        <section class="my-services" id="services">
            <h2 class="section__title section__title--services">What I do</h2>

            <div class="services">
                    <div class="service">
                        <h3>Design + Digital Sculpting</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                            consequat.</p>
                    </div><!-- close service-->

                    <div class="service">
                        <h3>Frontend development</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                            consequat.</p>
                    </div><!-- close service-->

                    <div class="service">
                        <h3> WorldPress</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                            consequat.</p>
                    </div> <!-- close service-->
            </div> <!-- close services-->

            <a href="#work" class="btn">My Work</a>
        </section>

        <!-- about me -->
        <section class="about-me" id="about">
            <h2 class="section__title section__title--about">Who I am</h2>
            <p class="section__subtitle section__subtitle--about">Frontend Developer</p>
            
            <div class="about-me__body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                    consequat.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                    consequat.</p>
            </div>

            <img src="./img/gundam_avater2.jpg" alt="gundam_avater2" class="about-me__img">
        </section>
        <!--/aboutme -->

        <!-- my work -->
        <section class="my-work" id="work">
            <h2 class="section__title section__title--work">My work</h2>
            <p class="section__subtitle section__subtitle--work">A selection of my range of work</p>

            <div class="portfolio">
                <!-- item 1 -->
                <a href="portfolio-item.html" class="portfolio__item">
                    <img src="./img/bo-an-a.jpg" alt="" class="portfolio__img">
                </a>

                <!-- item 2 -->
                <a href="portfolio-item.html" class="portfolio__item">
                    <img src="./img/bo-an-fabric.jpg" alt="" class="portfolio__img">
                </a>

                <!-- item 3 -->
                <a href="portfolio-item.html" class="portfolio__item">
                    <img src="./img/bo-an-jinshanshan.jpg" alt="" class="portfolio__img">
                </a>

                <!-- item 4 -->
                <a href="portfolio-item.html" class="portfolio__item">
                    <img src="./img/bo-an-nvrenzhe.png" alt="" class="portfolio__img">
                </a>

                <!-- item 5 -->
                <a href="portfolio-item.html" class="portfolio__item">
                    <img src="./img/bo-an-touxiang.jpg" alt="" class="portfolio__img">
                </a>

                <a href="portfolio-item.html" class="portfolio__item">
                    <img src="./img/bo-an-suit.jpg" alt="" class="portfolio__img">
                </a>

                <!-- item 6
                <a href="#" class="portfolio__item">
                    <img src="img/Gn-0000.jpg" alt="" class="portfolio__img">
                </a> -->
            </div>

        </section>

        <!-- footer -->
   
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
        <script src="js/index.js"></script>
    </body>
</html>