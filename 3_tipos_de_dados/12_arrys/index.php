<?php

$a = [1,2,3];

//imprimido o array como ele é estruturado
print_r($a);
echo "<br>";
echo $a[0];

$arr = ["Cristino",355, true];

echo "<br>";

foreach ($arr as $valor){
    echo "$valor <br>";
}


foreach ($arr as &$valor){
    echo "$valor";
}






