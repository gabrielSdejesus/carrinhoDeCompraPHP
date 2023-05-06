<?php

class user
{
    private $id;
    private $first_name;
    private $last_name;
    private $email;
    private $username;
    private $hashed_password;


    public function __construct($args = [])
    {
        $this->first_name = $args['first_name'] ?? '';
        $this->last_name = $args['last_name'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->username = $args['username'] ?? '';
        $this->hashed_password = isset($args['$hashed_password']) ? $this->setHashedPassword($args['$hashed_password']) : '';
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getHashedPassword()
    {
        return $this->hashed_password;
    }

    public function setHashedPassword($hashed_password)
    {
        return password_hash($hashed_password, PASSWORD_BCRYPT);
    }
}