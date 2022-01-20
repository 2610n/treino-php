


<?php
$txt="ola mundo";
  
echo is_string($txt)?"é uma string":"nao é string";
echo "<br><hr>";

$numint=15;

echo is_int($numint)?"é um numero inteiro": "não é um numero inteiro ";

echo "<br><hr>";

 $numfloat=45.15;

echo is_float($numfloat)?"sim é um numero flutuante":"não e um numero flutuante ";

echo "<br><hr>";

$mochila=array("ola","mundo");
echo is_array($mochila)?"sim é um array":"não é array";
?>