<?php

//arrya associativo

$pet = ['nome'=>'Pandora', 'patas'=>4, 'cor'=>'Branca'];
echo $pet['nome'];
echo "<br>";
print_r($pet);
echo "<br>";
echo "A cachorra se chama {$pet['nome']} e têm {$pet['patas']} patas e seus pelos tem a cor {$pet['cor']}";