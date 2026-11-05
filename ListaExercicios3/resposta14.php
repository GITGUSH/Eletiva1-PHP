<?php 
    $palavra = isset($_POST['palavra']) ? $_POST['palavra'] : "";
    $palavraMinuscula = strtolower($palavra);

    if ($palavraMinuscula == strrev($palavraMinuscula)){
        echo "'".$palavra."' é palíndromo.";
    }
    else echo "'".$palavra."' não é palíndromo.";
