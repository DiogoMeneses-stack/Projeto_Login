<?php
session_start();
include("cadastro_front.php");

if ($_COOKIE['login']) {
    $_SESSION['login'] = $_COOKIE['login'];
}

$login = $_POST['login'];
$senha = $_POST['senha'];

