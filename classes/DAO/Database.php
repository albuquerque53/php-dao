<?php

namespace Access\DAO;

class Database extends \Access\DAO\DatabaseConnection 
{
    public function __construct()
    {
        parent::__construct(
            // DATABASE
            'mysql',
            // HOST
            '127.0.0.1',
            // SCHEMA NAME
            'daodb',
            // DB USER
            'root',
            // DB PASSWORD
            'root');
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
        $statement = $this->pdo->prepare($rawQuery);
        $this->setParams($statement, $params);

        $statement->execute();
        
        return $statement; 
    }

    public function select($rawQuery, $params = array()): array
    {
        $statement = $this->query($rawQuery, $params);

        $results = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $results;
    }
}

