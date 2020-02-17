<?php

include_once($_SERVER["DOCUMENT_ROOT"].'/models/User.php');

class UserDao
{
    private $conn;
    // private $table = 'users';

    private const READ_USERS = 'SELECT name, password, email FROM `users`';
    private const READ_USER_BY_NAME = 'SELECT name, password, email FROM `users` WHERE name = :name LIMIT 0,1';
    private const CREATE_USER = 'INSERT INTO users (name, password, email) VALUES (:name, :password, :email)';

    public function __construct(PDO $db)
    {
        $this->conn = $db;
    }

    public function findAll() {
        $query = self::READ_USERS;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function findUserByName(string $name)
    {
        $user = new User('','','');
        $query = self::READ_USER_BY_NAME;        
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->execute();
        
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row['name'] == null) {
            http_response_code(404);
            die(json_encode(array("error" => "User with name: ".$name." not found")));
        } else {
            $user->setName($row['name']);
            $user->setPassword($row['password']);
            $user->setEmail($row['email']);
        }
        return $user;
    }

    private function createUser(string $name, string $password, string $email)
    {
        
    }
}