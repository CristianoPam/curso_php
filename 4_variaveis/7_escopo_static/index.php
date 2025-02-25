<?php


function teste(){

    $num = 0;

    $num++;

    echo "$num"."<br>";
}

teste();
teste();
teste();

function testeStatic(){

    static $num = 0;

    $num++;

    echo "$num <br>";
}


testeStatic();
testeStatic();
testeStatic();

