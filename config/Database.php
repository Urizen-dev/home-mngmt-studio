<?php

class Database
{
    private $host = 'mysql';
    private $dbName = 'home_mngmt_studio';
    private $username = "user123";
    private $password = "zaq1@WSX";
    private $conn;

    public function connect()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->dbName, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection Error: '.$e->getMessage();
        }

        return $this->conn;
    }
}