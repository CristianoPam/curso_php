<?php

// Limpando espaços em branco no início e no fim da string
// trim() limpa os espaços em branco no início e no fim da string
// ltrim() limpa os espaços em branco no início da string
// rtrim() limpa os espaços em branco no fim da string

$str1="   Me chamo Agatha Cassia   ";


// Usando trim()
$limpando = trim($str1);
echo "Esta é a string 1:$limpando.<br>";

// Usando ltrim()
$limpando = ltrim($str1);
echo "Esta é a string 1:$limpando.<br>";


//Usando rtrim()
$limpando = rtrim($str1);
echo "Esta é a string 1:$limpando.<br>";

