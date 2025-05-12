<?php

echo "Adição<br>";
echo "2+7=";
$a=2;
$b=7;
echo $a + $b;
echo "<br>";

echo "Subtração<br>";
echo "7-2=";
$a=2;
$b=7;
echo $b - $a;
echo "<br>";

echo "Multiplicação<br>";
echo "7-2=";
$a=2;
$b=7;
echo $b - $a;
echo "<br>";

echo "Divisão<br>";
echo "7/2=";
$a=2;
$b=7;
echo $b / $a;
echo "<br>";

echo "Modulo (resto da divisão)<br>";
echo "7%2=";
$a=2;
$b=7;
echo $b % $a;
echo "<br>";

echo "Operador Exponencial<br>";
echo "7**2=";
$a=2;
$b=7;
echo $b ** $a;
echo "<br>";

echo "Operador de concatenação<br>";
echo "7.2=";
$a=2;
$b=7;
echo $b . $a;
echo "<br>";
$marca = "Ferrari";
$motor = "3.0";
$vel_max = 200;

echo "O carro da ".$marca." tem um motor ".$motor. " e chega a velocidade de ".$vel_max." Km/h.";

echo "<br><br>";
echo "Operador de incremento  e decremento<br>";
echo "variavel++ ou variavel++= <br> a=2 <br>b=7 <br>";
$a=2;
$b=7;
echo  $a++;
echo $b--;
echo "<br>";
echo "<br>";



echo "25 <br>";
echo "DECIMAL COM FOR<br>";
$dec = 25;

function decimalfor($d) {
    $binario = '';

    for (; $d > 0; $d = intdiv($d, 2)) {
        $resto = $d % 2;
        echo "Dividindo $d por 2, resto = $resto<br>";
        $binario = $resto . $binario; // monta o número binário ao contrário
    }

    echo "Resultado binário: $binario<br>";
}

decimalfor($dec);


echo "<br>";
echo "DECIMAL COM WHILE<br>";


echo "25 <br>";
$dec = 25;

function decimalwhile($d) {
    while ($d > 0) {
        $resto = $d % 2;
        echo "Dividindo $d por 2, resto = $resto<br>";
        $d = intdiv($d, 2); // divisão inteira
    }
}

decimalwhile($dec);



