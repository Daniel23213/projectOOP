<?php

namespace src;
use database\Database;
use database\db;
use database\MySql;


class Task extends Workspace
{
    private string $task;
    private int $workspace_id;
    private int $status_id;

    private static array $tasks =[];


public function __contruct(string $task, int $status_id, int $workspace_id)
{
    $this->task = $task;
    $this->status_id = $status_id;
    $this->workspace_id = $workspace_id;
    self::$tasks[] = $this;

}

public  static function getTasks($workspaceid)
{
    try {
        Db::$db->select("tasks",['task', 'status_id', 'wokspace_id'], ['wokspace_id' => $workspaceid]);

    }catch (\Exception $e)
    {
      echo  $e->getMessage();
    }
}
public function makeTask()
{
    $params =
        [
        "task" => $this->task,
        "status_id" => $this->status_id,
        "worspace_id"=> $this->workspace_id

        ];
    try
    {
        Db::$db->insert("tasks", $params);
    }catch (\Exception $e)
    {
        echo $e->getMessage();
    }
}
}