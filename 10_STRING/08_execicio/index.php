<table>
<tr>
    <th>
        <pre>
function qtdLetraR($str){
        $qtd=0;
    for ($i=0; $i < mb_strlen($str,'UTF-8') ; $i++) { 

        if ($str[$i]=="r") {
           $qtd++; 
            
        }

}    return $qtd;
        }

</pre>
    </th>
    <th>
        <pre>
function qtdLetraA($str){
        $qtd=0;
    for ($i=0; $i < mb_strlen($str,'UTF-8') ; $i++) { 

        if (mb_substr($str,$i,1,'UTF-8')=="a") {
           $qtd++; 
            
        }

}    return $qtd;

        } 
        </pre>
    </th>
</tr>

</table>

<?php

$str="O rato roeu a roupa do rei de Roma, a partir de um loop";
$str2="aaaaaaaa";
global $qtd;
$qtd=0;

function qtdLetraA($str){
        $qtd=0;
    for ($i=0; $i < mb_strlen($str,'UTF-8') ; $i++) { 

        if (mb_substr($str,$i,1,'UTF-8')=="a") {
           $qtd++; 
            
        }

}    return $qtd;

}


$contadorDeAs= qtdLetraA($str);
echo "O número de A's na frase é de:$contadorDeAs";
echo "<br>";
$contadorDeAs= qtdLetraA($str2);
echo "O número de A's na frase é de:$contadorDeAs";


function qtdLetraR($str){
        $qtd=0;
    for ($i=0; $i < mb_strlen($str,'UTF-8') ; $i++) { 

        if ($str[$i]=="r") {
           $qtd++; 
            
        }

}    return $qtd;

}

echo "<br>";
$contadorDeRs= qtdLetraR($str);
echo "O número de R's na frase é de:$contadorDeRs";
echo "<br>";






