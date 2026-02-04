<?php


//array to string conversion


$array = ['Hello', 'world', 'from', 'PHP'];


$string = implode(', ', $array);

echo $string; // Output: Hello, world, from, PHP

echo "<br>";

$arry3=["Banana","Amora","Manga","Uva"];

$string2=implode(" 😀 ",$arry3);

echo "\n".$string2; // Output: Banana 😀 Amora 😀 Manga 😀 Uva

?>