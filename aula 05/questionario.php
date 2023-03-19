<html>

<body>

    <form action="recebe_questionario.php" method='POST'>

        Nome:</br>
        <input type="text" name="nome" required></br>
        </br>

        Email:</br>
        <input type="text" name="email" required></br>
        </br>

        Sexo:</br>
        Masculino:
        <input type="radio" id="radio1" name="sexo" value="masculino" required></br>

        Feminino:
        <input type="radio" id="radio2" name="sexo" value="feminino" required></br>

        Prefiro não informar:
        <input type="radio" id="radio3" name="sexo" value="nao_informado" required></br>
        </br>

        Endereço:</br>
        <input type="text" id="endereco" name="endereco" required></br>
        Bairro:</br>
        <input type="text" id="bairro" name="bairro" required></br>
        Cidade:</br>
        <input type="text" id="cidade" name="cidade" required></br>
        CEP:</br>
        <input type="text" id="cep" name="cep" minlength="8" maxlength="8" required></br>
        <br>

        Curso:
        <select id="curso" name="curso" required>
            <option value="">Selecione uma opção</option>
            <option value="SI">Sistema de Informação</option>
            <option value="enfermagem">Enfermagem</option>
            <option value="Engenharia">Engenharia</option>
            <option value="Publicidade">Publicidade</option>
        </select></br></br>

        Matrícula:</br>
        <input type="text" name="matricula" minlength="8" maxlength="8" required></br></br>
        <input type="submit" value="enviar">

    </form>

    <?php

    if (isset($_GET['erro'])) {

        $mensagem_erro = "</br> você teve um erro de " . $_GET['erro'];

    }

    if (isset($mensagem_erro)) {

        echo "</br> $mensagem_erro";

    }

    ?>

</body>

</html>