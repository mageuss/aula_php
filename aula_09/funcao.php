<?php
/*modificador tipo_de_retorno(parametros da função)
{
    returna algum objeto;    
}*/

$tamanhoMaxEmail = 300;
$tamanhoMaxUsuario = 10;
$tamanhoMinSenha = 5; //sem criptografia

/*
Parte nova
*/
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$user = 'root';
$password = '';
$database = 'aedb_quinto';

$hostname = "localhost";

function validarLogin($login, $senha)
{
    global $user, $password, $database, $hostname;

    $sqlLogin =   " SELECT * " .
        " FROM login l " .
        " WHERE l.dslogin = '@nome' " .
        " and l.dssenha = '@senha' ";


    $sql = str_replace("@nome", $login, $sqlLogin);
    $sql = str_replace("@senha", $senha, $sql);

    $con = mysqli_connect($hostname, $user, $password) or die('erro na conexão');
    if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
    # Seleciona o banco de dados 
    mysqli_select_db($con, $database) or die('erro na seleção do banco');

    $resultado = mysqli_query($con, $sql);

    $registros = mysqli_num_rows($resultado);

    if ($registros == 1) return true;

    return false;
}

/*
Fim da parte nova
*/

function caracterInvalido($valor)
{
    if (strstr($valor, "'")) return true;
    if (strstr($valor, '"')) return true;
    if (strstr($valor, '<')) return true;
    if (strstr($valor, '>')) return true;
    if (strstr($valor, '--')) return true;

    return false;
}


function validar_nome($nome)
{
    global $tamanhoMaxUsuario;

    if (caracterInvalido($nome) == true) return "erro:INVALIDO001";
    if (empty($nome) == true) return "erro:EMBRANCO001";
    if (strlen($nome) > $tamanhoMaxUsuario) return "erro:TAMANHO001";

    return "ok";
}


function validar_senha($senha)
{
    global $tamanhoMinSenha;

    if (caracterInvalido($senha) == true) return "erro:INVALIDO001";
    if (empty($senha) == true) return "erro:EMBRANCO001";
    if (strlen($senha) < $tamanhoMinSenha) return "erro:TAMANHO002";

    return "ok";
}

function validar_email($email)
{
    global $tamanhoMaxEmail;

    if (caracterInvalido($email) == true) return "erro:INVALIDO001";
    if (empty($email) == true) return "erro:EMBRANCO001";
    if (strlen($email) > $tamanhoMaxEmail) return "erro:TAMANHO003";

    if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) return "erro:INVALIDO002";
    else return "ok";
}


function revalidarLogin()
{
    $token = md5($_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']);
    session_name($token);
    session_start();

    //session_destroy();

    //var_dump($_SESSION);

    if (!isset($_SESSION['login']) || !isset($_SESSION['senha']) || !isset($_SESSION['token'])) {
        session_destroy();
        header("location:index.php?erro=SEMLOGIN");
    }

    if ($_SESSION['token'] != $token) {
        session_destroy();
        header("location:index.php?erro=INVASAO");
    }
    echo "hello world";
};

//echo "Validar função: "  . validar_nome("bruno");
//echo "Validar senha: " . validar_senha("1234567890");
//echo "Validar email: " . validar_email("brunosal@danhagmail.com");
