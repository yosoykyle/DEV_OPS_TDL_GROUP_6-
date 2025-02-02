<?php
ob_start(); // Start output buffering

$host = getenv('DB_HOST') ?: 'db';
$user = getenv('DB_USER') ?: 'devops_user';
$password = getenv('DB_PASSWORD') ?: 'devops_password';
$dbname = getenv('DB_NAME') ?: 'devops_db';
$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
ob_end_flush(); // Send the output buffer to the browser
?>