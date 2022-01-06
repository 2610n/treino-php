
<?php
$nome="lucas";
$cont=strlen($nome);//ele retorna a quantidade de letras   numa variavel;
echo "$nome tem  $cont letras";


exit;
$frase="a repetição e  a mae da reteção.";
$q=strpos($frase,"mae");//ele retorna a posição da palavra 
$texto=substr($frase,0,$q);
var_dump($texto);



exit;
$nome="lucas";
$nome2=" victor";
//interpolação de variáveis
echo ' $nome $nome2 <br>';//aspas simples entende que tudo e texto
echo "$nome $nome2";//ja aqui podemos chamar a variavel dentro das aspas  

exit;


echo ucfirst($nome); //define a primeira letra de um paragrafo em maiusculo
exit;
echo ucwords($nome); // ele converte as primeiras letras de cada palavra em maiuscula 
exit;
echo str_replace('u','0',$nome);// funçao que altera alguma letra  no valor da variavel 
exit;
echo strtolower($nome);//converte em letras minusculas 
exit;
echo strtoupper($nome);//converte  em letras maiusculas




?>