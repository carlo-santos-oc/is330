<?php
// function authIdExists($db, $email){
//     $query = "SELECT * FROM author WHERE authorEmail = ?;";
//     $statement = $db->prepare($query);
//     $email = $statement->fetchAll();
//     if($email){
//         header("location: signup.php?error=failedstatement");
//         $result = false;
//         return $result;
//     }
//     $statement->closeCursor();
    
    // mysqli_stmt_bind_param($statement, "ss", $email);
    // mysqli_stmt_execute($statement);

    // $resultData = mysqli_stmt_get_result($statement);

    // if($row = mysqli_fetch_assoc($resultData)){
    //     return $row;
    // }
    // else {
    //     $result = false;
    //     return $result;
    // }

    // mysqli_stmt_close($statement);
}

// function createUser($db, $firstname, $lastname, $email, $pwd){


//     $hashPW = password_hash($pwd, PASSWORD_DEFAULT);

//     $query = 'INSERT INTO author
//                  (firstName, lastName, authorEmail, authorPassword)
//               VALUES
//                  (:firstName, :lastName, :authorEmail, :authorPassword)';
//     $statement = $db->prepare($query);
//     $statement->bindValue(':firstName', $firstname);
//     $statement->bindValue(':lastName', $lastname);
//     $statement->bindValue(':authorEmail', $email);
//     $statement->bindValue(':authorPassword', $hashPW);
//     $statement->execute();
//     $statement->closeCursor();
// }