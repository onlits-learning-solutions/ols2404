<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location:index.php?status=3");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TodoApp - New Task</title>
</head>

<body>
    <header>
        <h1>TodoApp</h1>
        <nav>
            <a href="myhome.php">Home</a>
            <a href="new-task.php">New</a>
        </nav>
    </header>

    <main>
        <h3>New Task</h3>
        <form action="task-save.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>
            <label for="due-date">Due Date</label>
            <input type="date" name="due-date" id="due-date">
            <button>Submit</button>
        </form>
    </main>

    <footer>
        <p>&copy;2024, Onlits Learning Solution</p>
    </footer>
</body>

</html>