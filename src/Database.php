<?php

namespace App;

use mysqli;
use Dotenv\Dotenv;

class Database {
    private static $connection = null;

    public static function connect(): mysqli {
        if (self::$connection === null) {
            // Load environment variables
            $dotenv = Dotenv::createImmutable(__DIR__ . '/..');
            $dotenv->load();

            $servername = $_ENV['DB_SERVERNAME'];
            $username = $_ENV['DB_USERNAME'];
            $password = $_ENV['DB_PASSWORD'];
            $database = $_ENV['DB_DATABASE'];
            $port = $_ENV['DB_PORT'];

            self::$connection = new mysqli($servername, $username, $password, $database, $port);

            if (self::$connection->connect_error) {
                die('Database connection error: ' . self::$connection->connect_error);
            }
        }
        return self::$connection;
    }
}

?>
