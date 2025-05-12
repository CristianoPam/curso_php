<?php

echo 'OPERADORES ARITMÉTICOS';
echo '<br>';

$codigo = '
echo 3+2*5;
echo "<br>";
echo (3+2)*5;
echo "<br>";
echo 5+2/10;
echo "<br>";

$a=5;
$b=2;
$c=10;

echo $a + $b / $c;
echo $c + $b / $a;

$d= $a * $b * $c;

echo $d;
';
echo '<pre>' . htmlspecialchars($codigo) . '</pre>';

echo 3+2*5;
echo "<br>";
echo (3+2)*5;
echo "<br>";
echo 5+2/10;
echo "<br>";

$a=5;
$b=2;
$c=10;

echo $a + $b / $c;
echo "<br>";
echo $c + $b / $a;
echo "<br>";
$d= $a * $b * $c;

echo "<span style='color: red; font-size: 20px; font-weight: bold;'>$d</span>";