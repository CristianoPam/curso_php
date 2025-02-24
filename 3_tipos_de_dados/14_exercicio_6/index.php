<?php

$carro = ['modelo'=>'passeio','cor'=>'verde', 'marca'=>'Ford'];


echo "O carro de $carro[modelo] da cor $carro[cor] e pertence a marca $carro[marca]!";

echo "<br>";

foreach ($carro as $valor){
    echo "<br>$valor";
}

$veiculo = [
    'marca'=> 'BMW',
    'rodas'=> 4,
    'teto_solar'=> true,
    'velocidade_max'=> 300,
    'blindado'=> false
];

foreach ($veiculo as $valor) {
    echo "<br>$valor";
}


