<?php

namespace Access\DAO;

use Access\DAO\Support\Parameters;
use Access\DAO\DatabaseConnection;

class Database extends DatabaseConnection 
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

    public function query($rawQuery, $params = array())
    {
        $statement = $this->pdo->prepare($rawQuery);
        Parameters::set($statement, $params);

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

