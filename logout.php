<?php session_start(); /* Starts the session */
session_destroy(); /* Destroy started session */
$_SESSION['checked'] = false;
header("location:./Signin.php");  /* Redirect to login page */exit;
?>


 <?php //session_start(); /* Starts the session */
// /* Check Login form submitted */
// // $check = false;
// if(isset($_POST['Submit'])){
// /* Define username and associated password array */
// $logins = array('Alex' => '123456','username1' => 'password1','username2' => 'password2');

// /* Check and assign submitted Username and Password to new variable */
// $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
// $Password = isset($_POST['Password']) ? $_POST['Password'] : '';

// /* Check Username and Password existence in defined array */
// if (isset($logins[$Username]) && $logins[$Username] == $Password){
// /* Success: Set session variables and redirect to Protected page  */
// $_SESSION['UserData']['Username']=$logins[$Username];
// $Check = true;
// header("location:Signin.php");
// exit;
// } else {
// /*Unsuccessful attempt: Set error message */$msg="<span style='color:red'>Invalid Login Details</span>";
// }
// }
?>