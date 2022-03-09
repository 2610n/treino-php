

<?php

   $contatos=array(1=>"octavio","lucas","adrielle","junior");
   $tamanho=count($contatos);
   $sorteio=rand(1,$tamanho);

   echo "O SORTIADO FOI : ".strtoupper($contatos[$sorteio]);




?>