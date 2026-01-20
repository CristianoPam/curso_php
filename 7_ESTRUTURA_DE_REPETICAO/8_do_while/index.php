<?php

$c='jabuticaba';
$j=0;

do {
    echo "Testando do while $j <br>";

    if ($j==5) 
        {
        echo "Hoje comi $c<br>";
    }


    $j++;
} while ($j < 10);

$i=10;

do {
    echo "Testando o do while2 $i<br>";

    if ($i==5) {
        echo "Hoje não comi $c <br>";
         $i--;
        continue;
    }

    $i--;

} while ($i > 0);
