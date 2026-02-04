<?php


$str = "Estamos testando o método strpos, com o strpos podemos encotrar strings";


$testeEncontrar = strpos($str, "strpos");

echo $testeEncontrar; // Output: 22

echo "<br>";

$testeEncontrar2 = strpos($str, "flutter");

if($testeEncontrar2===false){
    echo "A string não foi encontrada!<br>";
    
}


