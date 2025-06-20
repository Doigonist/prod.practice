<?php
require_once('config.php');
require_once('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Профиль
    </h1>
    <h2>Никнейм : <?=$_SESSION['user']?></h2>
    <h3><img src="<?=$_SESSION['avatar']?>" alt=""></h3>
     <form action="add-img-handler.php" method="POST" enctype="multipart/form-data">
        <label for="img">Смена Аватара</label>
        <input type="file" name="img" id="img">
        <input type="submit" value="Отправить">
    </form>
</body>
</html>