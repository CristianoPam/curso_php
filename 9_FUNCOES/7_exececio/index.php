<?php

function Pessoa($nome, $idade,$sexo){
 if ($sexo=="M") {
    echo "Olá eu sou a $nome e tenho $idade anos. <br>";
 } else {
    echo "Olá eu sou o $nome e tenho $idade anos. <br>";
 }
  


}


Pessoa("Cristiano",38, "H");
Pessoa("Amanda",28, "M");
