<?php 

//contador; condição; incremento/descremento
$nome="cristiano";

for ($i=0; $i < 10; $i++) { 
    
    if($i==4){
        echo "$nome <br>";
        continue; //pula uma excução
    }

    if($i==7){
        break;  //para a execução
    }

    echo "Testando for $i <br>";


}

