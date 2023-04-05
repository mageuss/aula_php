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


    $sql = str_replace("@nome",$login,$sqlLogin);
    $sql = str_replace("@senha",$senha,$sql);

    $con = mysqli_connect( $hostname, $user, $password ) or die('Erro na conexão');
    if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
    # Seleciona o banco de dados 
    mysqli_select_db($con, $database) or die('Erro na seleção do banco');

    $resultado = mysqli_query($con , $sql);

    $registros = mysqli_num_rows($resultado);

    if ($registros == 1) return true;

    return false;
}

/*
Fim da parte nova
*/

function caracterInvalido($valor)
{
    if (strstr($valor,"'")) return true;
    if (strstr($valor,'"')) return true; 
    if (strstr($valor,'<')) return true; 
    if (strstr($valor,'>')) return true; 
    if (strstr($valor,'--')) return true;
    
    return false;
}


function validar_nome($nome)
{
    global $tamanhoMaxUsuario;

    if (caracterInvalido($nome) == true) return "Erro: INVALIDO001";
    if (empty($nome) == true) return "Erro: EMBRANCO001";
    if (strlen($nome) > $tamanhoMaxUsuario) return "Erro: TAMANHO001";
    
    return "ok";
}


function validar_senha($senha)
{
    global $tamanhoMinSenha;

    if (caracterInvalido($senha) == true) return "Erro: INVALIDO001";
    if (empty($senha) == true) return "Erro: EMBRANCO001";
    if (strlen($senha) < $tamanhoMinSenha) return "Erro: TAMANHO002";
    
    return "ok";
}

function validar_email($email)
{
    global $tamanhoMaxEmail;

    if (caracterInvalido($email) == true) return "Erro: INVALIDO001";
    if (empty($email) == true) return "Erro: EMBRANCO001";
    if (strlen($email) > $tamanhoMaxEmail) return "Erro: TAMANHO003";

    if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) return "Erro: INVALIDO002";
    else return "ok";
}


//echo "Validar função: "  . validar_nome("bruno");
//echo "Validar senha: " . validar_senha("1234567890");
//echo "Validar email: " . validar_email("brunosal@danhagmail.com");

?>
