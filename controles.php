<!-- formulário com diversos controles -->
<form method="POST" action="05destino.php"  enctype="multipart/form-data">
  <!-- campo de texto -->
  <label for="texto">Campo de texto:</label>
  <input type="text" id="texto" name="texto" required> </br>
  
  <!-- campo de senha -->
  <label for="senha">Senha:</label>
  <input type="password" id="senha" name="senha" required> </br>
  
  <!-- campo de e-mail -->
  <label for="email">E-mail:</label>
  <input type="email" id="email" name="email" required> </br>
  
  <!-- campo de número -->
  <label for="numero">Número:</label>
  <input type="number" id="numero" name="numero" min="0" max="100" required> </br>
  
  <!-- campo de data -->
  <label for="data">Data:</label>
  <input type="date" id="data" name="data" required> </br>
  
  <!-- campo de hora -->
  <label for="hora">Hora:</label>
  <input type="time" id="hora" name="hora" required> </br>
  
  <!-- campo de seleção -->
  <label for="selecao">Seleção:</label>
  <select id="selecao" name="selecao" required>
    <option value="">Selecione uma opção</option>
    <option value="opcao1">Opção 1</option>
    <option value="opcao2">Opção 2</option>
    <option value="opcao3">Opção 3</option>
  </select></br>
  
  <!-- campo de múltipla seleção -->
  <label for="multipla">Múltipla seleção:</label>
  <select id="multipla" name="multipla[]" multiple required>
    <option value="opcao1">Opção 1</option>
    <option value="opcao2">Opção 2</option>
    <option value="opcao3">Opção 3</option>
  </select></br>
  
  <!-- campo de checkbox -->
  <label for="checkbox">Checkbox:</label>
  <input type="checkbox" id="checkbox" name="checkbox" value="1"></br>
  
  <!-- campo de radio -->
  <label for="radio1">Radio 1:</label>
  <input type="radio" id="radio1" name="radio" value="1" required></br>
  
  <label for="radio2">Radio 2:</label>
  <input type="radio" id="radio2" name="radio" value="2" required></br>
  
  <!-- campo de arquivo -->
  <label for="arquivo">Arquivo:</label>
  <input type="file" id="arquivo" name="arquivo" accept=".jpg,.jpeg,.png" required></br>
  
  <!-- botão de envio -->
  <button type="submit">Enviar</button>
</form>
