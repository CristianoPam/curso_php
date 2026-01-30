<?php

global $itensSeparados;


function itensMercado($itens) {
    
    $itensSeparados = ''; 

    foreach ($itens as $item) {

        if ($item === end($itens)) {
            $itensSeparados .= $item.'.';
        } else {
            $itensSeparados .= $item . ', ';
        }
        
        
        
    }    
        $itensSeparados = "Você levou estes itens do mercado: " . $itensSeparados;
    
        return  $itensSeparados;
}
    



$itens = ['banana', 'maçã', 'laranja', 'abacaxi', 'melancia', 'mamão'];

 echo itensMercado($itens);

