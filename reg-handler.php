<?php
require_once('config.php');
if(!isset($_SESSION['auth'])){
    if($_POST['repass'] == $_POST['pass']){
        $login = htmlspecialchars($_POST['login']);
        $pass = password_hash($_POST['pass'],PASSWORD_DEFAULT);
        $link->query("INSERT INTO `users`( `login`, `password`, `admin`, `avatar`, `cart`) VALUES ('$login','$pass','0','img/temp.jpg','')");
        header("Location: index.php");
    }else{
        $_SESSION['reg_problem'] = true;
        header("Location: index.php");
    }
}else{
    header("Location: index.php");
}