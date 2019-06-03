<?php




require_once("ViewHelper.php");
require_once("Model/UserModel.php");
require_once("Model/PostModel.php");
require_once("Model/CommentModel.php");


class CommentController {
    public static function submitComment() {
        $user_id = UserDB::getUserId($_SESSION['username']);
        $post_id = $_POST['post_id'];
        CommentDB::addComment($post_id, $user_id, $_POST['comment']);
    }
}








?>