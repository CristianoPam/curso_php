<?php

//função strlen() retorna o tamanho de uma string

$str1="Esta string é muito grande mesmo!";
$str2="Já esta é pequena.";



echo strlen($str1)."<br>"; //retorna 33
echo strlen($str2)."<br>"; //retorna 20
$len1= strlen($str1);
$len2= strlen($str2);


if ( $len1 > $len2) {
    echo "A string 1 é maior que a string 2.";
} else {
    echo "A string 2 é maior que a string 1.";
}