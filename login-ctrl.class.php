<?php

class loginCtrl extends login
{

    private $email;
    private $pwd;

    public function __construct($email, $pwd)
    {
        $this->email = $email;
        $this->pwd = $pwd;
        
    }

    public function loginUser()
    {
        // login function halts here
        $this->getUser($this->email, $this->pwd);
        
    }

}
