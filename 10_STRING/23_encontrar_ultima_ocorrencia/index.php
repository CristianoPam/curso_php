<?php

$str = "Testando encontrando palavra teste, em uma string que tem teste";


$palavra= strrpos($str, "teste");

echo "$palavra<br>"; // Output: 28

$palavra2= strrpos($str, "PHP");

if($palavra2===false){
    echo "A palavra não foi encontrada!<br>";
}   

// Pegando a palavra encontrada junção de substr com strpos.
$p = substr($str, strpos($str, "teste"),5);
echo "\n$p"; // Output: teste
?>




