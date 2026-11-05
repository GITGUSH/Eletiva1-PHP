<?php 
    $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $senha = "";

    for ($i = 0; $i < 8; $i++){
        $senha .= $caracteres[random_int(0, strlen($caracteres) - 1)];
    }

    echo "Senha gerada: ".$senha;
