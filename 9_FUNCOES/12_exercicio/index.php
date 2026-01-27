<?php

$array =[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];


function Numerico($arrayNum){
    $arrayImpar=[];

    for ($i=0; $i < count($arrayNum) ; $i++) { 
        

        if ($arrayNum[$i]>7) {         
         array_push($arrayImpar,$arrayNum[$i]);;               
        } 
      
    }

    return $arrayImpar;
  

}

print_r(Numerico($array)) ;

?>