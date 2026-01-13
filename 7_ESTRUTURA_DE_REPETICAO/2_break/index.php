<?php

$x=100;

while ($x < 1000) {
    echo "0 X é $x<br>";

    if($x===500){
        echo "Terminando o loop <br>";
        break;
    }

    $x=$x+100;
}

echo "<br><br>";

$y=4;

while ($y <= 30) {
        if ($y===4) {
            echo "Vamos iniciar! Contando...<br>";
        }
    

        if ($y===24) {
            echo "Chegou no 24 aqui! <br>";
            break;
        }

    echo "Estamos no $y<br>";
    $y=$y+2;

}
