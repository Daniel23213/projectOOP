<?php
include_once "vendor/autoload.php";
include_once "vendor/smarty/smarty/libs/Smarty.class.php";
use src\User;
use database\db;
use database\MySql;


$db = new db();

//composer require smarty/smarty
$template = new Smarty\Smarty();
$template->clearAllCache();
$template->clearCompiledTemplate();

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = null;
}

//switch
switch ($action)
{
    case "home";
    $template->display("templates/home.tpl");

    break;


    default:
        // If no valid action is given, default to home
        $template->display('templates/layout.tpl');
        break;
}
