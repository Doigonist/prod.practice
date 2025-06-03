<?php
function getUserByNickname($nickname,$link){
        $query = $link->query("SELECT * FROM `users` WHERE `login` = '$nickname'");
        return $query->fetch_assoc();
}       
