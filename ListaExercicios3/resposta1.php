<?php 
    $palavra = isset($_POST['palavra']) ? $_POST['palavra'] : "";

    $tamanho = strlen($palavra);

    echo "A palavra '".$palavra."' possui ".$tamanho." caracteres.";