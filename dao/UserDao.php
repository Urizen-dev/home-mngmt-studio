<?php

include_once($_SERVER["DOCUMENT_ROOT"].'/models/User.php');

class UserDao extends User
{
    private $conn;
    private $table = 'users';

    public function __construct(PDO $db)
    {
        $this->conn = $db;
    }

    public function findAll() {
        $query = 'SELECT name, password, email FROM '.$this->table.'';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}