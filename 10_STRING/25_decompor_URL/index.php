<?php

$url = "https://www.google.com";

$arrayUrl = parse_url($url);


print_r($arrayUrl);
echo "<br>";


echo $arrayUrl['host'];
echo "<br>";

$url2="http://www.site.com.br/cursos/curso-php";

print_r(parse_url($url2));
echo "<br>";

$url3="http://www.site.com.br/cursos/curso-php/usuarios/cristiano?id=10&nome=cristiano#ancora";

print_r(parse_url($url3));
echo "<br>";

?>