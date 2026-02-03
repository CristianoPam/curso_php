<?php

// string para array // explode()
echo "<strong>String para Array utilizando a função explode()</strong><br><br>";
echo "<strong>explode(delimitador, variavel_string)</strong><br><br>";
echo "No caso aqui é a vírgula como delimitador <br><br>";


$str = "banana,maçã,laranja,uva";

$array_frutas = explode(",", $str); 

echo "A string original é: $str <br><br>";
echo "A string transformada em array é: <br>";
print_r($array_frutas);
echo "<br><br>";


$comidas = "arroz|feijão|carne|salada|macarrão";

$array_comidas = explode("|", $comidas);    
echo "A string original é: $comidas <br><br>";
echo "A string transformada em array é: <br>";  
print_r($array_comidas);
echo "<br><br>";            


