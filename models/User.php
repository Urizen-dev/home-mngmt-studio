<?php

class User
{
    private $name;
    private $password;      // password encrypted in sha1 algorythm
    private $email;

    // public function __construct() {}

    public function __construct(
        string $name,
        string $password,
        string $email
    ) {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
}