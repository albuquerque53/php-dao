<?php

namespace Access\DAO;

use PDO;

abstract class DatabaseConnection extends PDO
{
    protected $pdo;

    public function __construct($db = '', $host = '', $dbname = '', $user = '', $password = '')
    {
        $dsn = "{$db}:host={$host};dbname={$dbname}";

        try {
            $this->pdo = new PDO($dsn, $user, $password);

            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (\PDOException $connectionError) {
            echo json_encode([
                'error' => true,
                'message' => $connectionError->getMessage()
            ]);
        }
    }
}

