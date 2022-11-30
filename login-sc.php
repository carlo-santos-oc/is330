<?php
// Get submit data 
if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    // Login class 
    include 'db-class.php';
    include 'login-class.php';
    include 'login-ctrl.class.php';
    $login = new loginCtrl($email, $pwd);
    
    $login->loginUser();
    header('location: index.php?error=none');
}

echo "this is login-sc";