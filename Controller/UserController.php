
<?php


require_once("ViewHelper.php");

class UserController {
    public static function login() {
         ViewHelper::render("View/login.php");
    }

    public static function register() {
        ViewHelper::render("View/register.php");
    }

}

?>