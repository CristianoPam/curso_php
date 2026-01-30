<?php



function alteraDados($nome, $idade) {
    
    $nome = "Sr. " . $nome;
    $idade = "$idade anos";

    return [$nome, $idade];
}





$dados= alteraDados("Carlos", 28);
print_r($dados);
echo "<br>";
echo  $dados[0] . "<br>";
echo  $dados[1] . "<br>";

echo "<br>";
echo " Olá " . $dados[0] . ", você tem " . $dados[1] . ".";