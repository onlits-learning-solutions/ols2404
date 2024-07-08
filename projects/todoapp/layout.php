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
    <title>Layout</title>
</head>

<body>
    <header>
        <h1>TodoApp</h1>
        <nav>
            <a href="">Home</a>
            <a href="">New</a>
        </nav>
    </header>

    <main>
        <h3>Main Content</h3>
    </main>

    <footer>
        <p>&copy;2024, Onlits Learning Solution</p>
    </footer>
</body>

</html>