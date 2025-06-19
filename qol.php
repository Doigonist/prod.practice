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