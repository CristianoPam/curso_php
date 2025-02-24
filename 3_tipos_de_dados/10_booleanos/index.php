<?php

/* true e false */



echo 'Alguns valores considerados
falsos:  <br> 0, 0.0, "0", [], null ' ;

echo "<br>";

echo true;  // aparece 1, pois o 1 e considerado verdadeiro

echo false; // não imprime na tela.

echo "<br>";

if (true){
    echo "É verdadeiro!<br>";

}

if (5>2){
    echo "É verdadeiro!<br>";
}


$podeEntrar = true;

if($podeEntrar){
    echo "O usuário pode entrar.";
}


