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
        $this->created_at = $time; }

    private function setUser($result)
    {
        if(isset($result[0])){
            $row = $result[0];   

            $this->setId($row['id']);
            $this->setLogin($row['login']);
            $this->setPassword($row['password']);
            $this->setCreated(new DateTime($row['created_at']));
        } else {
            throw new Exception('Invalid params :/ check your index.php');
        }
    }

    // Load user
    public function loadById($id)
    {
        $sql = new Database();

        $results = $sql->select('select * from users where id = :ID', array(
            ':ID' => $id
        ));

        $this->setUser($results);
    }

    // Get all users
    public static function getAll()
    {
        $sql = new Database();

        return $sql->select('select * from users');
    }

    // Search user by login
    public static function search($login)
    {
        $sql = new Database();

        return $sql->select('select * from users where login like :SEARCH order by login', array(
            ':SEARCH' => "%{$login}%"
        ));
    }

    // Select by login and pass
    public function getAuth($login, $pass)
    {
        $sql = new Database();

        $result = $sql->select("select * from users where login = :LOG and password = :PASS", array(
            ':LOG' => $login,
            ':PASS' => $pass
        ));
    
        $this->setUser($result);
    }

    //  Magic To String
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

