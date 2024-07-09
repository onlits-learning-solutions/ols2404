<?php
$email = $_POST['email'];
$password = $_POST['password'];

$connection = mysqli_connect('localhost', 'ols2404', 'ols2404', 'todoapp');

if (!$connection) {
    die(mysqli_connect_error());
}

$sql = "SELECT email FROM user WHERE email='$email' AND password=SHA1('$password')";

$result = mysqli_query($connection, $sql);

echo "$email|$password";

if (mysqli_num_rows($result) > 0) {
    header("Location:myhome.php");
    session_start();
    $_SESSION['email'] = $email;
} else {
    header("Location:index.php?status=1");
}
