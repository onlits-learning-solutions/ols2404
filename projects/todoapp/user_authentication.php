<?php
$email = $_POST['email'];
$password = $_POST['password'];

require('connect.php');

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
