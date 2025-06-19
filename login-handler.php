<?php
require_once('config.php');
if($_REQUEST = 'POST'){
   $login = htmlspecialchars($_POST['login']);
   $pass = $_POST['pass'];
   $check = $link->query("SELECT * FROM `users` WHERE `login` = '$login'");
   if($check->num_rows>0){
    $check = $check->fetch_all(MYSQLI_ASSOC);
    if(password_verify($pass,$check[0]['password'])){
        $_SESSION['auth'] = true;
        $_SESSION['avatar'] = $check[0]['avatar'];
        $_SESSION['user'] = $check[0]['login'];
        header("Location: index.php");
    }else{
        $_SESSION['login_problem'] = true;
        header("Location: index.php");
    }
   }else{
    $_SESSION['login_problem'] = true;
    header("Location: index.php");
   }
}else{
    header("Location: index.php");
}