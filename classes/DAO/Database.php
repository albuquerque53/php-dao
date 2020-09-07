<?php

namespace Access\DAO;

use \PDO;

class Database extends PDO 
{
    private $connection;

    public function __construct()
    {
        $database = 'mysql';
        $host = 'mysql';
        $dbname = 'daodb';
        $user = 'root';
        $password = 'root';

        //echo "$user pass $password}";

        $this->connection = new PDO("{$database}:host={$host};dbname={$dbname}", $user, $password);
    }

    private function setParams($statement, $params = array())
    {
        foreach($params as $key => $value)
        {
            $this->binder($statement, $key, $value);
        }
    }
    private function binder($statement, $key, $value)
    {
        $statement->bindParam($key, $value);
    }

    public function query($rawQuery, $params = array())
    {
        $statement = $this->connection->prepare($rawQuery);
        $this->setParams($statement, $params);

        $statement->execute();
        
        return $statement; 
    }

    public function select($rawQuery, $params = array()): array
    {
        $statement = $this->query($rawQuery, $params);

        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }

}

