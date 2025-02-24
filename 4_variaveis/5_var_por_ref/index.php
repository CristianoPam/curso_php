<?php

//variável referencia, uma vincula com a outra e conserva o mesmo valor. se uma muda a outra também muda.

$x = 2;

$y = & $x;

echo $x;
echo "<br>";
echo $y;

echo "<br>";
$y=14;

echo $x;
echo "<br>";
echo $y;
