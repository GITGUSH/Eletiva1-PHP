<?php 
    $valor = isset($_POST['valor']) ? (float)$_POST['valor'] : 0;

    $valorFormatado = "R$ ".number_format($valor, 2, ',', '.');

    echo $valorFormatado;
