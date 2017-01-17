<?php
namespace Grill\Model;
 
class Db
{
    private static $pdo;
    private static function connect()
    {
        try {
            //connexion à la base avec la classe PDO et le dsn
            self::$pdo = new \PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS, [
                \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", //on s'assure de communiquer en utf8
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_WARNING         //on affiche les erreurs. À modifier en prod. 
            ]);
        } catch (\PDOException $e) { //attrappe les éventuelles erreurs de connexion
            echo 'Erreur de connexion : ' . $e->getMessage();
        }
    }

    public static function getPdo()
    {
        if (empty(self::$pdo)){
            self::connect();
        }
        return self::$pdo;
    }
}