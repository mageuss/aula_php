<html>

<body>

    <form action="recebe_questionario.php" method='POST'>


        Nome:</br>
        <input type="text" name="nome" required></br>
        </br>

        Email:</br>
        <input type="email" name="email" required></br>
        </br>

        Sexo:</br>
        Masculino:
        <input type="radio" id="radio1" name="radio" value="1" required></br>

        Feminino:
        <input type="radio" id="radio2" name="radio" value="2" required></br>

        Prefiro não informar:
        <input type="radio" id="radio2" name="radio" value="3" required></br>
        </br>

        Endereço:</br>
        <input type="text" id="endereco" name="endereco" required></br>
        Bairro:</br>
        <input type="text" id="bairro" name="bairro" required></br>
        Cidade:</br>
        <input type="text" id="cidade" name="cidade" required></br>
        CEP:</br>
        <input type="text" id="cep" name="cep" required></br>
        <br>

        Curso:
        <select id="curso" name="curso" required>
            <option value="">Selecione uma opção</option>
            <option value="SI">Sistema de Informação</option>
            <option value="enfermagem">Enfermagem</option>
            <option value="Engenharia">Engenharia</option>
        </select></br></br>



        Matrícula:</br>
        <input type="number" name="matricula" required></br>
        <input type="submit" value="enviar">




    </form>
    <?php
    //Monte um formulário de cadastro de alunos com os seguintes campos:

    //1 - nome do aluno

    //2 - seleção para sexo

    //3 - campo de endereço, bairro, cidade e cep

    //4 - seleção de curso

    //5 - Matrícula numérica

    //Verifique na página de destino os campos numéricos, atribua quantidades mínimas e máximas de caracteres, pesquise a função do PHP para verificar e-mails do lado do servidor.
    ?>
</body>

</html>