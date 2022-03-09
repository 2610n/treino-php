<?php

$mochila=array("arros","feijão");
print_r($mochila);
echo "<br>";
foreach($mochila as $valor){
    echo "$valor <br>";
}
echo "<br>";

$mochila2=array("mt1"=>"cola","mt2"=>"lapis");//array associativo

foreach($mochila2 as $valor=>$intem){

    echo $valor."=>".$intem."<BR>";

}





?>