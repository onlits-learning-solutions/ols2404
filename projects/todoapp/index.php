<?php
$message = null;
if (isset($_GET['status'])) {
    if ($_GET['status'] == 1)
        $message = "Invalid email or password!";
    else if ($_GET['status'] == 2)
        $message = "Logout successful!";
    else if ($_GET['status'] == 3)
        $message = "Invalid session. Login again!";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
</head>

<body>
    <h1>Todo App</h1>
    <form action="user_authentication.php" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <button>Submit</button>
        <label for=""><?= $message ?></label>
    </form>
</body>

</html>