<?php
  /* Variáveis Referenciadas e Variáveis Variantes */

  $a = 3;
  $b = $a;
  $b += 5;

  echo $a;
  echo "<br/>$b";

  //Variáveis Referenciadas
  $a = 3;
  $b = &$a; //Adicionando o & na atribuição
  $b += 5;

  echo"<br/>";
  echo $a;
  echo "<br/>$b";

  //Variáveis Variantes ou Variáveis de Variáveis

  /* Colocar um segundo $ na frente de uma variável também possui um efeito bem peculiar. Ele vai criar uma variável dinamicamente, dependendo do conteúdo da variável original. Essas são as variáveis de variáveis em PHP. 

  $userAdmin = "nome";
  $$tipo = "user";

  echo $userAdmin;
  echo $tipo;
*/
?>