<?php

$nome="lucas";

function exibir(){
    $nome="luiz";
    global $nome;
    echo  $nome;

}

exibir();

echo "<br><hr>";
$x=20;
$y=20;

function somar(){
   // global $x,$y;
   $res=$GLOBALS['x']+$GLOBALS['y'];
   echo $res;
}

somar();


?>