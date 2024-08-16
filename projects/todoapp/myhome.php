<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location:index.php?status=3");
}

require('connect.php');
$sql = "SELECT * FROM task";
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {
    $tasks = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TodoApp - MyHome</title>
    <link rel="stylesheet" href="style.css">
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
        <h3>My Tasks</h3>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Due Date</th>
                    <th>Entry Date</th>
                    <th>Priority</th>
                    <th>Notes</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tasks as $task) { ?>
                    <tr>
                        <td><?= $task['id'] ?></td>
                        <td><?= $task['name'] ?></td>
                        <td><?= $task['due_date'] ?></td>
                        <td><?= $task['entry_date'] ?></td>
                        <td><?= $task['priority'] ?></td>
                        <td><?= $task['Notes'] ?></td>
                        <td><?= $task['status'] ?></td>
                        <td><a href="">Edit</a> <a href="">Delete</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>

    <footer>
        <p>&copy;2024, Onlits Learning Solution</p>
    </footer>
</body>

</html>