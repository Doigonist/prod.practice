<?php
include_once("qol.php");
session_start();
$link = new mysqli("localhost","root","","prod_practice");
if ($link->connect_error) {
    die($link->connect_error);
}