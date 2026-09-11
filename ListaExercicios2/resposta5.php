<?php 
    $valor = isset($_POST['valor1']) ? $_POST['valor1'] : 0;
    for ($i = 1; $i <= $valor; $i++){
        if ($i < $valor){
        echo $i." - ";}
        else echo $i; 
    }