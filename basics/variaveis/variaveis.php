<?php
  /* 
  Variáveis em PHP
  
  - Case sensitive
  - declara com $nomeDaVariavel = variavel;

  PHP Variables
  A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume).

  Rules for PHP variables:

  A variable starts with the $ sign, followed by the name of the variable
  A variable name must start with a letter or the underscore character
  A variable name cannot start with a number
  A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
  Variable names are case-sensitive ($age and $AGE are two different variables)
  
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

  $txt = "PHP";
  echo "I love $txt!";

  //The PHP var_dump() function returns the data type and value:
  $x = 5985;
  var_dump($x);

  // Check if the type of a variable is integer   
  $x = 5985;
  var_dump(is_int($x));

  echo "<br>";

  // Check again... 
  $x = 59.85;
  var_dump(is_int($x));

  // Check if the variable is numeric   
$x = 5985;
var_dump(is_numeric($x));

echo "<br>";

$x = "5985";
var_dump(is_numeric($x));

echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));

echo "<br>";

$x = "Hello";
var_dump(is_numeric($x));

// Cast float to int 
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;
  
echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;


?>