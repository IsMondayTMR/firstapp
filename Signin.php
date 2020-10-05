<?php session_start(); /* Starts the session */
/* Check Login form submitted */
if(isset($_POST['Submit'])){
/* Define username and associated password array */
$logins = array('Alex' => '123456','username1' => 'password1','username2' => 'password2','admin'=>'1234');

/* Check and assign submitted Username and Password to new variable */
$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';

/* Check Username and Password existence in defined array */
if (isset($logins[$Username]) && $logins[$Username] == $Password){
/* Success: Set session variables and redirect to Protected page  */
$_SESSION['UserData']['Username']=$logins[$Username];
$_SESSION['check'] = true;
$_SESSION['checked'] = true;
header("location:contacts.php");
exit;
} else {
/*Unsuccessful attempt: Set error message */$msg="<span style='color:red'>Invalid Login Details</span>";
}
}
?>

<html>
    <head>
        <link rel="stylesheet" href="./css/styles.css">
        <link rel="stylesheet" href="./css/signin.css">
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>Sign in</title>
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


            <form action="" method="post" name="Login_Form">
                <table width="400" text-align="center" cellpadding="5" cellspacing="1" class="Table">
                    <?php if(isset($msg)){?>
                    <tr>
                    <td colspan="2" text-align="center" valign="top"><?php echo $msg;?></td>
                    </tr>
                    <?php } ?>
                    <tr>
                    <td colspan="2" text-align="left" valign="top"><h3>Login</h3></td>
                    </tr>
                    <tr>
                    <td text-align="right" valign="top">Username</td>
                    <td><input name="Username" type="text" class="Input"></td>
                    </tr>
                    <tr>
                    <td text-align="right">Password</td>
                    <td><input name="Password" type="password" class="Input"></td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
                    </tr>
                </table>
                </form>


       


        </main>

        <footer>

        </footer>
        <script src="index.js"></script>
    </body>
</html>

