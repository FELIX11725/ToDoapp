<?php
session_start();
require_once 'dbh.inc.php';

if (isset($_POST['submit'])) {
    $taskName = $_POST['task_name'];
    $taskDescription = $_POST['task_description'];
    $status= $_POST['status'];
    $due_date= $_POST['due_date'];

     

    if (empty($taskName) || empty($taskDescription) || empty($status) || empty($due_date)) {
        header("Location: ../dashboard.php?error=emptyfields");
        exit();
    } else {
        // Update the SQL query to exclude userId
        $sql = "INSERT INTO tasks (task_name, task_description,status,due_date) VALUES (?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../dashboard.php?error=sqlerror");
            exit();
        } else {
            
            mysqli_stmt_bind_param($stmt, "ssss", $taskName, $taskDescription,$status,$due_date);
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
