<?php

$x="_";
$y=0;
$z=0;
$a="<br>";


while ($z <= 10) {
   
    // calcula os espaços de forma inversa
    $b = str_repeat("&nbsp;", 12 - $z);

    echo $b.$y.$x;
    echo $x.$y;
    echo $a;

$x.="_";
$y++;    
$z++;

}