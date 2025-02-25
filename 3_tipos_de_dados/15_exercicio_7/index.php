<?php

$pessoa = [
    'nome'=> 'Crisiano',
    'altura'=> 1.75,
    'idade' => 36,
    'peso' => 67,
    'sexo' => 'masculino',
    'naturidade' => 'Jadim',
    'saude' => true
];
$nome = $pessoa['nome'];
$altura = $pessoa['altura'];
$idade = $pessoa['idade'];
$peso = $pessoa['peso'];
$sexo = $pessoa['sexo'];
$naturalidade = $pessoa['naturidade'];
$saude = $pessoa['saude'];



if ($idade>=18) {
    echo " O $nome tem $idade anos, sua altura é de $altura
    , pesa $peso kg, é do sexo $sexo,<br> natural de $naturalidade 
    e a sua saúde é ";
    if($saude){
        echo "boa.";
    }
    

}