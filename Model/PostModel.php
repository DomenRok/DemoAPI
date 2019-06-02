<?php


require_once "DBInit.php";


class PostDB {
    public static function getAll() {
        $db = DBInit::getInstance();

        $statement = $db->prepare("SELECT post_id, post_content, title FROM posts");
        $statement->execute();
        return $statement->fetchAll();
    }

    public static function getPostByUser($post_id) {
        $db = DBInit::getInstance();

        $stmt = $db->prepare("SELECT post_id, post_content, title, Users_user_id
                                    FROM posts
                                    where Users_user_id = ?");
        $stmt->bindParam(1, $post_id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public static function submitPost($post_content, $title, $Users_user_id) {
        $db = DBInit::getInstance();

        $statement = $db->prepare("INSERT INTO posts (post_content, title, Users_user_id)
            VALUES (:post_content, :title, :Users_user_id)");
        $statement->bindParam(":post_content", $post_content);
        $statement->bindParam(":title", $title);
        $statement->bindParam(":Users_user_id", $Users_user_id);
        $statement->execute();
    }
}


?>