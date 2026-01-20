<?php

$x=10;

while($x>0){

if ($x==5||$x==7) {
    echo "Pulou a execução $x <br>";
    $x--;
    
    continue; //PULE PARA A PRÓXIMA EXECUÇÃO
}

if($a==2){
    echo "termiando o looop break $a <br>";
    break; //finaliza o Loop aqui
}


echo "Executando o loop $x<br>";

$x--;

}


