<?php


function sumDigits($number) {
    $sum = 0;
    $digits = str_split($number); // Converte o número em um array de dígitos
    
    foreach ($digits as $digit) {
        $sum += (int)$digit; // Converte o dígito de volta para inteiro e soma
    }
    
    return $sum;
}

// Exemplo de uso
$number = 12345;
echo $result = sumDigits($number);