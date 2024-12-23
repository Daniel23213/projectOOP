<?php

namespace src;
use database\Database;
use database\db;
use database\MySql;

class Workspace
{
    private $status;
    private static array $workspaces = [];

    private  int $userid;
    protected string $name;

    public function __construct( int $userid ,string $name)
    {
        $this->userid = $userid;
        $this->name = $name;
        self::$workspaces[] = $this;
    }

    public function newWorkPlace()
    {
        $params =
            [
                'users_id' => $this->userid,
                'name' =>  $this->name
            ];
        try {
            Db::$db->insert('wokspace', $params);
        }catch (\Exception $e)
        { echo $e->getMessage();}

    }
    public static function getWorkspaces($userid): array
    {
        try {

            $workspaces = Db::$db->select('wokspace', ["id", "name"], ["users_id" => $userid]);

            if (!empty($workspaces)) {


                return $workspaces;
            } else {
                return [];
            }
        } catch (\Exception $e) {
            echo "Error retrieving games: " . $e->getMessage();
            return []; // Return an empty array in case of an exception
        }
    }
    public static function getWorkSpaceByName($name, $userid)
    {
        foreach (self::$workspaces as $workspace)
        {
            if ($workspace->getName() === $name)
            {
                return $workspace;
            }
        }

        // If no game is found in the array, fetch from the database
        $result = Db::$db->select('wokspace', ['name', 'users_id'], ['name' => $name, 'users_id' => $userid]);

        if (!empty($result)) {
            // Create and return a new Workspace object based on the database result
            return new Workspace($result[0]['users_id'], $result[0]['name']);
        }

        // Return null if no workspace is found
        return null;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

}