<?php
require_once('config.php');
require_once('qol.php');

$id = $_SESSION['user'];
if(isset($_FILES['img'])) {
    $check = can_upload($_FILES['img']);
    if($check === true){
      make_upload($_FILES['img'] , $id , $link);
      echo "<strong>Файл успешно загружен!</strong>";
    }
    else{
      echo "<strong>$check</strong>";  
    }
  }
  header("Location: profile.php");
?>