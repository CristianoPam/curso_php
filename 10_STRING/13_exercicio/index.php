<?php


//transformar uma string "este item está em promoção" em "Este item Está em Promoção";


$frase = "este item está em promoção.";

function transformandoFrase($frase){
    $frasetransformada = "";
    for ($i = 0; $i < mb_strlen($frase,'UTF-8')+1; $i++) {
        if ($i == 0 ) {
            $frasetransformada = strtoupper($frase[$i]);
        } elseif ($i > 0 && $i <= 18) {
            $frasetransformada = $frasetransformada.$frase[$i];
        } elseif ($i > 18) {
            $frasetransformada = $frasetransformada.mb_convert_case(mb_substr($frase,$i-1,1,'UTF-8'), MB_CASE_UPPER, "UTF-8");
            
        }
    }

    return $frasetransformada;

}


echo transformandoFrase($frase);
?>  