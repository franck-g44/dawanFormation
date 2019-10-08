<?php

class DatabaseConnexion{

    private $dsn;
    private $username;
    private $password;

    public function _construct(string $dsn, string $username, srting $password){

        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;


    }

    


    public function connect(){

        new PDO($this->dsn, $this->username, $this->password);
    }
}