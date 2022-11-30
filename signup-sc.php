<?php

// Get submit data 
if(isset($_POST["submit"])){
    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    // Signup class 
    include 'db-class.php';
    include 'signup.class.php';
    include 'signup-ctrl.class.php';
    $signup = new SignupCtrl($fname, $lname, $email, $pwd);

    $signup->signupUser();
}

header('location: index.php?error=none');


// Error handling 

// Go back to frontpage 

// Get form data
// $firstName = filter_input(INPUT_POST, 'firstname');
// $lastName = filter_input(INPUT_POST, 'lastname');
// $email = filter_input(INPUT_POST, 'email');
// $pwd = filter_input(INPUT_POST, 'pwd');

    // require_once 'admin.php';
    // require_once 'function-sc.php';

    // if (authIdExists($db, $email) !== false) {
    //     header("loacation: signup.php?error=authorexists");
    //     echo 'auth exists';
    //     exit();
    // }

// createUser ($db, $firstname, $lastname, $email, $pwd);

// $hashPW = password_hash($pwd, PASSWORD_DEFAULT);

// $query = 'INSERT INTO author
//                  (firstName, lastName, authorEmail, authorPassword)
//               VALUES
//                  (:firstname, :lastname, :email, :pwd)';
// $statement = $db->prepare($query);
// $statement->bindValue(':firstname', $firstName);
// $statement->bindValue(':lastname', $lastName);
// $statement->bindValue(':email', $email);
// $statement->bindValue(':pwd', $hashPW);
// $statement->execute();
// $statement->closeCursor();

    // header("location: signup.php");
