<?php
session_start();

var_dump($_SESSION);

if(!isset($_SESSION['carrinho'])) {
  $_SESSION['carrinho'] = array();
}

if(isset($_POST['adicionar'])) {
  $produto = $_POST['produto'];
  $quantidade = $_POST['quantidade'];

  if(isset($_SESSION['carrinho'][$produto])) {
    $_SESSION['carrinho'][$produto] += $quantidade;
  } else {
    $_SESSION['carrinho'][$produto] = $quantidade;
  }
}

if(isset($_POST['remover'])) {
  $produto = $_POST['produto'];

  if(isset($_SESSION['carrinho'][$produto])) {
    unset($_SESSION['carrinho'][$produto]);
  }
}

$produtos_disponiveis = array(
  'Camisa' => 30.00,
  'Calça' => 50.00,
  'Meia' => 5.00,
  'Tênis' => 80.00
);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Carrinho de compras</title>
</head>
<body>
  <h1>Carrinho de compras</h1>
  <h2>Produtos</h2>
  <table>
    <tr>
      <th>Produto</th>
      <th>Preço</th>
      <th>Quantidade</th>
      <th>Adicionar</th>
      <th>Remover</th>
    </tr>
    <?php foreach($produtos_disponiveis as $nome_produto => $preco_produto) {
      echo '<tr>';
      echo "<td>$nome_produto</td>";
      echo "<td>$preco_produto</td>";
      echo '<form method="post">';
      echo "<td><input type=\"number\" name=\"quantidade\" value=\"0\"></td>";
      echo "<td><input type=\"submit\" name=\"adicionar\" value=\"Adicionar\"><input type=\"hidden\" name=\"produto\" value=\"$nome_produto\"></td>";
      echo "<td><input type=\"submit\" name=\"remover\" value=\"Remover\"><input type=\"hidden\" name=\"produto\" value=\"$nome_produto\"></td>";
      echo '</form>';
      echo '</tr>';
    } ?>
  </table>
  <h2>Carrinho</h2>
  <table>
    <tr>
      <th>Produto</th>
      <th>Preço</th>
      <th>Quantidade</th>
      <th>Total</th>
    </tr>
    <?php foreach($_SESSION['carrinho'] as $nome_produto => $quantidade) {
      $preco_produto = $produtos_disponiveis[$nome_produto];
      $total_produto = $preco_produto * $quantidade;
      echo '<tr>';
      echo "<td>$nome_produto</td>";
      echo "<td>$preco_produto</td>";
      echo "<td>$quantidade</td>";
      echo "<td>$total_produto</td>";
      echo '</tr>';
    } ?>
  </table>
</body>
</html>
