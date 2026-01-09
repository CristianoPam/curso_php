<?php
echo "OPERADORES LOGICOS<BR><BR>";

echo "Operador AND: && <br>";
echo "Operador OR: || <br>";
echo "Operador NOT: ! <br>";


echo "<br><img src='operadores-logicos.png' alt='Operadores Lógicos' width='500'>";

echo "<br><br> X=4, Y=7 e Z=9";
echo "<br> X+Y= é maior Z e Z menos Y é menor que X <br>";

$x = 4;
$y = 7;
$z = 9;

if (($x + $y > $z) && ($z - $y < $x)) {
    echo "<br> É verdadeiro";
}

if (1 && 1) {
    echo "<br>Verdadeiro!";
}

if (0 && 1) {
    
} else {
    echo "<br>Falso!<br>";
}

echo "<br> f=falso, v=verdadeiro, logo";
echo "<br> f || v => verdadeiro<br>";
$f = false;
$v = true;

if ($f||$v) {
    echo "É verdadeiro!";
}

echo "<br> f || !v => falso";
if ($f||!$v) {
    echo "<br>É verdadeiro!";
} else {
    echo "<br>É falso!";
}

echo "<br>";
echo "Operador NOT (!) é usuaro para inverter um valor lógico";


    

