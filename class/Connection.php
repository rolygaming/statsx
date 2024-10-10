<?php

class Connection
{
    private static $pdo = null;

    /**
     * Retorna a instância PDO atual
     * 
     * @return PDO
     */
    public static function get() : PDO
    {
        if (self::$pdo == null)
        {
            try
            {
                self::$pdo = new \PDO
                (
                    "mysql:host=45.235.98.50;port=3306;dbname=alejandrol_pubtopsito",
                    'alejandrol_511',
                    'R5!CkjY576JW',
                    [
                        PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE    => PDO::FETCH_ASSOC,
                        PDO::MYSQL_ATTR_INIT_COMMAND    => 'SET NAMES utf8'
                    ]
                );
            }
            catch (PDOException $ex)
            {
                die($ex->getMessage());
            }
        }

        return self::$pdo;  
    }
}
