<?php
session_start();

if (isset($_POST['produto'])) {
    $_SESSION['produto'] = $_POST['produto'];
}

if (isset($_POST['preco'])) {
    $_SESSION['preco'] = $_POST['preco'];
}

$lista['produto'] = array();

$lista['preco'] = array();

if($_SESSION['lista'] == null)
{
    $_SESSION['lista'] = $lista;
}

$_SESSION['lista'][] = [
    $_SESSION['produto'] => $_SESSION['preco']
];

header("location:exercicio_reforco.php")

    ?>