
<?php

function txt(){

    $txt1="ola mundo";
    return $txt1;

}

echo txt()."<br>";

function maiu($txt){

    return strtoupper($txt);

}

echo maiu("lucas");

//brincando um pouco

echo "<br>";

function txtmaiusculor($txt2){

echo isset($txt2)?"<p style='text-transform:uppercase'>$txt2<p>":"<p> </p>";
}

txtmaiusculor("ola");
?>

