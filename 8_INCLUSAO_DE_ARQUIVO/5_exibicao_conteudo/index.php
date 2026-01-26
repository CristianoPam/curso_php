<?php

$nome="Cristiano";
$sobrenome=" Pereira Alves de Morais";
$a=" (código normal)";
$b=" (Código simplificado)";


?>

<form action="">
    <div><input type="text" value="<?php echo $nome.$a?>"></div>
    <div><input type="text" value="<?=  $nome.$sobrenome.$b;?>"></div>  <!-- exibição de conteúdo -->
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>

