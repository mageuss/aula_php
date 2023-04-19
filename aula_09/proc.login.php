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

//var_dump($login);

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

if(validarLogin($login, $senha))
{
    echo "<br /> login: $login,senha: $senha, ip: " . $_SERVER['REMOTE_ADDR'] .",browser: " . $_SERVER['HTTP_USER_AGENT'];
    $token = md5($_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']);

    session_name($token);

    session_start();
    
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    
    $_SESSION['token'] = $token;

    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";

    header("location:welcome.php");
}
else
{
    header("location:index.php?erro=NAOLOCALIZADO");
}

?>