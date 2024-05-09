<?php
class DB {
    
    private static $db = null;

    public static function getInstance(){
        if (!self::$db) {
            self::connectDatabase();
        }

        return self::$db;
    }

    private static function connectDatabase(){
        $host = "localhost";
        $db = "laoban_nusantara";
        $user = "root";
        $pass = "";
        $options = [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        ];

        //createDatabase
        try {
            self::$db = new PDO("mysql:host=$host;dbname=$db", $user, $pass, $options);
        } 
        catch (PDOException $e) {
            self::$db = null;
        }
    }
}
