<?php

global $qtdVogais;

function countVowels($a) {
    global $qtdVogais;
    $qtdVogais = 0;
    foreach (str_split($a) as $a) {
        switch ($a) {
            case 'a':
                $qtdVogais++;
                break;               
            case 'e': 
                $qtdVogais++;
                break;                    
            case 'i':
                $qtdVogais++;
                break;
            case 'o':
                $qtdVogais++;
                break;
            case 'u':
                $qtdVogais++;
                break;
            
            default:
                
                break;
        }    

        
}
                    return $qtdVogais;
}


echo countVowels('girassol');
echo "<br>";
echo countVowels('Paraguai');
echo "<br>";
echo countVowels('abacaxi');
