<?php

//1.	Crie um array com 5 elementos e exiba o terceiro elemento na tela. Gabarito: ex4/Array.php
$numeros = 
[
"1", "2", "3", "4", "5"
];

echo "exercicio 1: " . "<br>".$numeros[2] . "<hr>";

//2.	Crie um array com 10 números aleatórios entre 1 e 100 e exiba na tela apenas os números pares. Gabarito: ex4/Array.php
echo "exercicio 2: </br>";

$numero_aleatorio = array();

for($i = 0; $i < 10; $i++)
{
    $numero_aleatorio[] = rand(1, 100);
}

var_dump($numero_aleatorio);


foreach($numero_aleatorio as $pares)
{
    if($pares % 2 == 0)
    {
        echo $pares . "</br>";
    }
}

echo "</br> <hr>";

//3.	Crie um array multidimensional com informações sobre produtos, onde cada produto tem nome, preço e estoque. Exiba na tela o nome e o preço de todos os produtos. Gabarito: ex4/Array.php

echo "exercicio 3: </br>";

$produtos = array(
 
    array("nome" => "coca", "preco" => 5.00, "estoque" => 300),
    array("nome" => "guarana", "preco" => 4.50, "estoque" => 250), 
    array("nome" => "pepsi", "preco" => 2.50, "estoque" => 200), 
    array("nome" => "fanta", "preco" => 3.00, "estoque" => 150), 
    array("nome" => "sprite", "preco" => 6.00, "estoque" => 100)

);

foreach($produtos as $produto)
{

    echo "o produto; " . $produto["nome"] 
    ." tem o preço de: " . $produto["preco"]
    ." reais e tem ". $produto["estoque"]. " em estoque. </br>";

};

echo "<hr>";

// 4.	Crie um array multidimensional com informações sobre carros, onde cada carro tem marca, modelo, ano e preço.
// Exiba na tela todos os carros que custam mais de R$ 50.000. Gabarito: ex4/Array.php

echo "exercicio 4: </br>";

$carros = [
    ["marca" => "nissan", "modelo" => "skyline", "ano" => 2001, "preco" => 60000],
    ["marca" => "fiat", "modelo" => "siena", "ano" => 2003, "preco" => 30000],
    ["marca" => "citroen", "modelo" => "c4", "ano" => 2020, "preco" => 40000],
    ["marca" => "ferrai", "modelo" => "ferrari", "ano" => 1980, "preco" => 100000],
    ["marca" => "volkswagen", "modelo" => "fusca", "ano" => 1970, "preco" => 10000],
];

foreach($carros as $carro)
{
    if($carro["preco"] > 50000)
    {
        echo $carro["marca"]." esse carro custa mais que R$50.000 </br>";
    }
}

echo "<hr>";

// 5.	Crie um array multidimensional com as notas de 5 alunos em 4 disciplinas. Calcule a média de cada aluno e exiba na tela. Gabarito: ex4/Array.php

// 6.	Crie um formulário de login que solicita um usuário e senha. Armazene o usuário em uma variável de sessão e redirecione para uma página de boas-vindas que exibe o nome do usuário. Ex01

// 7.	Crie uma página que permita o usuário escolher o idioma da página. Utilize sessions para armazenar a escolha do usuário e ajustar o idioma das páginas subsequentes. Ex02

// 8.	Pegue os dados do array abaixo e crie uma tabela para exibir os dados.ex04/index.php

// a.	
// $produtos_disponiveis = array(
// 'Camisa' => 30.00,
//  'Calça' => 50.00,
// 'Meia' => 5.00,
// 'Tênis' => 80.00);

// 9.	Crie um carrinho de compras simples que permita que o usuário adicione produtos em uma lista. Utilize sessions para armazenar a lista de produtos e exibi-la em uma página de carrinho. Ex03
