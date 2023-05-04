<?php
require_once("funcao.php");
require_once("header.php");
revalidarLogin();
?>

<body>

    <?php require_once("menu.php") ?>

    <div class="content">
        <table>

            <tr>
                <td>dslogin</td>
                <td>dssenha</td>
                <td>idaluno</td>
                <td>nmaluno</td>
            </tr>
            <?php
            $registros = listarLogins();

            foreach ($registros as $linha) {
                echo '<tr>';
                echo    '<td>' . $linha['dslogin'] . '</td>';
                echo    '<td>' . $linha['dssenha'] . '</td>';
                echo    '<td>' . $linha['idaluno'] . '</td>';
                echo    '<td>' . $linha['nmaluno'] . '</td>';
                echo '</tr>';
            }
            ?>

            <form action="form_login.php" method="post">
                DSLOGIN: <input name="dslogin" type="text" maxlength="20">
                DSSENHA: <input name="dssenha" type="password" maxlength="20">

                <select name="idaluno">
                    <?php
                    $registros = listarAlunosNaoRelacionados();
                    var_dump($registros);
                    foreach ($registros as $linha) {
                        echo '<option value' . $linha['idaluno'] . '>' . $linha['nmaluno'] . '</option>';
                    }
                    ?>
                </select>
                <input type="submit" name="comando" value="Cadastrar">
            </form>
            <?php
            if(isset($_POST['comando']) && ($_POST['comando'] == 'Cadastrar'))
            {
                echo "Comando para Insert ";
                var_dump($registros);
            }
            ?>
        </table>
    </div>

</body>

</html>