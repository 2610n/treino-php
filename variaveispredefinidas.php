<?php


$nome_scrpti=$_SERVER['SCRIPT_NAME'];//ele retorna o indereço e nome do script em execuçao da parafazer log
echo $nome_scrpti;

exit;
$ip=$_SERVER["REMOTE_ADDR"];//ele pega o indereço do anbiente ($_serve)nao só do servido mais sim do ambiente
ECHO $ip;

exit;

$n1=$_GET["a"];//recebendo parametros via get
$n2=$_GET["b"];//recebendo parametros via get

echo $n1+$n2;





?>