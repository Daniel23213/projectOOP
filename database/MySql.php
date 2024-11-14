<?php

namespace database;
use database\db;
use PDOException;
use PDO;
use Exception;
use database\Database;
class MySql implements Database
{
private static $db;
private PDO $connection;
public function connect(string $server, string $user, string $password, string $database)
{
    try {
        $this->connection = new PDO("mysql:host=$server;dbname=$database", $user, $password);
    }catch (PDOException $e)
    {
      echo "Error!:" . $e->getMessage();
    }

}
public function insert(string $table, $params = [])
{
    // TODO: Implement insert() method.
}
public function update(string $table, array $data, array $where = [])
{
    // TODO: Implement update() method.
}
public function delete(string $table, array $conditions)
{
    // TODO: Implement delete() method.
}
public function select(string $table, array $columns = ['*'], array $where = [])
{
    // TODO: Implement select() method.
}
}