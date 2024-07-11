<?php

require('connect.php');

$name = $_POST['name'];
$due_date = $_POST['due-date'];

$sql = "INSERT INTO task(name, due_date, entry_date, priority, notes, status) VALUES('$name', '$due_date', CURDATE(), NULL, NULL, 'O')";

mysqli_query($connection, $sql);

header("Location:myhome.php");
