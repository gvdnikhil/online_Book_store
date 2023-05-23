<?php
session_start();

// Simulated username and password for demonstration
$validUsername = 'ben';
$validPassword = 'ben23';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username and password are valid
    if ($username === $validUsername && $password === $validPassword) {
        // Set the username in the session
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        $_SESSION['error'] = 'Invalid username or password';
        header("Location: index.php");
        exit;
    }
} else {
    header("Location: index.php");
    exit;
}
?>
