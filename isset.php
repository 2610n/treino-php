<?php

$loja="";//VARIAVEL DEFINIDA

//unset($loja);//ele apagar o valor da variavel 
 
echo isset($loja)?"variavel definida<br>":"indefinida<br>";//verifica se a variavel foi definida ou não; no caso (definido)se esta declarada ou nao

$loja2;
echo isset($loja2)?"variavel definida<br>":"indefinida<br>";//(indefinido)

?>