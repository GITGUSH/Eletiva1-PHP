<?php 
    $frase = isset($_POST['frase']) ? trim($_POST['frase']) : "";

    $palavras = preg_split('/\s+/', $frase, -1, PREG_SPLIT_NO_EMPTY);
    $totalPalavras = count($palavras);

    $maiorPalavra = "";
    foreach ($palavras as $palavra){
        if (strlen($palavra) > strlen($maiorPalavra)){
            $maiorPalavra = $palavra;
        }
    }

    echo "Total de palavras: ".$totalPalavras."<br>";
    echo "Maior palavra: ".$maiorPalavra;
