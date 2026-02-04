<?php

$str = "Testando o resto da string, pra ver se dá certo.";


$teste = strstr($str, "resto");

echo $teste; // retorna "resto da string, pra ver se dá certo."


if (strstr($str, ".NET") === false){
    echo "<br>A string .NET não foi encontrada.";

}

