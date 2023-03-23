<?php

// session_start();
// var_dump($_POST);
// var_dump($_SESSION);

$idioma = $_POST["idioma"];


if(isset($_POST["idioma"]))
{
    $_SESSION["idioma"] = $_POST["idioma"];
}

if(isset($_POST["usuario"]))
{
    $_SESSION["usuario"] = $_POST["usuario"];
}
// var_dump($_SESSION["usuario"])

echo "Bem vindo(a) ".$_SESSION["usuario"]."! </br>";

echo "O idioma que você escolheu foi: ".$_SESSION["idioma"]."<br>";

var_dump($_SESSION["idioma"])

?>