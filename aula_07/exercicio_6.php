<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 6</title>
</head>

<body>

    <form action="welcome.php" method="post" enctype="multipart/form-data">

        Nome:<br>
        <input type="text" name="usuario" maxlength="10"></br>

        Senha:<br>
        <input type="password" name="senha" maxlength="10"></br>

        Escolha seu idioma: <br>
        Portugues:
        <input type="radio" name="idioma" value="portugues"><br>
        Ingles
        <input type="radio" name="idioma" value="ingles"><br>
        Espanhol
        <input type="radio" name="idioma" value="espanhol"><br>

        <input type="submit" value="enviar"><br>

    </form>

</body>

</html>