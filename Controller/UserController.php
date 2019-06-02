
<?php


require_once("ViewHelper.php");
require_once("Model/UserModel.php");

class UserController {
    public static function login() {
        if (!empty($_SESSION['username'])) {
            ViewHelper::render("main.php");
            } else {
            if (empty($_POST['username']) && empty($_POST['password'])) {
                ViewHelper::render("View/login.php");
            }
            elseif ( UserDB::validLoginAttempt($_POST['username'], $_POST['password'])) {
                $_SESSION['username'] = $_POST['username'];
                ViewHelper::render("main.php");
            } else {
                ViewHelper::render("View/login.php", [
                    "error" => "Vpisali ste napačno uporabniško ime/geslo."
                ]);
            }
        }
    }

    public static function register() {
        ViewHelper::render("View/register.php");
    }

    public static function index() {
        ViewHelper::render("main.php");
    }

}

?>