<?php


function teste($a="teste"){
    echo "O valor default do a:$a <br>";
}


teste();
teste("Jesus");

//os prametro obrigatório sempre primeiro, e os default por ultimo.
function testando($b,$a="x"){

 echo "O valor de a é: $a e de b é: $b <br>";
}


testando("y");
