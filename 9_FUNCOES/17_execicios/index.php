<?php

$qtdVogais=0;

function countVowels($a) {

foreach ($a as $a) {

        switch ($a) {
            case 'a':                
            case 'e':                
            case 'i':
            case 'o':
            case 'u':
                break;
            
            default:
                
                break;
        }    

        
}
                    return $qtdVogais;
}


echo countVowels('girassol');
