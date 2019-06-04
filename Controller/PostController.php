<?php

require_once("ViewHelper.php");
require_once("Model/PostModel.php");
require_once("Model/CommentModel.php");



class PostController {
    public static function submitPost() {
        if (isset($_POST) && !empty($_POST)) {
            $user_id = UserDB::getUserId($_SESSION['username']);
            PostDB::submitPost($_POST['content'], $_POST['title'], $user_id);
            ViewHelper::render("View/submit-post.php", ["status" => "Sucessfully submited Post"]);
        } else {
            ViewHelper::render("View/submit-post.php");
        }
    }
    public static function getPost() {
        ViewHelper::render("View/browse-post.php", ["post_id" => $_GET['id'],
                                                "post" => PostDB::getPostById($_GET['id']),
                                                "comments" => CommentDB::getCommentsForPostID($_GET['id'])
                                                ]);
    }
}

?>