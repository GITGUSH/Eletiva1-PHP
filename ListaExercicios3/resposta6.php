<?php 
    $valor = isset($_POST['valor']) ? (float)$_POST['valor'] : 0;

    echo "Arredondado para cima: ".ceil($valor)."<br>";
    echo "Arredondado para baixo: ".floor($valor)."<br>";
    echo "Arredondado normalmente: ".round($valor);
