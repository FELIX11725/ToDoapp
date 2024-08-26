<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["userId"])) {
    header("location: login.php");
    exit();
}


include_once 'header.php';
?>

<div class="dashboard-container">
    <h1>Your Tasks</h1>

    <!-- Display a list of tasks -->
    <ul class="task-list">

        <?php
        require_once 'includes/dbh.inc.php';

        // Get the user ID from the session
        

        $userId = $_SESSION["userUId"];

        // Prepare the SQL query
        $sql = "SELECT * FROM tasks WHERE id = ? ORDER BY created_at DESC;";
        $stmt = mysqli_stmt_init($conn);
        
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "<li>Something went wrong with the SQL query. Please try again later.</li>";
        } else {

            // Bind the user ID parameter
            mysqli_stmt_bind_param($stmt, "s", $useruid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<li>";
                    echo "<h3>" . htmlspecialchars($row['task_name']) . "</h3>";
                    echo "<p>" . htmlspecialchars($row['task_description']) . "</p>";
                    echo "<p><small>Due: " . htmlspecialchars($row['created_at']) . "</small></p>";
                    //echo "<a href='edit_task.php?id=" . $row['id'] . "' class='btn'>Edit</a>";
                    //echo "<a href='delete_task.php?id=" . $row['id'] . "' class='btn'>Delete</a>";
                    echo "</li>";
                }

            } else {
                echo "<li>No tasks found.</li>";
            }
        }
        ?>
    </ul>
</div>

<?php
include_once 'footer.php';
?>
