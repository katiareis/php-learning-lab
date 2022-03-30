<?php
  /* Operadores Relacionais 
  
  Maior >
  $a > $b

  Menor <
  $a < $b

  Maior ou Igual >=
  $a >= $b

  Menor ou Igual <=
  $a <= $b

  Diferente <> ou !=
  $a <> $b
  $a != $b

  Igual == 
  $a == $b

  Idêntico === (avalia se são de mesmo tipo)
  $a === $b
  
  */

  //=========================================================================

  /* Operador Ternário
   
  Expressão ? Verdadeiro : Falso

  $teste = $a > $b ? $a : $b; //Teste vai receber o valor da variável de maior valor

  $resultado = $a > $b ? $a + $b : $a - $b; //Resultado vai receber um valor diferente relativo a operação, dependendo da comparação entre a e b.

  $situação = $media <= 7 ? "recuperação" : "aprovado";

  */

  //Exercício 01
  $n1 = $_GET["a"];
  $n2 = $_GET["b"];
  $tipo = $_GET["opcao"];

  echo "Os valores recebidos são $n1 e $n2";
  $resultado = ($tipo == "soma") ? $n1+ $n2 : $n1*$n2;

  echo "<br/>O resultado é $resultado";

  //Exercício 02
  $a = 3;
  $b = "3";
  $result = ($a == $b) ? "Sim":"Não";
  echo "<br/> As variáveis A e B são iguais? $result";
  $result = ($a === $b) ? "Sim":"Não";
  echo "<br/> As variáveis A e B são idênticas? $result";

   //Exercício 03
   $nota1 = $_GET["nota1"];
   $nota2 = $_GET["nota2"];
   $media = ($nota1 + $nota2) / 2;

   echo "A média entre as notas $nota1 e $nota2 é $media";

   $situacao = ($media < 6) ? "Reprovado" : "Aprovado";
   //echo "<br/>O aluno está $situacao";
   echo "<br/>O aluno está ".(($media < 6) ? "Reprovado" : "Aprovado");


?>