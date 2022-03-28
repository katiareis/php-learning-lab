<?php
  /* 
  Variáveis em PHP
  
  - Case sensitive
  - declara com $nomeDaVariavel = variavel;
  
  */

  $nome = "Katia"; //string
  $idade = 35;
  $numero = 4; //int
  $preco = 10.50; //float
  $casada = true; //boolean  

  /* Typecast */
  $meunome = (string)"Katia";
  $n1 = (int)10;
  $umnome = (int)"Katia"; //printa 0 na tela, ou seja, false
  $outronome = (int)"10Gustavo"; //printa 10 pq a variavel inicia com 10

  /* Concatenação */
  
  echo $nome." tem ".$idade." anos";
  echo "<br> ou <br>";

  //Template Strings
  echo "$nome tem $idade anos"; //É preciso que sejam aspas duplas "".

?>