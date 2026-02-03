<?php

// Alterando o case de uma string
// strtoupper() - Converte todos os caracteres para maiúsculo       
// strtolower() - Converte todos os caracteres para minúsculo
// ucfirst() - Converte o primeiro caractere para maiúsculo


$str = "esta String está em Caixa Baixa.";
$maiusculo = mb_convert_case($str, MB_CASE_UPPER, "UTF-8");
echo "Deixando a string a seguir maíusculo:  $maiusculo <br>";


$str1="ESTA STRING ESTÁ EM CAIXA ALTA.";
$minusculo = mb_convert_case($str1, MB_CASE_LOWER, "UTF-8");
echo "Deixando a string a seguir minúsculo: $minusculo<br>";


$str2="esta string está em caixa baixa, mas o primeiro caractere será maiúsculo.";
$primeiraMaiuscula = mb_convert_case($str2, MB_CASE_TITLE, "UTF-8");
echo "Deixando o primeiro caractere da seguinte string maiúsculo: $primeiraMaiuscula<br>";
?>
