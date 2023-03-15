<?php
/*
echo $_POST['user_nome']; 
echo "</br>";
echo $_POST['user_senha'];


// echo $_GET['user_nome']; 
// echo "</br>";
// echo $_GET['user_senha'];

echo "<hr>";

var_dump(empty($_POST['user_nome']));
echo "</br>";
var_dump(empty($_POST['user_senha']));

echo '<hr>';

if( strlen($_POST['user_nome']) < 10)
{
    echo "</br> Tamanho errado! Muito Curto.";
} 
else
{
    echo "</br> tamanho bom";    
}

echo "<hr>";

if (strpos($_POST['user_nome'], ' '))
{
    echo "</br> Tem espaco em branco";
}
else
{
    echo "</br> não tem espaco em branco";
}

echo "<hr>";

if(strstr($_POST['user_nome'], "'"))
{
    echo "caracter invalido detectado";
}
else
{
    echo "ta tudo certo";
}

echo "<hr>";
*/
$nome = $_POST['user_nome'];
function funcao_maneira_para_validar_nome($nome)
{

    if(strstr($nome, "'"))
    {
        return false;
    }
    
    if(strpos($nome, ' '))
    {
        return false;
    }

    return true;

}

if (funcao_maneira_para_validar_nome($nome))
{
    header("location:index.php?erro=ok");
}
else{
    header("location:index.php?erro=nome_invalido");
}

?> 