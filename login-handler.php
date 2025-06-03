<?php
require_once('config.php');
$login = htmlspecialchars($_POST['login']);
$pass = htmlspecialchars($_POST['pass']);

$query = $link->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$pass' ");
if ($query->num_rows > 0) {
    $query = $query->fetch_assoc();
    $_SESSION['auth'] = true;
    $_SESSION['user'] = $query['login'];
    $_SESSION['avatar'] = $query['avatar'];
    header("Location: index.php");
}else{
    $_SESSION['login_error'] = true;
    header("Location: index.php");
}