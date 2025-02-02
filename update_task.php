<?php
require_once 'config.php';

if (isset($_GET['task_id']) && !empty($_GET['task_id'])) {
    $task_id = intval($_GET['task_id']);
    $query = "UPDATE `task` SET `status` = 'Done' WHERE `task_id` = $task_id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header('Location: index.php'); // Redirect to the homepage
        exit();
    } else {
        die("Error updating task: " . mysqli_error($conn));
    }
} else {
    die("Invalid task ID.");
}
?>