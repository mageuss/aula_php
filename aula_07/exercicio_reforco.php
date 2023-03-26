<?php

//echo "hello world";

$alunos = [
    ["nome" => "lucas", "matematica" => 10, "portugues" => 6, "biologia" => 8, "fisica" => 9],
    ["nome" => "joão", "matematica" => 4, "portugues" => 2, "biologia" => 4, "fisica" => 1],
    ["nome" => "brayan", "matematica" => 8, "portugues" => 5, "biologia" => 6, "fisica" => 4],
    ["nome" => "luis", "matematica" => 2, "portugues" => 8, "biologia" => 7, "fisica" => 3],
    ["nome" => "pedro", "matematica" => 9, "portugues" => 1, "biologia" => 9, "fisica" => 7],
];

foreach ($alunos as $aluno) {
    global $media;
    $media = ($aluno["matematica"] = $aluno["portugues"] + $aluno["biologia"] + $aluno["fisica"] / 4);

    echo "o aluno " . $aluno["nome"] . " ficou com " . $media . " de média.  </br>";
}

echo "<hr>";

?>

<html>

<body>

    <form action="recebe_reforco.php" method='POST'>

        Produto:</br>
        <input type="text" name="produto" id="produto"></br>
        </br>

        Preço:</br>
        <input type="text" name="preco" id="preco"></br>
        </br>

        <input type="submit" value="enviar">

    </form>
    <table>
        <tr>
            <th>Produto</th>
            <th>Preço</th>
        </tr>
       
       <?php

        session_start();
        
        foreach ($_SESSION['lista'] as $lista) {
            foreach ($lista as $produto => $preco) {
                echo '<tr>';
                echo "<td>$produto</td>";
                echo "<td>$preco</td>";
                echo '</tr>';
            }
        }
        
        ?>
    </table>
</body>

</html>