<?php 

$i=0;

while($i<=10){
    echo "Loop externo $i<br>";

    #segundo contador
    $j=0;
    while($j<=10){
        
    if ($j%2==0) {
        echo "Loop interno $j é PAR!<br>";
    } else {
        echo "Loop interno $j é IMPAR!<br>";
    }   
        

        $j++;
    }


    $i++;
}