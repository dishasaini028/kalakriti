<?php
// Database configuration
$host = 'LAPTOP-1BD60QI6\SQLEXPRESS';
$dbname = 'kalakriti_db';
$username = '';
$password = '';

try {
    // Create a PDO instance
    $pdo = new PDO("sqlsrv:Server=$host;Database=$dbname", $username, $password);

    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    echo "Connected to the database successfully!";
} catch (PDOException $e) {
    // Handle connection error
    echo "Connection failed: " . $e->getMessage();
}
?>

