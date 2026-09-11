<?php 
    $v1 = isset($_POST['valor1']) ? $_POST['valor1'] : 0;
    $v2 = isset($_POST['valor2']) ? $_POST['valor2'] : 0;

    $soma = $v1 + $v2;    

    if ($v1 == $v2){
        echo "O triplo dos valores é: ". $soma*3;
    }
    else echo "A soma dos dois valores é: ".$soma;