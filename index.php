<?php
$host = getenv('DB_HOST');
$port = getenv('DB_PORT');
$dbname = getenv('DB_NAME');
$user = getenv('DB_USER');
$password = getenv('DB_PASSWORD');

$dsn = "pgsql:host=$host;port=$port;dbname=$dbname;";

try {
    $pdo = new PDO($dsn, $user, $password);
    echo "Connected to PostgreSQL database successfully!";

    echo "hellpo wportld";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
