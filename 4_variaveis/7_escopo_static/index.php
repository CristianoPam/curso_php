<?php

echo '    VARIAVEL DE ESCOPO<br>';
function teste(){

    $num = 0;

    $num++;

    echo "<br>"."$num";
}

teste();
teste();
teste();

echo '<br>________________________________<br>';
echo '<br>     VARIAVEL DE STETIC<br>';
function testeStatic(){

    static $num = 0;

    $num++;

    echo "<br>"."$num ";
}


testeStatic();
testeStatic();
testeStatic();

