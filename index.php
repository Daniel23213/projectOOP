<?php
session_start();
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
if (isset($_SESSION['user'])) {
    $template->assign('username', $_SESSION['user']['name']);
    $template->assign('email', $_SESSION['user']['email']);
} else {
    $template->assign('username', null);
    $template->assign('email', null);
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


             header("Location: /index.php?action=home");
         }catch (Exception $e)
         {
             echo $e->getMessage();
         }

     }else
     {
         $template->assign("message", 'Something went wrong');
     }
    break;
     case "loginForm";
        $template->display("templates/loginForm.tpl");
    break;

    case "login":
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $login = new User('', $_POST['email'], $_POST['password']);

            // Attempt to log in and fetch the user data
            $user = $login->login($_POST['email'], $_POST['password']);

            if ($user) {
                // Set the session with user data
                $_SESSION['user'] = [
                    'name' => $user['name'],  // Store the name retrieved from the database
                    'email' => $user['email'],
                ];
var_dump($_SESSION['user']);
                // Assign session data to Smarty template
                $template->assign('username', $_SESSION['user']['name']);
                $template->assign('email', $_SESSION['user']['email']);
               // header("Location: /index.php?action=home");


                exit;
            } else {
                echo "Login failed.";
            }
        }
        break;




    default:
        // If no valid action is given, default to home
        $template->display('templates/home.tpl');

        break;


}
