<?php
$host = "localhost";
$db = "post_form";
$user = "root";
$pass = ""; // no password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; // optional test message
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
