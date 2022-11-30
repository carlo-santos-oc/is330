<?php

class SignupCtrl extends Signup 
{

    private $fname;
    private $lname;
    private $email;
    private $pwd;

    public function __construct($fname, $lname, $email, $pwd)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->email = $email;
        $this->pwd = $pwd;
    }

    public function signupUser()
    {
        // if ($this->emailTaken() == false) {
        //     // echo "Invalid email";
        //     header('location: index.php?error=email');
        //     exit();
        // }
        $this->setUser($this->fname, $this->lname, $this->email, $this->pwd);
    }

    private function invalidEmail()
    {
        $result;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    // private function emailTaken()
    // {
    //     $result;
    //     if (!$this->checkEmail($this->email)) {
    //         $result = false;
    //     } else {
    //         $result = true;
    //     }
    //     return $result;
    // }
}
