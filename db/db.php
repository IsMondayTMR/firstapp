<?php
$servername = "boan56364129240429.ipagemysql.com";
$username = "ismondaytmr";
$password = "Tmdsb!@213";
$dbName = "272db";

// Create connection
  $conn = new mysqli($servername, $username, $password,$dbName);

  // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
?>