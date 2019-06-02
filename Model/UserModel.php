<?php

require_once "DBInit.php";

class UserDB {

    // Returns true if a valid combination of a username and a password are provided.
    public static function validLoginAttempt($username, $password) {
        $dbh = DBInit::getInstance();

        // !!! NEVER CONSTRUCT SQL QUERIES THIS WAY !!!
        // INSTEAD, ALWAYS USE PREPARED STATEMENTS AND BIND PARAMETERS!
        $stmt = $dbh->prepare('Select count(user_id) from Users where username = ? and password = ?');
        $stmt->bindParam(1, $username, PDO::PARAM_STR);
        $stmt->bindParam(2, $password, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchColumn(0) == 1;
    }

    public static function register($username, $password) {
        $dbh = DBInit::getInstance();

        $stmt = $dbh -> preapare('Insert into Users(username, password) values (?, ?)');
        $stmt->bindParam(1, $username, PDO::PARAM_STR);
        $stmt->bindParam(2, $password, PDO::PARAM_STR);
        $stmt->execute();
    }
}
