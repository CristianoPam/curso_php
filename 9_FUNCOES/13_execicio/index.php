<?php

function sumEvenNumbers($n){

if ($n > 1) {

$soma = 0;

for ($i=1; $i <=$n ; $i++) { 
    
    if ($i%2==0) {
       $soma+=$i; 
    }


}
    return $soma;

} else {
    $msg="Informe um número maior 1";
    return  $msg;
}

}

echo sumEvenNumbers(6) ;


?>