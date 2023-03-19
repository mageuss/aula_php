<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];
$curso = $_POST['curso'];
$matricula = $_POST['matricula'];

$header = "location:questionario.php";
$erro = "";

function funcao_maneira_para_validar_coisas($erro, $nome, $email, $sexo, $endereco, $bairro, $cidade, $cep, $curso, $matricula)
{

    global $erro;

    if (!is_numeric($matricula)) {

        $erro = "matricula_invalida";
        return false;
    }

    if (!is_numeric($cep)) {

        $erro = "cep_invalido";
        return false;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $erro = "email_invalido";
        return false;

    }

    return true;

}


if (funcao_maneira_para_validar_coisas($erro, $nome, $email, $sexo, $endereco, $bairro, $cidade, $cep, $curso, $matricula)) {

    header($header);

} else {

    header($header . "?erro=" . $erro);

}

?>