<?php

namespace src;
use database\Database;
use database\db;
use database\MySql;

class Workspace
{
    private $status;
    private static array $workspaces = [];

    private $userid;

    public function __construct( string $userid ,)
    {
        $this->userid = $userid;
        self::$workspaces[] = $this;
    }

    public function newWorkPlace()
    {
        $params =
            [
                'users_id' => $this->userid,
            ];
        try {
            Db::$db->insert('wokspace', $params);
        }catch (\Exception $e)
        { echo $e->getMessage();}

    }
    public static function getWorkspaces($userid): array
    {
        try {
            // Fetch games from the database with the genre "Game"
            $workspaces = Db::$db->select('wokspace', ["id"], ["users_id" => $userid]);

            if (!empty($workspaces)) {
                // Debugging output

                return $workspaces;
            } else {
                return []; // Return an empty array if no games are found
            }
        } catch (\Exception $e) {
            echo "Error retrieving games: " . $e->getMessage();
            return []; // Return an empty array in case of an exception
        }
    }


}