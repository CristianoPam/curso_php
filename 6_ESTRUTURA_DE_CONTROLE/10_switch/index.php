<?php

/* no switch pode haver o break para finalizar ao encontrar a condição desejada e 
o default em caso de deixa um retorno padrão quase passe por todos os demais case. */

$x = 0;

switch ($x) {
    case 1:
        echo "X é igual a 1<br>";
        break;
    case 2:
        echo "X é igual a 2<br>";
        break;
    case 3:
        echo "X é igual a 3<br>";
        break;
    default:
        echo "X é igual a 0<br>";       
}
