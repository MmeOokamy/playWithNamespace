<?php


namespace PWN\Data;


use PDO;
use PDOStatement;

final class DatabaseHandler
{
    /**
     * @static
     * @var PDO
     */
    static protected PDO $instance;

    public function __construct(){}

    /**
     * @static
     */
    private static function getInstance(): PDO
    {
        $host = "localhost";
        $user = "root";
        $mdp = "";
        $dbName = "ooka_land";

        if(is_null(DatabaseHandler::$instance)){
            $pdo = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $user, $mdp);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

            self::$instance = $pdo;
        }
        return  DatabaseHandler::$instance;
    }

    /**
     * Send SQL request to database
     *
     * @static
     * @param string $sqlQuery SQL query to be sent
     * @return PDOStatement
     */
    static public function query($sqlQuery): PDOStatement
    {
        return DatabaseHandler::getInstance()->query($sqlQuery);
    }

    /**
     * Create prepared request before sending it to database
     *
     * @static
     * @param string $sqlQuery SQL query to be sent
     * @return PDOStatement
     */
    static public function prepare($sqlQuery): PDOStatement
    {
        return DatabaseHandler::getInstance()->prepare($sqlQuery);
    }

    /**
     * Get last inserted ID in database
     *
     * @static
     * @return int
     */
    static public function lastInsertId(): int
    {
        return DatabaseHandler::getInstance()->lastInsertId();
    }
}