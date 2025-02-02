<?php
require_once 'config.php';

// Check if task_id is set and not empty
if (isset($_GET['task_id']) && !empty($_GET['task_id'])) {
    // Sanitize the task_id to prevent SQL injection
    $task_id = intval($_GET['task_id']); // Ensure it's an integer

    // Delete the task from the database
    $query = "DELETE FROM `task` WHERE `task_id` = $task_id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Redirect back to the homepage after successful deletion
        header('Location: index.php');
        exit();
    } else {
        // Handle query errors
        die("Error deleting task: " . mysqli_error($conn));
    }
} else {
    // Handle invalid or missing task_id
    die("Invalid task ID.");
}
?>