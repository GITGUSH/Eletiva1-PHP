<?php 
    $valor = isset($_POST['valor1']) ? $_POST['valor1'] : 0;
    $i = $valor;
    do {
        if($i > 1){
        echo $i." - ";}
        else echo $i;
        $i-=1;}
    while ($i >= 1); 