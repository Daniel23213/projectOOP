<?php

namespace src;
use database\Database;
use database\db;
use database\MySql;
class User
{
private string $name;
private string $password;
private string $email;
public function __construct(string $name,  string $email, string $password)
{
    $this->name = $name;
    $this->email = $email;
    $this->password = password_hash($password, PASSWORD_BCRYPT);
}
public function register()
{
if($this->checkemail($this->email))
{
    throw new \Exception("Email is taken");
}
$params =
    [
        'name' => $this->name,
        'email' => $this->email,
        'password' => $this->password
    ];
    try
    {
       Db::$db->insert('users', $params);

    }
    catch (\Exception $e)
    {
        echo $e->getMessage();
    }
}
public function checkemail($email)
{
    try {
        $result = Db::$db->select('users', ['*'], ['email' => $email]);
        return !empty($result);
    }
    catch (\Exception $e)
    {
        echo $e->getMessage();
    }
}
}