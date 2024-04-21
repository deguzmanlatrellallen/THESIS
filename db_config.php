<?php
$host = 'localhost';
$dbname = 'beatriz_rafaela_resort_db';
$username = 'your_username';
$password = 'your_password';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}
?>