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