<?php 
    $valor = isset($_POST['valor']) ? (float)$_POST['valor'] : 0;

    if ($valor < 0){
        echo "Não é possível calcular raiz quadrada de número negativo.";
    }
    else echo "A raiz quadrada de ".$valor." é ".sqrt($valor);
