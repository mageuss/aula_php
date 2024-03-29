<?php
require_once("funcao.php");
require_once("header.php");
revalidarLogin();
?>

<body>

    <?php require_once("menu.php") ?>

    <div class="content">
        <h2>Manutenção de aluno</h2>
        <div>
            <table>
                <tr>
                    <td>IDLAUNO</td>
                    <td>NMALUNO</td>
                </tr>

                <?php
                /*
                //Código transportado para o arquivo de funções
                $user = 'root';
                $password = '';
                $database = 'aedb_quinto';

                $hostname = "localhost";

                $sqlAluno =   " SELECT * " .
                    " FROM aluno ";

                $con = mysqli_connect($hostname, $user, $password) or die('Erro na conexão');
                if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
                # Seleciona o banco de dados 
                mysqli_select_db($con, $database) or die('Erro na seleção do banco');

                $resultado = mysqli_query($con, $sqlAluno);

                $registros = mysqli_num_rows($resultado);

                $rows = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
                */

                $rows = listarAlunos();

                foreach ($rows as $registro) {
                    echo "<tr>";
                    echo "<td><a href=form_aluno.php?alterarid=" . $registro['idaluno']  . '>' . $registro['idaluno'] . "</td>";
                    echo "<td>" . $registro['nmaluno'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
        <div>
            <?php
            if (isset($_GET['alterarid'])) {
                $aluno = listarAluno($_GET['alterarid']);
            ?>
                <form action="form_aluno.php" method="POST">
                    <input type="hidden" name="idaluno" value="<?php echo $aluno[0]['idaluno'] ?>" />
                    <input type="text" name="nmaluno" value="<?php echo $aluno[0]['nmaluno'] ?>" maxlength="150" />
                    <input type="submit" value="Alterar" name="comando">
                    <input type="submit" value="Excluir" name="comando">
                </form>

            <?php

            }

            if (isset($_POST['comando']) && $_POST['comando'] == 'Alterar') {
                echo "Comandos para alterar o aluno ";
                alterarAluno($_POST['idaluno'], $_POST['nmaluno']);
                header("location:form_aluno.php?comando=alteracaook");
            } else if (isset($_POST['comando']) && $_POST['comando'] == 'Excluir') {
                echo "Comandos para excluir o aluno";
                excluirAluno($_POST['idaluno']);
                header("location:form_aluno.php?comando=excluirok");
            } else if (isset($_POST['comando']) && $_POST['comando'] == 'Incluir') {
                echo "Comandos para incluir o aluno";
                if (trim($_POST['nmaluno']) != '') {
                    incluirAluno(htmlspecialchars($_POST['nmaluno']));
                    header("location:form_aluno.php?comando=incluirok");
                }
            }

            dumpF($_GET);
            dumpF($_POST);
            ?>
        </div>
        <div>
            <hr>

            <h3>Incluir Aluno</h3>

            <form action="form_aluno.php" method="POST">
                <input type="text" name="nmaluno" value="" maxlength="150" />
                <input type="submit" value="Incluir" name="comando">
            </form>

            <?php


            ?>
        </div>
    </div>

</body>

</html>