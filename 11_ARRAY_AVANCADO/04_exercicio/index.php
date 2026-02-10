<?php

$array = range(10,45);

foreach($array as $value){
    $soma= $value + 6;

    if($soma > 30){
        echo "O valor $soma é muito alto <br>";
    }else{
        echo "O valor $soma está de acordo <br>";
    }
}







