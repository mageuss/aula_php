<?php
require_once("funcao.php");
// session_destroy();

$token = md5($_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']);

session_name($token);
session_start();

//session_destroy();

//var_dump($_SESSION);

if (!isset($_SESSION['login']) || !isset($_SESSION['senha']) || !isset($_SESSION['token']))
{
    session_destroy();
    header("location:index.php?erro=SEMLOGIN");
}

if($_SESSION['token'] != $token)
{
    session_destroy();
    header("location:index.php?erro=INVASAO");
}

?>