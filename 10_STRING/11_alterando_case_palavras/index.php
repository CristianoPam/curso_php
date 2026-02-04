<?php

// Alterando o case das palavras em uma palavra
// ucfirst() - Primeira letra maiúscula
// ucword() - Primeira letra minúscula

$frase = "o rato roeu a roupa do rei de roma";


echo ucfirst($frase) . "<br>"; // O rato roeu a roupa do rei de roma
echo ucwords($frase) . "<br>"; // O Rato Roeu A Roupa Do Rei De Roma
?>
//essas funções são muito úteis para formatar textos, geralmente
//se delega para o front-end (html e css), mas em alguns casos pode ser necessário.


