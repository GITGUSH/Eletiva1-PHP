<?php 
    $v1 = isset($_POST['valor1']) ? $_POST['valor1'] : 0;
    $v2 = isset($_POST['valor2']) ? $_POST['valor2'] : 0;
    
    $media = ($v1 + $v2) / 2;

    echo "A média é: ".$media;