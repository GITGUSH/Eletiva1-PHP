<?php 
    $a = isset($_POST['valor1']) ? $_POST['valor1'] : 0;
    $b = isset($_POST['valor2']) ? $_POST['valor2'] : 0;

    if ($a == $b){
        echo "Os valores são iguais: ". $a;
    }
    else{
        if ($a > $b){
            echo "Valores em ordem crescente: ". $b." - ".$a;
        }
        else echo "Valores em ordem crescente: ".$a." - ".$b;    
    }
    