<?php
$nome = array("Nome 01<br/>", "Nome 02<br/>","Nome 03<br/>","Nome 04<br/>","Nome 05<br/>","Nome 06<br/>","Nome 07<br/>","Nome 08<br/>","Nome 09<br/>","Nome 10<br/>","Nome 11<br/>","Nome 12<br/>","Nome 13<br/>","Nome 14<br/>");

$numeros = [7,8,15,25,18,19,3,1,2,9,11,12,13,14,22,10];

$estado = [ 'SP' => 'São Paulo', 'MG' => 'Minas Gerais', 'RJ' => 'Rio de Janeiro', 'ES' => 'Espírito Santo' ];





// echo $nome[0];

// echo "$numero[1]<br>";

// echo $estado["SP"];


// for ($i = 0; $i < 10; $i++) {
//     echo $numero[$i];
// }
$resultado = 0;
// for ($i = 0; $i < sizeof($numero); $i++)
// {
//     $resultado = $numero[$i] + $resultado; 
// } 

// echo $resultado;

// foreach($numeros as $numero)
// {
//     $resultado = $resultado + $numero;
// }
// echo $resultado;
/*
$soma = 0;

for($i = 0; $i <= 10; $i++)
{
    if(($i % 2) != 0)
    $soma = $soma + $i;
}

echo $soma;
*/
/*
var_dump($nomes);
var_dump($numeros);
var_dump($estados);
*/

//$estados = [ 'SP' => 'São Paulo', 'MG' => 'Minas Gerais', 'RJ' => 'Rio de Janeiro', 'ES' => 'Espírito Santo' ];


//Crie essas variáveis

// $numeroEmString = "2";
// $numeroEmInt = 2;

// echo "a variavel $numeroEmInt é um ".gettype($numeroEmInt).".";
// echo "<br> a variavel $numeroEmString é um ".gettype($numeroEmString).".";

// settype($numeroEmString, gettype($numeroEmInt));


// echo "<br> <br> a variavel $numeroEmInt é um ".gettype($numeroEmInt).".";
// echo "<br> a variavel $numeroEmString é um ".gettype($numeroEmString).".";

// if ($numeroEmInt > $numeroEmString){
//     echo "a é maior que b";
// } elseif($numeroEmInt < $numeroEmString){
//     echo "b é maior que a";
// } else {
//     echo "eles são iguais";
// }

// $numeroEmString = "2";
// $numeroEmInt = 2;

// if ($numeroEmInt === $numeroEmString) {

//     echo "essa variaveis são do mesmo tipo. :D";

// } else {

//     echo "essa variaveis não são do mesmo tipo. D:";

// };
/*
Escreva um script PHP que receba um número como parâmetro e retorne se ele é positivo, negativo ou zero.

Filtro: Operadores de comparação "maior que", "menor que" e "igual a".
*/

// $numero = 1;
// $e_positivo;

// if($numero > 0 ){
//     echo "ele é positivo.";
//     $e_positivo = True;
// } elseif($numero < 0) {
//     echo "ele é negativo.";
//     $e_positivo = False;
// } else{
//     echo "ele é igual a zero.";
// }

//echo "<br>".$e_positivo


// $var_booleana = true;

// if($var_booleana){
//     echo "ele é true.";
// } else{
//     echo "ele é false.";
// }


// Escreva um script PHP que receba um número como parâmetro e retorne se ele é igual a "5" (como string).
// Filtro: Operador de comparação "igual a" (com dois iguais) e "diferente de" (com um diferente).

// if($numero === "5"){
//     echo "ele é diferente de uma string 5";
// } else {
//     echo "ele não é igual a string 5";
// }

/*
Crie um algoritmo para definir se a divisão de um número qualquer por 2,
resulta em um resto igual a 0, imprima caso a condição seja verdadeira.

$numero = 4;

if($numero % 2 == 0)
{
    echo("o numero é divisivel por 2");
}else
{
    echo("o número não é divisivel por 2");
};
*/
/*
Escreva um script PHP que receba dois números como parâmetros e retorne se um deles é par e o outro é ímpar.

Filtro: Operadores lógicos "&&" e "||", além da estrutura if elseif else.

$numero_1 = 2;
$numero_2 = 4;

if(($numero_1 % 2 == 0) || ($numero_2 % 2 == 0))
{
    if(($numero_1 % 2 == 0) && ($numero_2 % 2 == 0))
    {
        echo("ambos são pares");
    }else
    {
        echo("apenas um é par");
    }
}
*/

/*
 Crie um algoritmo que receba um inteiro, e diga qual mês está associado ao número.
 Caso não encontre o mês adequado imprima a mensagem “Mês não reconhecido”

$mes = 11;

if($mes == 1)
{
    echo("janeiro");
}elseif($mes == 2)
{
    echo("fevereiro");
}elseif($mes == 3)
{
    echo("março");
}elseif($mes == 4)
{
    echo("abril");
}elseif($mes == 5)
{
    echo("maio");
}elseif($mes == 6)
{
    echo("junho");
}elseif($mes == 7)
{
    echo("julho");
}elseif($mes == 8)
{
    echo("agosto");
}elseif($mes == 9)
{
    echo("setembro");
}elseif($mes == 10)
{
    echo("outubro");
}elseif($mes == 11)
{
    echo("novembro");
}elseif($mes == 12)
{
    echo("dezembro");
}else
{
    echo("mês invalido");
}
*/

/*
Crie um algoritmo que receba um número, identifique qual mês está relacionado(switch),
e imprima se é um mes com 31 dias.
Caso não seja possível identificar o mês, imprima a mensagem de “mês não reconhecido” (desafio)

$mes = 11;

//com 31 = (janeiro = 1 , março = 3, maio = 5, julho = 6, agosto = 8, outubro = 10 e dezembro = 12)
//nao tem 31 = (abril = 4, junho = 6, setembro = 9 e novembro = 11)
switch ($mes) {
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        echo "tem 31";
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        echo "tem 30";
        break;
    case 2:
        echo "tem 28/29";
        break;
    default:
        echo "digite um mês valido";
}
*/
/*

Crie um algoritmo para definir se a nota de um aluno é o suficiente para aprovação,
caso contrário avalie essa condição para identifica se houve reprovação, ou dependência.

$av1 = 6;
$av2 = 5;

if(($av1+$av2)/2 >= 6)
{
    echo("aluno aprovado");
}
else
{
    echo("aluno reprovado");
}
*/
/*
for ($i = 500; $i >= 0; $i--)
{
    if(($i % 2) == 0)
    {
        echo "</br>$i";
    }
}
*/

echo "<hr>desafio 1<hr>";

//for($i = 0; $i <= sizeof($numeros); $i++)
sort($numeros);
var_dump($numeros);

?>