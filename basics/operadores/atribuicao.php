<?php
  /* 
  Operadores de Atribuição 

  Adiçãoo
  $a = $a + $b //ou $a += $b

  Subtração
  $a = $a - $b //ou $a -= $b

  Multiplicação
  $a = $a * $b //ou $a *= $b

  Divisão
  $a = $a / $b //ou $a /= $b

  Módulo
  $a = $a % $b //ou $a %= $b

  Concatenação
  $a = $a . $b //ou $a .= $b
  
  //Exemplo
  $a = 1;
  $b = 3;
  $c = $a + $b;
  $d = $d + 5; //ou $d +=5; 
  $b = $b + $a; //ou $b +=a; 

  //Mesmo resultado
  $a = $a + 1; 
  $a += 1;
  $a++;

  //Operadores de Incremento e Decremento

  //Pré-incremento
  $a = $a + 1
  ++$a

  //Pós-incremento
  $a = $a + 1
  $a++

  //Pré-decremento
  $a = $a - 1
  --$a

  //Pós-decremento
  $a = $a - 1
  $a--

  //======================================================================
  */

  /*
  #Exercício 01 - Operadores de Atribuição 

  $preco = $_GET["p"];
  //$juros = $preco + ($preco*10/100);  
  
  echo "O preço do produto é R$ ".number_format($preco, 2);
  $preco += ($preco*10/100);
  echo "<br/>O preço do produto com 10% de acréscimo é R$ ".number_format($preco, 2);

  $preco = $_GET["p"];
  $preco -= ($preco*10/100);
  echo "<br/>O preço do produto com 10% de desconto é R$ ".number_format($preco, 2);
  */

  #Exercício 02 - Operadores de Incremento e Decremento

  $anoAtual = $_GET["aa"];

  echo "O ano atual é $anoAtual e o ano anterior foi ".(--$anoAtual);

?>