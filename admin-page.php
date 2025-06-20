<?php
require_once('config.php');
require_once('qol.php');
require_once('header.php');
if (CheckForAdmin($link,$_SESSION['user'])){

}else{
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Это админ страница.</h1>
    <?php if(!checkUser()){
        echo "<h2>А ты... Потенциальный нарушитель!</h2>";
    }else{
        echo "<div id='github-access'>
        <p>Github</p>
        <p class='version'>Текущая версия проекта - ". file_get_contents('version.txt')."</p>
        <form action='uploader.php'>
        <button class='uploadbtn' type='submit'>Выложить проект</button>
        </form>
    </div>";
    } ?>
<br><hr>
<a href='logout.php'>Удаление сессии</a>
</body>
<script>
</script>
</html>