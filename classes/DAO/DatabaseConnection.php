<?php

namespace Access\DAO;

abstract class DatabaseConnection extends \PDO
{
    protected $pdo;

    public function __construct($db = '', $host = '', $dbname = '', $user = '', $password = '')
    {
        $dsn = "{$db}:host={$host};dbname={$dbname}";

        try {
            $this->pdo = new \PDO($dsn, $user, $password);
        } catch (\PDOException $connectionError) {
            echo json_encode([
                'error' => true,
                'message' => $connectionError->getMessage()
            ]);
        }
    }
}

