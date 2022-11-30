<?php

class Signup extends Dbh
{
    protected function setUser($fname, $lname, $email, $pwd)
    {
        $stmt = $this->connect()->prepare('INSERT INTO author
                 (firstName, lastName, authorEmail, authorPassword)
              VALUES
                 (?, ?, ?, ?);');

        $hashPW = password_hash($pwd, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($fname, $lname, $email, $hashPW))) {
            $stmt = null;
            header('location: index.php?error=stmtfailed');
            exit();
        }
        $stmt = null;

    }
    // protected function checkEmail($email)
    // {
    //     $stmt = $this->connect()->prepare('SELECT * FROM author WHERE authorEmail = ?;');

    //     if (!$stmt->execute($email)) {
    //         $stmt = null;
    //         header('location: index.php?error=stmtfailedemailexistsalready');
    //         exit();
    //     }

    //     $resultchk;
    //     if ($stmt->rowCount() > 0) {
    //         $resultchk = false;
    //     } else {
    //         $resultchk = true;
    //     }
    //     return $resultchk;
    // }
}
