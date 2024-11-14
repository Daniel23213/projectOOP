<?php

namespace src;

class User
{
private string $name;
private string $password;
private string $email;
public function __construct(string $name,  string $email, string $password)
{
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;

}
}