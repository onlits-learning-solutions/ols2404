<?php
$connection = mysqli_connect('localhost', 'ols2404', 'ols2404', 'todoapp_2404');

if (!$connection) {
    die(mysqli_connect_error());
}