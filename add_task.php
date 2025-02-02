<?php
// Get the database connection from config.php
require 'config.php';

try {
    // Prepare the SQL query with placeholders
    $stmt = $conn->prepare("INSERT INTO task (task, status) VALUES (:task, :status)");

    // Bind parameters to prevent SQL injection
    $stmt->bindParam(':task', $_POST['task']);
    $stmt->bindParam(':status', $_POST['status']);

    // Execute the query
    $stmt->execute();

    echo "Task added successfully!";
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>
