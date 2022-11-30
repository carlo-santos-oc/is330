<?php

class Dbh {
    protected function connect(){
        try{
            $dsn = 'mysql:host=localhost;dbname=news';
            $username = 'root';
            $password = 'sesame';
            $db = new PDO($dsn, $username, $password);
            return $db;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            include('database_error.php');
            exit();
        }
    }
}

