<?php
session_start();
require_once 'dbh.inc.php';

if (isset($_POST['submit'])) {
    $taskName = $_POST['task_name'];
    $taskDescription = $_POST['task_description'];

    if (empty($taskName) || empty($taskDescription)) {
        header("Location: ../dashboard.php?error=emptyfields");
        exit();
    } else {
        // Update the SQL query to exclude userId
        $sql = "INSERT INTO tasks (task_name, task_description) VALUES (?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../dashboard.php?error=sqlerror");
            exit();
        } else {
            
            mysqli_stmt_bind_param($stmt, "ss", $taskName, $taskDescription);
            mysqli_stmt_execute($stmt);
            header("Location: ../dashboard.php?add=success");
            exit();
        }
    }
} else {
    header("Location: ../dashboard.php");
    exit();
}
?>
