<?php

//substring - resgatando parte da string
// substr($str, início, tamanho)

$str="O Rato roeu a roupa do rei de Roma";

$recorte1 = substr($str, 23, 3); //


echo $str;
echo "<br>";
echo $recorte1; //rei
echo "<br>";
echo substr($str, 21); //rei de Roma
echo "<br>";
echo substr($str, 11,-8); //a roupa do rei
echo "<br>";