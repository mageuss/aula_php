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

            foreach($registros as $linha)
            {
                echo '<tr>';
                echo    '<td>'.$linha['dslogin'].'</td>';
                echo    '<td>'.$linha['dssenha'].'</td>';
                echo    '<td>'.$linha['idaluno'].'</td>';
                echo    '<td>'.$linha['nmaluno'].'</td>';
                echo '</tr>';
            }

                /*
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
            </tr>
            */
            ?>
        </table>
    </div>

</body>

</html>