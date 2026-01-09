<?php

echo "Igualdade: == <br>";
echo "Idêntico: === (verifica o tipo)<br>";
echo "Diferença: != <br>";
echo "Não idêntico: !== (verifica o tipo)<br>";
echo "Maior e maior ou igual a: > e >= <br>";
echo "Menor e menor ou Igual a: < e <= <br>";


$a = 0;
$b = 2;
$c = 7;
$d = "0";

echo "5 = '5' ?<br>";
if ($d===$a) {
    echo "É verdadeito.";
} else {
    echo "É Falso.<br>";
}

while ($a <= 8) {
    $a++;
    echo "$a => ";

    if ($a==9) {
        echo "FIM!";
    }
}


