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

//colocando diretament no if o nome do campo do array
if ($pessoa['idade']>=18){
    echo "{$pessoa['nome']} é maior de 18.";
    echo "<br>";
}

//alimentando variaveis com o valor de cada item do array.
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