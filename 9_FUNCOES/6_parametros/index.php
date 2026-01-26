<?php

function velocidadeMaxima($vel){
   echo "O carro atinge a velocidade máxima de $vel Km/h <br>"; 
}

$vl=150;

velocidadeMaxima(200);
velocidadeMaxima($vl);



function  descreverAnimal($nome,$raca){
    echo "O $nome é da raça $raca";
}


descreverAnimal("cachorro", "viralata");