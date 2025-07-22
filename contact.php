<?php 

require_once "db.php";



$validate_email = 'admin@example.com';
$validate_password = 'secret123';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'] ?? 'missing';
    $password = $_POST['password'] ?? 'missing';

    if ($email == $validate_email && $password == $validate_password) {
        echo "<script>alert('Hello from PHP!');</script>";
    } else {
        echo "<script>alert('Invalid credentials');</script>";
    }
}
?>
