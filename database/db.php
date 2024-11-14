<?php

namespace database;

class db
{
    public static MySql $db;
public function __construct()
{
    self::$db = new MySql();
    self::$db->connect("localhost", "root", "", "tasks");
}
}