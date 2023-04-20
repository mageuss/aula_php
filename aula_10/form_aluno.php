<?php
require_once("funcao.php");
require_once("header.php");
revalidarLogin();
?>

<body>

    <?php require_once("menu.php") ?>

    <div class="content">
        <h2>Manutenção do aluno</h2>
        <div>
            <table>
                <tr>
                    <td>IDALUNO</td>
                    <td>NMALUNO</td>
                </tr>

                <?php
                $user = 'root';
                $password = '';
                $database = 'aedb_quinto';

                $hostname = "localhost";

                $sqlAluno =   " SELECT * " .
                    " FROM aluno";

                $con = mysqli_connect($hostname, $user, $password) or die('Erro na conexão');
                if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
                # Seleciona o banco de dados 
                mysqli_select_db($con, $database) or die('Erro na seleção do banco');

                $resultado = mysqli_query($con, $sqlAluno);

                $registros = mysqli_num_rows($resultado);
                $rows = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

                foreach($rows as $registro)
                {
                    echo "<tr>";
                    echo "<td>" . $registro['idaluno'] . "</td>";
                    echo "<td>" . $registro['nmaluno'] . "</td>";
                    echo "</tr>";
                }
                
                ?>
            </table>
        </div>
    </div>

</body>

</html>