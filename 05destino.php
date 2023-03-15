<?php

//declarando muitas variaveis
$texto = $_POST['texto'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$numero = $_POST['numero'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$selecao = $_POST['selecao'];
$multipla = $_POST['multipla'];
$checkbox = $_POST['checkbox'];
$radio = $_POST['radio'];
$arquivo = $_FILES['arquivo'];

echo $texto."</br>";
echo $senha."</br>";
echo $email."</br>";
echo $numero."</br>";
echo $data."</br>";
echo $hora."</br>";
echo $selecao."</br>";
echo $multipla."</br>";
echo $checkbox."</br>";
echo $radio."</br>";
echo $arquivo."</br>";

?>