<?php



session_start();
require_once("Controller/UserController.php");
require_once("Controller/PostController.php");
require_once("Controller/RatingController.php");
require_once("Controller/CommentController.php");


define("BASE_URL", $_SERVER["SCRIPT_NAME"] . "/");
define("CSS_URL", rtrim($_SERVER["SCRIPT_NAME"], "index.php") . "style/");
define("JS_URL", rtrim($_SERVER["SCRIPT_NAME"], "index.php") . "javascript/");
//define("IMAGES_URL", rtrim($_SERVER["SCRIPT_NAME"], "index.php") . "static/images/");
//define("CSS_URL", rtrim($_SERVER["SCRIPT_NAME"], "index.php") . "static/css/");

$path = isset($_SERVER["PATH_INFO"]) ? trim($_SERVER["PATH_INFO"], "/") : "";

function isUserLoggedIn() {
    return isset($_SESSION['id']) && !empty($_S);
}

$urls = [
    "" => function () {
        UserController::login();
    },
    "register" => function() {
        UserController::register();
    },
    "login" => function() {
        UserController::login();
    },
    "logout" => function() {
        UserController::logout();
    },
    "main" => function() {
        UserController::main();
    },
    "submit" => function() {
        PostController::submitPost();
    },
    "post" => function() {
        PostController::getPost();
    },
    "submit-comment" => function() {
        CommentController::submitComment(); 
    }

];

try {
    if (isset($urls[$path])) {
       $urls[$path]();
    } else {
        echo "No controller for '$path'";
    }
} catch (Exception $e) {
    echo "An error occurred: <pre>$e</pre>";
    // ViewHelper::error404();
} 

