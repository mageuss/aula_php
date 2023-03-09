<html>

<body>
    <?php

    echo "hello world :D";

    if(isset($_GET['erro']))
    {
        $mess = "</br> vc teve um erro de ".$GET['erro'];
    }

        ?>

    <form action="recebe_login.php" method='POST'>

        <label for="user_nome"></lable>

            Nome:</br>
            <input type="text" name="user_nome">
            <label for="user_senha"></label></br>

            Senha:</br>
            <input type="password" name="user_senha"></br>
            <input type="submit" value="enviar">


    </form>

    <?php
        if (isset($mess))
        {
            echo $mess;
        }
    ?>

</body>

</html>