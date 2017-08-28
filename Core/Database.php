<?php
/**
 * Created by PhpStorm.
 * User: blackmister
 * Date: 16/05/2017
 * Time: 17:32
 */

namespace Core;


class Database
{
    private static $dbHost = 'localhost' ;
    private static $dbUsername = 'root';
    private static $dbUserPassword = '';
    private static $dbName = 'm2l' ;

    private static $pdo  = null;

    public static function connect()
    {
        // One connection through whole application
        if (is_null(self::$pdo))
        {
            try
            {
                self::$pdo =  new \PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);
                self::$pdo->exec('set names utf8');

            }
            catch(\PDOException $e)
            {
                die($e->getMessage());
            }
           ;
        }
        return self::$pdo;
    }
}
