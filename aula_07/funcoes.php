<?php

/* 
modificador tipo_de_retorno(parametros_da_funcao) 
{
    retorna algum objeto;
}
*/

$tamanhoMaxUsuario = 10;
$tamanhoMinSenha = 8;


function caracterInvalido($valor)
{

    if (strstr($valor, "'"))
    {
        return true;
    }

    if (strstr($valor, '"'))
    {
        return true;
    }
    
    if (strstr($valor, "<"))
    {
        return true;
    }

    if (strstr($valor, ">"))
    {
        return true;
    }

    if (strstr($valor, "--"))
    {
        return true;
    }

    return false;
}

function validar_nome($nome)
{

    global $tamanhoMaxUsuario;

    if(caracterInvalido($nome) == true)
    {
        return "ERRO: INVALIDO0001";
    }

    if(empty($nome) == true)
    {
        return "ERRO: EMBRANCO0001";
    }

    if(strlen($nome)>$tamanhoMaxUsuario)
    {
        return "ERRO: TAMANHO0001";
    }
    
    return "ok";
}

function validar_senha($senha)
{

    global $tamanhoMinSenha;

    if(caracterInvalido($senha) == true)
    {
        return "ERRO: INVALIDO0002";
    }

    if(empty($senha) == true)
    {
        return "ERRO: EMBRANCO0002";
    }

    if(strlen($senha) < $tamanhoMinSenha)
    {
        return "ERRO: TAMANHO0002";
    }
    
    return "ok";
}


function validar_email($email)
{

    if(caracterInvalido($email) == true)
    {
        return "ERRO: INVALIDO0002";
    }

    if(empty($email) == true)
    {
        return "ERRO: EMBRANCO0002";
    }
    
    if(filter_var($email, FILTER_VALIDATE_EMAIL) == true)
    {
        return "";
    }

    return "ok";
}

echo "validar nome: " . validar_nome("mageus") . "</br> <hr>";

echo "validar senha: " . validar_senha("mageus123") . "</br> <hr>";

