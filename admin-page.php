<?php
require_once('config.php');
require_once('qol.php');
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
    <h1>Это админа страница.</h1>
    <?php if(!checkUser()){
        echo "<h2>А ты... Потенциальный нарушитель!</h2>";
    } ?>
    <div id="github-access">
        <p>Github</p>
        <p class="version">Текущая версия проекта - <?=file_get_contents('version.txt')?></p>
        <form action="uploader.php">
        <button class="uploadbtn" type="submit">Выложить проект</button>
        </form>
    </div>
</body>
<script>
</script>
</html>