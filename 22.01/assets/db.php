<?php
$db_host = "localhost";
$db_user = "Evgeny";
$db_password = "kiloman";
$db_name = "test";
$db_table = "users";

$connect = new mysqli($db_host,$db_user,$db_password,$db_name);
if ($connect->connect_error) {
    die('Ошибка : ('. $connect->connect_errno .') '. $connect->connect_error); }