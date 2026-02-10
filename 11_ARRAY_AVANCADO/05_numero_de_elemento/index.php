<?php

//caunt() - Retorna o número de elementos de um array
$arr = [1,2,3,4,5,6,7,8,9,10,11];


echo count($arr); //11
echo "<br>";

$arr2 = range(1,100);
echo count($arr2);

$arr3 = ["nome" => "Cristiano", "idade" => 38, "cidade" => "Campo Grande"];
echo "<br>";
echo count($arr3); //3
echo "<br>";

