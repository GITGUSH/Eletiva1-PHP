<?php 
    $frase = isset($_POST['frase']) ? $_POST['frase'] : "";

    $vogais = 0;
    $fraseMinuscula = strtolower($frase);

    for ($i = 0; $i < strlen($fraseMinuscula); $i++){
        $caractere = $fraseMinuscula[$i];
        if (in_array($caractere, ['a', 'e', 'i', 'o', 'u'])){
            $vogais++;
        }
    }

    echo "A frase possui ".$vogais." vogal(is).";
