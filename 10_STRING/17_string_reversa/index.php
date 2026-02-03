<?php


// string reversa// srtrev()

$str = "Cadê o meu queijo? Ele estava aqui em cima.";

$reversa = implode('', array_reverse(preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY)));

echo "A string original é: $str <br>";
echo "A string reversa é: $reversa";

echo "<br><br>";
echo "<strong>Utilizando a função preg_split para lidar com caracteres especiais<br> transformando em um array</strong>"  . "<br>";

print_r(preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY)) ;
echo "<br>";
echo "<strong>Utilizando a função array_reverse para inverter os elementos do array</strong>"  . "<br>";
print_r(array_reverse(preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY))) ;
echo "<br>";
echo "<strong>Utilizando a função implode para juntar os elementos do array em uma string</strong>"  . "<br>";
print_r(implode('', array_reverse(preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY)))) ; 


?>
