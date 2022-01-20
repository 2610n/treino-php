<?php
//empty verifica se a  variavel esta vazia ou nao
$nome="";// MESMO COM ASPA ELE RETRNA VAZIO DIFERENTE DO ISSET QUE COM ASPA SIGUINIFICA QUE A VARIAVEL FOI DECLARADA;
echo empty($nome)?"esta vazia<br>":"não esta vazia<br>";//esta vazia


$nome2="lucas";
echo empty($nome2)?"esta vazia<br>":"não esta vazia<br>";// nao esta vazia 

?>