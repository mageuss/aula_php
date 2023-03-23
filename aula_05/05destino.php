<?php

//declarando muitas variaveis
$texto = $_POST['texto'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$numero = $_POST['numero'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$selecao = $_POST['selecao'];
$multipla = $_POST['multipla'];
$checkbox = $_POST['checkbox'];
$radio = $_POST['radio'];
$arquivo = $_FILES['arquivo']['name'];

echo $texto."</br>";
echo $senha."</br>";
echo $email."</br>";
echo $numero."</br>";
echo $data."</br>";
echo $hora."</br>";
echo $selecao."</br>";
echo implode(", ", $multipla)."</br>";
echo $checkbox."</br>";
echo $radio."</br>";
echo $arquivo."</br>";


echo "<hr>"

?>

<!DOCTYPE html>
<html>

<head>
    <title>Destino</title>
</head>

<body>

    <?php
    // Recupera os valores do formulário enviado via método POST
    $texto = $_POST['texto'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $numero = $_POST['numero'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $selecao = $_POST['selecao'];
    $multipla = $_POST['multipla'];

    echo "<hr>" . var_dump($_POST['multipla']) . "<hr>";

    $checkbox = isset($_POST['checkbox']) ? 'Sim' : 'Não';
    $radio = $_POST['radio'];
    $arquivo = $_FILES['arquivo']['name'];


    // Exibe os valores recuperados
    echo "<h1>Valores do formulário:</h1>";
    echo "<p>Campo de texto: $texto</p>";
    echo "<p>Senha: $senha</p>";
    echo "<p>E-mail: $email</p>";
    echo "<p>Número: $numero</p>";
    echo "<p>Data: $data</p>";
    echo "<p>Hora: $hora</p>";
    echo "<p>Seleção: $selecao</p>";
    echo "<p>Múltipla seleção: " . implode(", ", $multipla) . "</p>";
    echo "<p>Checkbox: $checkbox</p>";
    echo "<p>Radio: $radio</p>";
    echo "<p>Arquivo: $arquivo</p>";
    ?>

</body>

</html>
<?php
/*

Note que, para o campo de arquivo, precisamos usar o array $_FILES em vez de $_POST. 
Além disso, estamos usando a função isset() para verificar se o checkbox foi selecionado. 
Se o checkbox foi selecionado, o valor será "1", caso contrário, o valor será "0".



*/
?>