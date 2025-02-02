<?php
require_once 'config.php';

if (isset($_POST['add']) && !empty($_POST['task'])) {
    $task = mysqli_real_escape_string($conn, $_POST['task']);
    $query = "INSERT INTO `task` (`task`, `status`) VALUES ('$task', 'Pending')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header('Location: index.php'); // Redirect to the homepage
        exit();
    } else {
        die("Error adding task: " . mysqli_error($conn));
    }
} else {
    die("Task cannot be empty.");
}
?>