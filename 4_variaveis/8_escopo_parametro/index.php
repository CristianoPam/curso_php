<?php

echo "<br>";

$codigo = '
function soma ($x, $y){
   echo $x + $y;
   echo "<br>";   
}

soma(12,13);
soma(4,5);
soma (140,5);

';


echo '<pre>' . htmlspecialchars($codigo) . '</pre>';


function soma ($x, $y){

   echo $x + $y;
   echo "<br>";   

}


soma(12,13);
soma(4,5);
soma (140,5);

