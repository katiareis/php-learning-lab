<?php
  /* Método Get e Post */

  /* 
  O Método get envia dados pela URL e o Método post envia por pacotes
  <form method="get"> utiliza $valor=$_GET["n"];
  <form method="post"> utiliza $valor=$_POST["n"];

  */

  # Exercício com GET
  // A variável $valor vai receber dados do formulário utilizando o método GET.
  // O arquivo .php vai receber o valor da propriedade name="" do formulário.
  $valor = $_GET["valor"];

  echo "Digitou o valor $valor";

?>