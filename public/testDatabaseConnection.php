<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

use App\Database;

try {
    $connection = Database::connect();
    if ($connection->ping()) {
        echo "Database connection successful!";
    } else {
        echo "Failed to connect to the database.";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>