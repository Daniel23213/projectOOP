<?php
include_once "vendor/autoload.php";
include_once "vendor/smarty/smarty/libs/Smarty.class.php";
use src\User;
use database\db;
use database\MySql;


if($db = new db())
{
    echo "Database connection succeeded";
}

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

    //SignUp form
    case "signupForm";
    $template->display("templates/signupForm.tpl");
    break;

    case "signup";
     if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action']) && $_GET['action'] === 'signup')
     {
         try
         {       //check if they are not equal
            if ($_POST['password'] !== $_POST['passwordConfirm'])
            {
                throw new Exception("Passwords do not match");
            }
             $newuser = new User($_POST['name'], $_POST['email'], $_POST['password']);
             $newuser->register();
             echo "User created";
             $_SESSION['user'] = [
                 'name' => $_POST['name'],
                 'email' => $_POST['email'],
                 ];
             header('templates/home.tpl');
         }catch (Exception $e)
         {
             echo $e->getMessage();
         }

     }else
     {
         $template->assign("message", 'Something went wrong');
     }
    break;

    default:
        // If no valid action is given, default to home
        $template->display('templates/home.tpl');
        break;


}
