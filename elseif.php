
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
   
      function media($a1,$a2,$a3){

        $res=($a1+($a2*2)+($a3*2))/5;

        if($res>=9 && $res<=10){
            echo "passado com louvor $res";

        }elseif($res>=4 && $res<=5){
            echo "aluno de recuperação $res";

        }else{
            echo "aluno reprovado $res";
        }

      }
      media(1,1,6);


?>

    
</body>
</html>