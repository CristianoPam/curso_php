<?php

$objetos =[
    "Carro"=>35000,
    "Sofa"=>1200,
    "Geladeira"=>2300,
    "Cafeira"=>300,
    "Computador"=>4500];


foreach($objetos as $item => $preco){
    echo "O preço do(a) {$item} é R$ {$preco}.\n";
    }
