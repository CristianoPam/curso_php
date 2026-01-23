<?php

$idade=12;

echo "A idade é $idade <br>";

//inclusão de arquivo de pasta diferente da atual
include __DIR__. "/../testando.php";

/*
__DIR__ é uma constante mágica do PHP.
Ela sempre retorna o diretório onde o arquivo atual está salvo (não depende de onde o script foi chamado).
*/