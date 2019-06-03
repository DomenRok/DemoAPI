<?php
require_once "DBInit.php";


class CommentDB {
    public static function addComment($post_id, $user_id, $comment) {
        $db = DBInit::getInstance();

        $statement = $db->prepare("INSERT INTO comment (message, user_id, post_id)
            VALUES (:message, :user_id, :post_id)");
        $statement->bindParam(":message", $comment);
        $statement->bindParam(":user_id", $user_id);
        $statement->bindParam(":post_id", $post_id);
        $statement->execute();
    }

    public static function searchComment($query) {
        $db = DBInit::getInstance();

        $statement = $db->prepare("SELECT id, message, user_id, post_id, year FROM book 
            WHERE author LIKE :query OR title LIKE :query");
        $statement->bindValue(":query", '%' . $query . '%');
        $statement->execute();

        return $statement->fetchAll();
    }    
}



?>