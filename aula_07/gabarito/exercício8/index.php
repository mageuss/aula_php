<table>
    <tr>
      <th>Produto</th>
      <th>Preço</th>
    </tr>

<?php
$produtos_disponiveis = array(
    'Camisa' => 30.00,
    'Calça' => 50.00,
    'Meia' => 5.00,
    'Tênis' => 80.00
  );


foreach ($produtos_disponiveis as $nome => $preco)
{
    echo '<tr>';
    echo "<td>$nome</td>";
    echo "<td>$preco</td>";
    echo '</tr>';
}
?>
</table>