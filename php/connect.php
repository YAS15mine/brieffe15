<?php
// MySQL database configuration
$host = 'localhost';
$dbname = 'test';
$user = 'root';
$password = '';

// create a new PDO instance that represents a connection to a database.
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
