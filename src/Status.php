<?php

namespace src;
use database\Database;
use database\db;
use database\MySql;

class Status
{
    private string $name;
    private static array $status = [];

    public function __construct(string $name)
    {
        $this->name = $name;
        self::$status[] = $this;
    }

    public static function getStatus(): array
    {
        try {
            // Fetch statuses from the database
            $status = Db::$db->select('status', ['id', 'status']);

            if (!empty($status)) {
                return $status;
            } else {
                return []; // Return an empty array if no statuses are found
            }
        } catch (\Exception $e) {
            echo "Error retrieving statuses: " . $e->getMessage();
            return []; // Return an empty array in case of an exception
        }
    }
}