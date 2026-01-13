<?php

$valor_prod;
$categoria;
$desconto;
$subtotal;

function calcularDesconto($categoria,$valor_prod){
    switch ($categoria) {
        case 'eletronicos':
            $desconto=10;
            break;
        case 'vestuario':
            $desconto=20;
            break;
        case 'alimentos':
            $desconto=5;
            break;        
        default:
            $desconto=0;
            break;
    }
    $subtotal = $valor_prod-($valor_prod * $desconto/100);
    return $subtotal;
} 



echo calcularDesconto('eletronicos',100);