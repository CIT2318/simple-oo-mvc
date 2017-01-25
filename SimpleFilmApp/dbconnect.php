<?php
namespace SimpleFilmApp;
use \PDO;
class DbConnect{
    private static $conn;
    public static function getConnection()
    {
        if(!self::$conn)
        {
            try{
                self::$conn = new PDO('mysql:host=localhost;dbname=u0123456', 'u0123456', '01jan96');
             }
             catch (PDOException $exception) 
             {
                echo "Oh no, there was a problem" . $exception->getMessage();
             }
        }
        return self::$conn;
    }
    public static function closeConnection()
    {
        if(self::$conn)
        {
            self::$conn=null;
        }
    }
}

