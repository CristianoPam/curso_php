<?php

// Valores de escape em strings
//precisamos usar a barra invertida \ para escapar caracteres especiais dentro de strings
// Exemplos: \n (nova linha), \t (tabulação), \\ (barra invertida), \" (aspas duplas) \$ (dólar)

header('Content-Type: text/plain'); // Define o tipo de conteúdo como texto simples para visualizar os escapes

//pular linha
echo "Olá, meu nome é Cristiano.\nTenho 38 anos.\nQuero ser Desenvolvedor.";

//tab
echo "\nOlá, meu nome é Cristiano.\tTenho 38 anos.\tQuero ser Desenvolvedor.";

//barra invertida
echo "\nCaminho do arquivo: C:\\Users\\Cristiano\\Documents\\Projeto";

//dolar
echo "\nO preço do produto é R$ 50,00.";
  

