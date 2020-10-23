<?php include_once "./db/db.php";
session_start();
$result_array = [];
$click = false;
if(isset($_POST['search'])) { 
    $click = true;
} 
?>
<html>
    <head>
        <link rel="stylesheet" href="./css/styles.css">
        <link rel="stylesheet" href="./css/footer.css">
        <link rel="stylesheet" href="./css/grid.css">
        <script src="https://kit.fontawesome.com/58185f11b0.js" crossorigin="anonymous"></script>
        <title>News</title>
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
              
                <form action = "./db/adduser.php" method = "POST" >
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="FirstName">First Name</label>
                            <input type="text" class="form-control" id="FirstName" name ="FirstName" placeholder="First Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Last Name">Last Name</label>
                            <input type="text" class="form-control" id="LastName" name="LastName" placeholder="Last Name" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="HomeAddress">Address</label>
                            <input type="text" class="form-control" id="HomeAddress" name="HomeAddress" placeholder="1234 Main St" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="CellPhone">Cell Phone</label>
                            <input type="tel" class="form-control" id="CellPhone"  name="Cellphone"placeholder="123-456-7897" pattern="^(\+\d{1,2}\s?)?1?\-?\.?\s?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="Homephone">Home phone</label>
                            <input type="tel" class="form-control" id="Homephone"  name="Homephone" pattern="^(\+\d{1,2}\s?)?1?\-?\.?\s?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$" placeholder="123-456-7897" required>
                        </div>


                    </div>
                    <input type="submit" class="btn btn-primary" value = "add" ></input>
                    <br>

                    
                </form>

                <form action = "./db/searchuser.php" method = "POST">
                        <input type="search" placeholder="Enter name or keywords you want to search" name ="search"></input>
                        <input type="submit" class="btn btn-primary" value = "search" name ="button"></input>
                </form>

                <div class="row">

                    
                    <div class="col-4">first name</div>
                    <div class="col-4">last name</div>
                    <div class="col-4">home address</div>
                    <div class="col-4">home phone</div>
                    <div class="col-4">cell phone</div>
                </div>
                <?php if((!isset($_session['result']))){
                                $result_array = $_SESSION['result'] ;
                            }
                            ?>
                <?php if(isset($result_array)):?>
                    <?php foreach ($result_array as $item => $value):?>
                        <div class="row">
                            <div class="col-4"><?php echo $value['first_name']?></div>
                            <div class="col-4"><?php echo $value['last_name']?></div>
                            <div class="col-4"><?php echo $value['home_address']?></div>
                            <div class="col-4"><?php echo $value['home_phone']?></div>
                            <div class="col-4"><?php echo $value['cell_phone']?></div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>  
                    
                        
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