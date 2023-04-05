<?php

if(!isset($_POST['dslogin']) || !isset($_POST['dssenha']))
{
    header("location:index.php?erro=acesso_negado");
}

require_once('funcao.php');

if(validar_nome($_POST['dslogin']) == "ok")
{
    $login = $_POST['dslogin'];
}
else
{
    header("location:index.php?erro=".validar_nome($_POST['dslogin']));
}

if(validar_senha($_POST['dssenha']) == "ok")
{
    $senha = md5($_POST['dssenha']);
}
else
{
    header("location:index.php?erro=".validar_senha($_POST['dssenha']));
}

var_dump($login);

/*
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$user = 'root';
$password = '';
$database = 'aedb_quinto';

$hostname = 'localhost';

$sqlLogin = "SELECT *".
            "FROM login l " .
            "where l.dslogin = '@nome'".
            "and l.dssenha = '@senha'";

$sql = str_replace("@nome", $login, $sqlLogin);
$sql = str_replace("@senha", $senha, $sql);


$con = mysqli_connect( $hostname, $user, $password ) or die('Erro na conexão');
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
# Seleciona o banco de dados 
mysqli_select_db($con, $database) or die('Erro na seleção do banco');

$resultado = mysqli_query($con , $sql);
$registros = mysqli_num_rows($resultado);
*/

var_dump(validarLogin($login, $senha));

?>