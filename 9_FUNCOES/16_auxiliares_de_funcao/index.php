<tr>
    func_get_args()  => retorno os argumentos da função.
    <br>
    func_num_args()  => retorna qtd de argumentos de função.
    <br>
</tr>

<?php

function soma($a, $b){

    print_r(func_get_args());
    echo"<br>";
    print_r(func_num_args());
    return $a + $b;
    
}

soma(2,4);