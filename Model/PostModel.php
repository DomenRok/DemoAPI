<?php


require_once "DBInit.php";


class PostDB {
    public static function getAll() {
        $db = DBInit::getInstance();

        $statement = $db->prepare("SELECT id, content, title, user_id FROM post");
        $statement->execute();
        return $statement->fetchAll();
    }

    public static function getPostByUser($id) {
        $db = DBInit::getInstance();

        $stmt = $db->prepare("SELECT id, content, title, user_id
                                    FROM post
                                    where user_id = ?");
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public static function submitPost($content, $title, $user_id) {
        $db = DBInit::getInstance();

        $statement = $db->prepare("INSERT INTO post (content, title, user_id)
            VALUES (:content, :title, :user_id)");
        $statement->bindParam(":content", $content);
        $statement->bindParam(":title", $title);
        $statement->bindParam(":user_id", $user_id);
        $statement->execute();
    }
}


?>