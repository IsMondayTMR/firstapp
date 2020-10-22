<?php include_once "./db/db.php"?>
<html>
    <head>
        <link rel="stylesheet" href="./css/styles.css">
        <link rel="stylesheet" href="./css/footer.css">
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
              <?php /*$sql = "SELECT * FROM `user_272`;";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if($resultCheck > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo $row['first_name'];
                        }
                    }
                    else{
                        echo "no content";
                    }*/

              ?>
                <form action = "./db/adduser.php" method = "POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="FirstName">First Name</label>
                            <input type="text" class="form-control" id="FirstName" name ="FirstName" placeholder="First Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Last Name">Last Name</label>
                            <input type="text" class="form-control" id="LastName" name="LastName" placeholder="Last Name">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="HomeAddress">Address</label>
                            <input type="text" class="form-control" id="HomeAddress" name="HomeAddress" placeholder="1234 Main St">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="CellPhone">Cell Phone</label>
                            <input type="tel" class="form-control" id="CellPhone"  name="Cellphone"placeholder="123-456-7897" pattern="^(\+\d{1,2}\s?)?1?\-?\.?\s?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="Homephone">Home phone</label>
                            <input type="tel" class="form-control" id="Homephone"  name="Homephone" pattern="^(\+\d{1,2}\s?)?1?\-?\.?\s?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$" placeholder="123-456-7897">
                        </div>


                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
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