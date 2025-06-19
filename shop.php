<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Художественный магазин | Константин Батынков</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include_once('header.php'); ?>
    
    <div class="container py-5">
        <h1 class="text-center mb-4">Каталог работ</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
                if(isset($_SESSION['auth'])){
                    echo " <div class='col'>
                <div class='card h-100'>
                    <img src='img/котик.png' class='card-img-top' alt='Смешной кот'>
                    <div class='card-body'>
                        <h5 class='card-title'>'Смешной кот'</h5>
                        <p class='card-text'>Цифровая графика, 2023 г.</p>
                        <p class='fw-bold'>300 руб.</p>
                        <button class='btn btn-primary add-to-cart' data-id='1' data-name='Смешной кот' data-price='300'>Добавить в корзину</button>
                    </div>
                </div>
            </div>";
                }else{
                    echo '<h1>Для просмотра работ необходимо авторизоваться!</h1>';
                }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>