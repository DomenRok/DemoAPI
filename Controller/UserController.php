<?php


require_once("ViewHelper.php");
require_once("Model/UserModel.php");
require_once("Model/PostModel.php");




class UserController {
    public static function login() {
        if (!empty($_SESSION['username'])) {
            self::main();
        } 
        elseif (empty($_POST['username']) || empty($_POST['password'])) {
                ViewHelper::render("View/login.php");
        }
        elseif ( UserDB::validLoginAttempt($_POST['username'], $_POST['password'])) {
                $_SESSION['username'] = $_POST['username'];
                self::main(PostDB::getAll());
        } else {
            ViewHelper::render("View/login.php", [
                "status" => "Vpisali ste napačno uporabniško ime/geslo."
            ]);
        }
    }


    public static function register() {
        
        if (isset($_POST['username']) && UserDB::userExists($_POST['username'])) {
            ViewHelper::render("View/register.php", ['status' => "Username is already taken."] );            
        } elseif (!isset($_POST['username']) && !isset($_POST['password'])) {
            ViewHelper::render("View/register.php");
        } else {
            UserDB::register($_POST['username'], $_POST['password']);
            ViewHelper::render("View/login.php", ["status" => "Account succesfully created"]);
        }
    }

    public static function index() {
        ViewHelper::render("main.php");
    }

    public static function logout() {
        session_destroy();
        ViewHelper::render("View/login.php");
    }

    public static function main() {
        ViewHelper::render("main.php", ["posts" => PostDB::getAll()]); /*,["posts" => PostDB::getAll()]); */
    }

}

?>