<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["userUId"])) {
    header("location: login.php");
    exit();
}

include_once 'header.php';
?>

<div class="dashboard-container">
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION["userUId"]); ?>!</h1>
    <p>Here’s your task dashboard. Manage your tasks and stay organized!</p>

    <!-- Display success message if a task was added successfully -->
    <?php
    if (isset($_GET['add']) && $_GET['add'] == 'success') {
        echo "<p class='success'>Task added successfully!</p>";
    
    }
    ?>
    

    <!-- Add New Task Form -->
    <div class="add-task-form">
        <h2>Add a New Task</h2>
        <form action="includes/add_task.inc.php" method="post">
            <label for="task_name">Task Name</label>
            <input type="text" id="task_name" name="task_name" required>

            <label for="task_description">Task Description</label>
            <textarea id="task_description" name="task_description" required></textarea>

            
            <label for="status">Task Status</label>
            <select name="status" id="status">
               <option value="pending">Pending</option>
               <option value="completed">Completed</option>
            </select>
             

            <label for="due_date">Due Date</label>
            <input type="date" id="due_date" name="due_date" required>

            <button type="submit" name="submit">Add Task</button>
        </form>
    </div>

    <!-- Link to tasks page -->
    <div class="view-tasks">
        <h2>View Your Tasks</h2>
        <a href="tasks.php" class="btn">View Tasks</a>
    </div>
</div>

<?php
include_once 'footer.php';
?>
