<?php
//range() - Cria um array preenchido com uma sequência de números ou caracteres
$arr = range(1,10);
print_r($arr);
echo "<br>";echo "<br>";

$arr2 = range("A","Z");
print_r($arr2);echo "<br>";

//Criando um array de 0 a 100, pulando de 10 em 10 alterando o step do range() para 10
echo "<br>";
$arr3 = range(0,100,10);
print_r($arr3);
echo "<br>";




