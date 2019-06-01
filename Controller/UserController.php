
<?php


require_once("ViewHelper.php");

class UserController {
    public static function login() {
        if (isset($_SERVER['username'])) {
            ViewHelper::render("main.php");
            
        } else {
            ViewHelper::render("View/login.php");
        }
    }

    public static function register() {
        ViewHelper::render("View/register.php");
    }

}

?>