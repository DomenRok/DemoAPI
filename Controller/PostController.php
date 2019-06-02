<?php

require_once("ViewHelper.php");
require_once("Model/PostModel.php");



class PostController {
    public static function submitPost() {
        ViewHelper::render("View/submit-post.php");
    }
}

?>