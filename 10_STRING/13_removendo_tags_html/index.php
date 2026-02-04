<?php

//remover tags html de uma string

$textoComTags = "<h1>Olá, <em>mundo</em>!</h1><p>Este é um <strong>exemplo</strong> de texto com <a href='#'>tags HTML</a>.</p>";

echo $textoComTags;

$textoSemTags = strip_tags($textoComTags);

echo "<br><br>";
echo $textoSemTags;
?>

