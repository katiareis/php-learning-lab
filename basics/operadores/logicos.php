<?php
  /* Operadores Lógicos 
  
  And ou &&
  or ||
  xor
  !

  */

  //Exercício 01
  $ano = $_GET["ano"];
  $idade = 2022 - $ano;
  echo "Quem nasceu em $ano tem hoje $idade anos";
  $tipo = ($idade>=18 && $idade<65) ? "Obrigatorio" : "Não Obrigatório";
  echo "<br/>Seu voto é $tipo";

?>