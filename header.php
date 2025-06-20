<?php
require_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bts/css/bootstrap.min.css">
</head>
<body>
    

<nav class="navbar navbar-expand-lg bg-secondary sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="img\Батынков.jpg" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
        К.А.Б
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Главная</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="bio.php">Биография</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="shop.php">Магазин</a>
        </li>
            <div class="vr"></div>
        <?php
            if (!isset($_SESSION['auth'])){
                echo '
                 <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">Войти</a>
                 </li>
                ';
                echo '<a class="nav-link" data-bs-target="#exampleModal2" data-bs-toggle="modal">Зарегистрироваться</a>';
            }elseif(isset($_SESSION['auth']) && CheckForAdmin($link,$_SESSION['user'])){
              echo "
                 <li class='nav-item'>
                     <a class='navbar-brand' href='profile.php'>
                        <img src='".$_SESSION["avatar"]."' alt='Logo' width='30' height='30' class='d-inline-block align-text-top'>
                        ".$_SESSION['user']."
                     </a>
                 </li>
                 <li class='nav-item'>
                     <a class='navbar-brand' href='admin-page.php'>
                      Админ Панель
                     </a>
                 </li>
                ";
            }
            else{
                 echo "
                 <li class='nav-item'>
                     <a class='navbar-brand' href='profile.php'>
                        <img src='".$_SESSION["avatar"]."' alt='Logo' width='30' height='30' class='d-inline-block align-text-top'>
                        ".$_SESSION['user']."
                     </a>
                 </li>
                ";
            }
        ?>
      </ul>
    </div>
  </div>
</nav>
</body>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Авторизация</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="login-handler.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Логин</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="login" aria-describedby="emailHelp" required>
            </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Пароль</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="pass" required>
                </div>



      </div>
      <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
            <button type="submit" class="btn btn-primary" id="login_button">Войти</button>
      </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Регистрация</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form action="reg-handler.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Логин</label>
                <input type="text" class="form-control" name="login" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Пароль</label>
                    <input type="password" class="form-control" name="pass" id="exampleInputPassword1">
                </div>
                 <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Повторите пароль</label>
                    <input type="password" class="form-control" name="repass" id="exampleInputPassword1">
                </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
          </form>
      </div>
    </div>
  </div>
</div>
<script src="bts/js/bootstrap.bundle.js"></script>
</html>