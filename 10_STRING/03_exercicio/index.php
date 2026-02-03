<?php

$objetos =[
    "Carro"=>35000,
    "escova de dente"=>15,
    "Bicicleta"=>800,
    "pirulito"=>1,
    "Sofa"=>1200,
    "Geladeira"=>2300,
    "bola de gudes"=>5,
    "Cafeira"=>300,
    "Computador"=>4500,
    "Lapizr"=>2,
    "Livro"=>7,
    "Celular"=>1500
     ];

     


function filtrarPreco($objetos){

    $precoBaixoDeDez=[]; 

    foreach($objetos as $item => $preco){
        

        if($preco < 10){
            $item= "O objeto $item custa R$ $preco <br>";
            array_push($precoBaixoDeDez,$item);

        }
        
    }
    return $precoBaixoDeDez;
}


$resultado = filtrarPreco($objetos);
foreach($resultado as $res){
    echo $res;
}