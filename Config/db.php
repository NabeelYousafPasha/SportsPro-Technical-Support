<?php

class Database
{
    private static $bdd = null;

    private function __construct() {
    }

    public static function getBdd() {
        if(is_null(self::$bdd)) {
            $database = 'tech_support';
            $dsn = 'mysql:host=localhost;dbname='.$database;
            $username = 'root';
            $password = '';

            self::$bdd = new PDO($dsn, $username, $password);
        }
        return self::$bdd;
    }
}
?>