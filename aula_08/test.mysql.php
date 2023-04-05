<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste php com banco de dados</title>
</head>

<body>

</html>

<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$user = 'root';
$password = '';
$database = 'aedb_quinto';
$hostname = 'localhost';
$sqlDeTeste = "select *" . "from login;";

$con = mysqli_connect($hostname, $user, $password)
    or die("Erro de conexão :(.");

if (mysqli_connect_errno()) {
    trigger_error(mysqli_connect_error());
}

mysqli_select_db($con, $database) or die("Erro na conexão do banco D:");

$resultado = mysqli_query($con, $sqlDeTeste);

$registros = mysqli_num_rows($resultado);

// echo "Registros: $registros";

$logins = mysqli_fetch_array($resultado);

// echo "<pre>";
// var_dump($logins);
// echo "</pre>";

// foreach($logins as $login)
// {
//     echo  "<br/>" . $login;
// }

// $logins = mysqli_fetch_array($resultado);

// foreach($logins as $login)
// {
//     echo  "<br/>" . $login;
// }

$resultado = mysqli_query($con, $sqlDeTeste);

$rows = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

// echo "<pre>";
// var_dump($rows);
// echo "</pre>";

?>

<table>
    <tr>
        <th>DSLOGIN</th>
        <th>DSSENHA</th>
        <th>IDALUNO</th>
    </tr>

    <?php

    foreach ($rows as $row) {
        echo '<tr>';
        echo "<td>" . $row['dsLogin'] . "</td>";
        echo "<td>" . $row['dsSenha'] . "</td>";
        echo "<td>" . $row['idAluno'] . "</td>";
        echo '</tr>';
    }

    ?>

</table>
</body>