<?php

$a =10;
$b =15;

function testeEscopo(){
    $a=5;
    global $b; // tornado a variavel global mesmo dentro da função.
    static $c=0; //não reincia dentro do escopo

    $a++;
    $b++;
    $c++;

    echo "ESCOPO LOCAL DE A: $a <br>";
    echo "ESCOPO GLOBAL NA FUNÇÃO DE B: $b <br>";
    echo "ESCOPO STATIC DE C: $c <br>";
}

echo "ESCOPO GLOBAL DE A: $a <br>";
echo "ESCOPO GLOBAL DE B: $b <br>";

testeEscopo();
echo "ESCOPO GLOBAL DE B 2: $b <br>";
testeEscopo();
testeEscopo();


?>


<pre> 
TIPO        REINICIA AO CHAMAR FUNCÃO?           ACESSIVEL FORA DA FUNÇÃO ?
local          SIM                                      NÃO
global         NÃO                                      SIM
static         NAO                                      NÃO    
</pre>

<br>

<table>
    <tr>
        <th>TIPO</th>
        <th>REINICIA AO CHAMAR FUNCÃO ?</th>
        <th>ACESSIVEL FORA DA FUNÇÃO ?</th>        
    </tr>

        <tr>
            <td>Local</td>
            <td>SIM</td>
            <td>NÃO</td>
        </tr>

        <tr>
            <td>Global</td>
            <td>NÃO</td>
            <td>SIM</td>
        </tr>

        <tr>
            <td>Static</td>
            <td>NÃO</td>
            <td>NÃO</td>
        </tr>
</table>

<style>
table {
    border-collapse: collapse;
}
th, td {
    padding: 8px;
    text-align: center;
}
</style>




