<?php

class User
{
    private $id;
    private $login;
    private $password;    
    private $created_at;

    // Getters/Setters
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getLogin()
    {
        return $this->login;
    }
    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getCreated()
    {
        return $this->created_at;
    }
    public function setCreated($time)
    {
        $this->created_at = $time;
    }

    // Load user
    public function loadById($id)
    {
        $sql = new Database();

        $results = $sql->select('select * from users where id = :ID', array(
            ':ID' => $id
        ));

        if(isset($results[0])){
            $row = $results[0];

            $this->setId($row['id']);
            $this->setLogin($row['login']);
            $this->setPassword($row['password']);
            $this->setCreated(new DateTime($row['created_at']));
        }
    }
    
    // Magic To String
    public function __toString()
    {
        return json_encode(array(
            'id' => $this->getId(),
            'login' => $this->getLogin(),
            'password' => $this->getPassword(),
            'created_at' => $this->getCreated()->format("m/d/Y, H:i:s")
        ));
    }
}

