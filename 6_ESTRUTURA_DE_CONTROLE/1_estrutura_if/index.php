<?php

//condição verdadeiro
if (6>5) {
    echo "Deu certo, entrou no if. <br>";
}

//condição falsa
if(2>5){
    echo "Deu certo, entrou no if. <br>";
}


//utilizando operador lógico
if(10==10 && 9>3){
    echo "Deu certo, o valor é verdadeiro. <br>";
}

//variaveis
$a =10;
$b =5;
$c ="Deu certo, entrou no if das variaveis. <br>";

if ($a>=$b) {
    echo $c;
}