<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Testes do mysql</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>

<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$user = 'root';
$password = '';
$database = 'aedb_quinto';

# O hostname deve ser localhost no nosso exemplo
# lembre de iniciar o Apache e o Mysql 
$hostname = "localhost"; 

$sqlDeTeste = " select *" .
              " from login;";


$con = mysqli_connect( $hostname, $user, $password ) or die('Erro na conexão');
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
# Seleciona o banco de dados 
mysqli_select_db($con, $database) or die('Erro na seleção do banco');

$resultado = mysqli_query($con , $sqlDeTeste);

$registros = mysqli_num_rows($resultado);

echo "Registros: $registros";

$logins = mysqli_fetch_array($resultado);

echo "<pre>";
var_dump($logins);
echo "</pre>";

foreach ($logins as $login){
    echo "<br/> " . $login;
}


$logins = mysqli_fetch_array($resultado);

foreach ($logins as $login){
    echo "<br/> " . $login;
}


$logins = mysqli_fetch_array($resultado);

foreach ($logins as $login){
    echo "<br/> " . $login;
}

$resultado = mysqli_query($con , $sqlDeTeste);

$rows = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

//echo "<pre>";
//var_dump($rows);
//echo "</pre>";

?>

<table>
    <tr>
      <th>DSLOGIN</th>
      <th>DSSENHA</th>
      <th>IDALUNO</th>
    </tr>


<?php

foreach ($rows as $row){


    echo '<tr>';
    echo "<td>" . $row['dslogin'] . "</td>";
    echo "<td>" . $row['dssenha'] . "</td>";
    echo "<td>" . $row['idaluno'] . "</td>";    
    echo '</tr>';
}


mysqli_close($con);


?>
</table>
</body>
</html>