<?php
$version = (float)file_get_contents('version.txt');
exec('git add .',$out);
exec("git commit -m '$version'",$out1);
exec("git push origin master",$out2);
file_put_contents('version.txt',$version + 0.1);
header('Location: admin-page.php');
