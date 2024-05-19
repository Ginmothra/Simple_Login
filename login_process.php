<?php
include_once ('database.php');
$username = $_POST['username'];
$password = $_POST['password'];

$user = $db
    ->query("SELECT * FROM user where username = '$username' && password = '$password'")
    ->fetch_assoc();

session_start();
$_SESSION['user_login'] = $user;
header("Location: home.php");
?>
