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
        } catch (PDOException $e) {
            echo "Error!:" . $e->getMessage();
        }

    }

    public function insert(string $table, $params = [])
    {
        try {
            $columns = implode(', ', array_keys($params));
            $values = ":" . implode(', :', array_keys($params));
            $insert = $this->connection->prepare("INSERT INTO $table($columns) VALUES ($values)");
            foreach ($params as $key => $value) {
                $insert->bindValue(':' . $key, $value);
            }

            $insert->execute();

        } catch (Exception $e) {
            echo "Error!:" . $e->getMessage();
        }
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
        try {
            // Build the SELECT query
            $selectColumns = implode(', ', $columns);
            $sql = "SELECT $selectColumns FROM $table";

            if (!empty($where)) {
                $whereConditions = [];
                foreach ($where as $key => $value) {
                    $whereConditions[] = "$key = :$key";
                }
                $sql .= " WHERE " . implode(' AND ', $whereConditions);
            }

            $query = $this->connection->prepare($sql);

            if (!empty($where)) {
                foreach ($where as $key => $value) {
                    $query->bindValue(":$key", $value);
                }
            }

            $query->execute();

            // Fetch and return the results as an associative array
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $error) {
            throw new Exception($error->getMessage());
        }
    }
}