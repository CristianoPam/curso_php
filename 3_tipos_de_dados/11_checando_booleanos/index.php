<?php

$entrar = true;

if (is_bool($entrar)) {
    echo "O valor é Booleando!<br>";
}

if (is_bool(0)) {
    echo "O valor é Booleando 1!<br>";
}

if (is_bool(null)) {
    echo "O valor é Booleando 2!<br>";
}

if (is_bool(false)) {
    echo "O valor é Booleando 3!<br>";
}

if (0 == false){
    echo "O zero é considerado false";
}
