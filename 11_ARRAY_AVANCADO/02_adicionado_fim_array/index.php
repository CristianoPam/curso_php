<?php
echo "ADICIONANDO NO FIM DO ARRAY UM VALOR
<BR>SÓ COLOCAR O ÍNDICE VAZIO <STRONG> ARRAY [ ]</STRONG>";
echo "<br>";
echo "<br>";

$arr = [1,2,3];


$arr[] = 4;

print_r($arr);
echo "<br>";

$arr[]= 5;


print_r($arr);
echo "<br>";

$arr2=[];
