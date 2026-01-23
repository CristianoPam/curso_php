<?php
/* o requere gerar erro fatal se o arquivo não existe, parando o script, dirente do include */

 //include "teste.php"; //pode exibir o erro, mais não para a execução
 require "teste.php"; //pode exibir o erro, mais não para a execução
 

?>


<p>Arquivo do include</p>

<?php

//acessando arquivos que estão dentro de uma pasta
require "arquivo/funcao.php";

?>