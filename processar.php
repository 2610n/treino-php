<?php
if(isset($_POST["btn"])){

$num=isset($_POST["n"])?$_POST['n']:"sem valor";
echo "<div class='row  bg-dark text-warning'>  ";

for($contador=1;$contador<=$num;$contador++){
    echo"<div class='col-3'>";
    
    for($cont2=0;$cont2<=10;$cont2++){
            $res=$contador * $cont2;
            echo "$contador X $cont2 = $res<br>";
        }
        
       echo"<br></div>" ;
    }


}

?>