<?php
$host = 'localhost'; // Ganti dengan host database Anda
$db   = 'web_loco'; // Nama database Anda
$user = 'root'; // Username database Anda
$pass = ''; // Password database Anda

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Could not connect to the database:' . $e->getMessage());
}
?>
