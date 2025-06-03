<?php
require_once("config.php");
$user = getUserByNickname($_SESSION['user'],$link);
if (empty($user['cart'])){
    echo "Ваша корзина пуста!";
}