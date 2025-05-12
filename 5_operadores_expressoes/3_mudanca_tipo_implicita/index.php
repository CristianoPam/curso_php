<?php



echo "<br>";

$a;


function qualTipo($a) {
    
if (is_float(is_float($a))){
    echo "É float. <br>";
} elseif (is_int($a)) {
    echo "É Inteiro. <br>";
} elseif (is_string($a)) {
    echo "É um String. <br>";
} elseif (is_bool($a)) {
    echo "É um Booleano. <br>";
} elseif (is_null($a)) {
    echo "É um NULL. <br>";
} elseif (is_double($a)) {
    echo "É um double. <br>";
}  elseif (is_integer($a)) {
    echo "É um interger. <br>";
}  else {
    echo "É outra coisa kkk!";
}

}

//auto cast : mudança de tipo no php automática

echo "=> Auto cast : mudança de tipo no php automática<br>";
echo "=> Vai mudar a operação de dois inteiros para float*double<br>";

$b= 5 / 2;
echo $b;
echo "<br>";
echo qualTipo($b);

echo "<br>";
$x= "Cristiano";
$y = "Pereira Alves";
$c = $x." ".$y;
echo $c;
echo "<br>";
echo qualTipo($c);

echo "<br>";
echo "Utilização do gettype()<br>";
echo "outra maneira de checar o tipo<br>";

$v = 6/4;
echo "$ v = 6 / 4 <br>";
echo "<br>";

echo gettype($v);
echo "<br>";
$tipo = gettype($v);

echo gettype($tipo);




