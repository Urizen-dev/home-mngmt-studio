<?php

class User
{
    private $conn;
    private $table_name = "users";

    public $name;
    public $password;      // password encrypted in sha1 algorythm
    public $email;

    public function __construct($db)
    {
        $this->conn =$db;
    }

    // here goes create method
}