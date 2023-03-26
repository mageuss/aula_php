<?php


session_start();

if (isset($_POST['idioma']))
  $_SESSION['idioma'] = $_POST['idioma'];

//var_dump($_SESSION);

if(isset($_SESSION['idioma'])) {
  // Idioma escolhido, utiliza a variável de sessão para exibir o conteúdo correto
  $idioma = $_SESSION['idioma'];
  
  switch($idioma) {
    case 'pt-br':
      $titulo = 'Bem-vindo';
      $conteudo = 'Este é o conteúdo em português do Brasil.';
      break;
      
    case 'en':
      $titulo = 'Welcome';
      $conteudo = 'This is the content in English.';
      break;
      
    case 'es':
      $titulo = 'Bienvenido';
      $conteudo = 'Este es el contenido en español.';
      break;
      
    default:
      $titulo = 'Bem-vindo';
      $conteudo = 'Este é o conteúdo em português do Brasil.';
      break;
  }
} else {
  // Idioma não escolhido, exibe conteúdo padrão
  $titulo = 'Bem-vindo';
  $conteudo = 'Este é o conteúdo em português do Brasil.';
}

echo $titulo . "<br>";
echo $conteudo;
?>


