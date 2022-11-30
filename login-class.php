<?php

class login extends Dbh
{
    protected function getUser($email, $pwd)
    {
        
        $stmt = $this->connect()->prepare('SELECT authorPassword FROM author WHERE authorEmail = ? OR authorEmail = ?;');

        if (!$stmt->execute(array($pwd, $email))) {
            $stmt = null;
            header('location: index.php?error=stmtfailedtogetuserfromdatabase');
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header('location: index.php?error=authornotfound');
            exit();
        }
        
        $pwdHash = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $chkpwd = password_verify($pwd, $pwdHash[0]["authorPassword"]);
        


        if ($chkpwd == false) {
            $stmt = null;
            header('location: index.php?error=wrongpassword');
            exit();
        } elseif ($chkpwd == true) {
            echo "this is if true";
            $stmt = $this->connect()->prepare('SELECT * FROM author WHERE authorEmail = ? AND authorPassword = ?;');

            if (!$stmt->execute(array($email, $pwd))) {
                echo "if no statmement error";
                $stmt = null;
                header('location: index.php?error=stmtfailedtogetuser');
                exit();
            }

            if ($stmt->rowCount() == 0) {
                echo "row not found error";
                $stmt = null;
                header('locaton: index.php?error=usernotfound');
                exit();
            }
            echo "after error ifs";
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION['authorEmail'] = $user[0]['authorEmail'];
            $stmt = null;
        }
        $stmt = null;
    }
}
