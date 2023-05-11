<?php
require_once("funcao.php");
require_once("header.php");
//revalidarLogin();
?>

<body>

    <?php require_once("menu.php") ?>

    <div class="content">
        <br />
        <table>
            <tr>
                <td>dslogin</td>
                <td>dssenha</td>
                <td>idaluno</td>
                <td>nmaluno</td>
            </tr>
            <?php

            $registros  = listarLogins();
            //dumpF($registros);


            foreach ($registros as $linha) {
                echo '<tr>';
                echo '    <td><a href=form_login.php?alterar=' . $linha['dslogin'] . '>'  . $linha['dslogin'] . '</a> </td>';
                echo '    <td>' . $linha['dssenha'] . '</td>';
                echo '    <td>' . $linha['idaluno'] . '</td>';
                echo '    <td>' . $linha['nmaluno'] . '</td>';
                echo '</tr>';
            }


            ?>
        </table>

        <?php
        if (isset($_GET['alterar'])) {
        ?>
            <hr>
            ***Área de manutenção
            <hr>
            <form action="form_login.php" method="post">
                DSLOGIN: <input name="dslogin" type="text" maxlength="20" readonly value="<?php echo $_GET['alterar'] ?>">
                DSSENHA: <input name="dssenha" type="password" maxlength="20" value="">
                <?php
                if ($_GET['alterar'] != 'admin') {
                    echo '<input type="submit" name="comando" value="ExcluirAcesso" />';
                }
                ?>
                <input type="submit" name="comando" value="AlterarSenha" />
            </form>
        <?php } ?>
        <hr>
        *** Área de inclusão do registro
        <hr>
        <form action="form_login.php" method="post">
            DSLOGIN: <input name="dslogin" type="text" maxlength="20" />
            DSSENHA: <input name="dssenha" type="password" maxlength="20" />
            <select name="idaluno">
                <?php
                $registros = listarAlunosNaoRelacionados();

                foreach ($registros as $linha) {
                    echo "<option value='" . $linha['idaluno'] . "'>" . $linha['nmaluno'] . "</option>";
                }
                ?>
            </select>
            <input type="submit" name="comando" value="Cadastrar" />
        </form>

        <?php

        if (isset($_POST['comando']) && ($_POST['comando'] == "Cadastrar")) {
            echo "CÓDIGO PARA FAZER O INSERT";
            //var_dump($_POST);
            $dslogin = htmlspecialchars($_POST['dslogin']);
            $dssenha = md5($_POST['dssenha']);
            $idaluno = $_POST['idaluno'];

            if (incluirLogin($dslogin, $dssenha, $idaluno)) {
                header("Location:form_login.php");
            }
        } else if (isset($_POST['comando']) && ($_POST['comando'] == "ExcluirAcesso")) {
            echo "Estou na área de exclusão";
            excluirAcesso($_POST['dslogin']);
            header("location:form_login.php?.php");
        } else if (isset($_POST['comando']) && ($_POST['comando'] == "AlterarSenha")) {
            echo "Estou na área de alteração de senha";
            alterarSenha($_POST['dslogin'], md5($_POST['dssenha']));
            header("location:form_login.php?.php");
        }

        ?>

    </div>

</body>

</html>