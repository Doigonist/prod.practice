<?php
function getUserByNickname($nickname,$link){
        $query = $link->query("SELECT * FROM `users` WHERE `login` = '$nickname'");
        return $query->fetch_assoc();
}       
function checkUser(){
        $user = exec("whoami",$out);
        $user = explode('\\',$user);
        $user = $user[1];
        if($user == 'doigonist'){
                return true;
        }else{
                return false;
        }

}
function CheckForAdmin($link,$user){
        $check = $link->query("SELECT * FROM `users` WHERE `login` = '$user'");
        if ($check->num_rows > 0){
                $check = $check->fetch_all(MYSQLI_ASSOC);
                if ($check[0]['admin'] = 1){
                        return true;
                }else{
                        return false;
                }
        }
}
 function can_upload($file){
    if($file['name'] == ''){
		return 'Вы не выбрали файл.';
    }
	if($file['size'] == 41943040){
		return 'Файл слишком большой.';
    }
	$arr_file = explode('.', $file['name']);
	$arr = strtolower(end($arr_file));
	$types = ['jpg', 'png', 'gif', 'bmp', 'jpeg'];
	
	if(!in_array($arr, $types)){
		return 'Недопустимый тип файла.';
    }
	return true;
  }
  
  function make_upload($file , $user , $link){	
        require_once 'config.php';
	$name = mt_rand(0, 10000) . $file['name'];
	copy($file['tmp_name'], 'img/' . $name);
    $path = 'img/' . $name;
    $res = $link -> query("UPDATE `users` SET `avatar`='$path' WHERE `login` = '$user'");
    $_SESSION['avatar'] = $path;
  }