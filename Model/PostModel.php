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


        
}


?>