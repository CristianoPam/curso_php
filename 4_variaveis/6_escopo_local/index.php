<?php


//ESCOPO
/*
LOCAL: variável declaradas fora de duas fUnções;
GLOBAL:  variáveis declaradas fora de funções;
STATIC: variáveis declarada dentro da função, porém o seu valor 
permance salvo entre chamadas de função;
PARÂMETROS DE FUNÇÃO:  variáveis passadas para uma função,
podendo ser utilizadas ao longo da mesma;


*/

$x = 10;

//variavel global
echo "$x global <br>";

//função e uma variável seu escopo na função
function exibir() {
    $x = 5;
    echo "$x local 1 <br>";
}

//chamada de função
exibir();


//mudando a variável global
$x =31;


//nova função

function exibi(){
    $x =36;
    echo  "$x local 2 <br>";
}

//segunda chamada
exibi();

//imprimindo novamente a variável global
echo "$x global <br>";

//ou seja, a variável global não afeta a local e assim vice-versa.
