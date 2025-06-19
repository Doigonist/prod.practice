<?php
require_once("config.php");
include_once("header.php");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Акция: 80% скидка на работы художника</title>
    <link href="bts/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


<div class="container-fluid bg-primary text-white py-5 text-center">
    <div class="container">
        <h1 class="display-4 fw-bold mb-4">Получите 80% скидку на любую работу!</h1>
        <p class="lead mb-4">Только для посетителей, прошедших наш небольшой тест</p>
        <a href="#quiz" class="btn btn-light btn-lg px-4">Пройти тест</a>
    </div>
</div>


<div class="container py-5">
    <div id="artistCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/batinkov.webp" class="d-block w-100" alt="Работа художника 1">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75 p-3">
                    <h5>Константин Батынков</h5>
                    <p>Современный художник, работающий в технике цифровой живописи. Участник международных выставок.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/paint1.webp" class="d-block w-100" alt="Работа художника 2">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75 p-3">
                    <h5>Серия "Городские пейзажи"</h5>
                    <p>2023 год, холст, масло. Коллекция находится в частных собраниях.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/paint2.webp" class="d-block w-100" alt="Работа художника 3">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75 p-3">
                    <h5>Вчера был пожар</h5>
                    <p>Смешанная техника, 2022 год. Ограниченная серия из 50 экземпляров.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#artistCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#artistCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
        </button>
    </div>
</div>


<div id="quiz" class="container-fluid bg-light py-5">
<div class="container">
<h2 class="text-center mb-4">Мини-тест для получения скидки</h2>
<div class="row justify-content-center">
<div class="col-md-8">
<form id="discountForm"> 
<div class="mb-4">
<h5>1. В каком году родился художник Константин Батынков?</h5>
<div class="form-check">
<input class="form-check-input" type="radio" name="question1" id="q1a1" value="a">
<label class="form-check-label" for="q1a1">1970</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="question1" id="q1a2" value="b">
<label class="form-check-label" for="q1a2">1959</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="question1" id="q1a3" value="c">
<label class="form-check-label" for="q1a3">1985</label>
</div>
</div>
<div class="mb-4">
<h5>2. Какая техника является основной в творчестве художника?</h5>
<div class="form-check">
<input class="form-check-input" type="radio" name="question2" id="q2a1" value="a">
<label class="form-check-label" for="q2a1">Акварель</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="question2" id="q2a2" value="b">
<label class="form-check-label" for="q2a2">Масляная живопись</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="question2" id="q2a3" value="c">
<label class="form-check-label" for="q2a3">Цифровая графика</label>
</div>
</div>
<button type="submit" class="btn btn-primary w-100">Получить скидку</button>
</form>
                <div id="result" class="mt-4 text-center d-none">
                    <div class="alert alert-success">
                        <h4>Поздравляем!</h4>
                        <p>Ваш промокод на скидку: <strong>ART80</strong></p>
                        <p class="mb-0">Используйте его при оформлении заказа в нашем магазине.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="bts/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('discountForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const q1 = document.querySelector('input[name="question1"]:checked')?.value;
        const q2 = document.querySelector('input[name="question2"]:checked')?.value;
        
        if (q1 === 'b' && q2 === 'c') {
            document.getElementById('result').classList.remove('d-none');
            window.scrollTo({
                top: document.getElementById('result').offsetTop - 100,
                behavior: 'smooth'
            });
        } else {
            alert('Попробуйте еще раз! Не все ответы верные.');
        }
    });
</script>
</body>
</html>