<?php

namespace database;

interface  Database
{
public function connect(string $server,  string $user,  string $password, string $database);
public function insert(string $table, $params = []);
public function update(string $table, array $data, array $where = []);
public function select(string $table, array $columns = ['*'], array $where = []);
public function delete(string $table, array $conditions );

}