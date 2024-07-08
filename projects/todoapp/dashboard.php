<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Dashboard</h1>
    <h3>Hello!<?= $_SESSION['email'] ?></h3>

</body>

</html>