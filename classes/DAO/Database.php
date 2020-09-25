<?php

namespace Access\DAO;

use Access\DAO\Support\Parameters;
use Access\DAO\DatabaseConnection;

/*
 * To run this you'll need a .env.php file
 * 
 * If you don't have, run:
 *      cp .env-example.php .env.php
 *
 * And set the env vars to you local config.
 */
require_once __DIR__ . '/../../.env.php';

class Database extends DatabaseConnection 
{
    public function __construct()
    {
        parent::__construct(
            getenv('DATABASE'),
            getenv('HOST'),
            getenv('SCHEMA_NAME'),
            getenv('DB_LOGIN'),
            getenv('DB_PASSWORD')
        );
    }

    public function query($rawQuery, $params = array()): \PDOStatement
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

