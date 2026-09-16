<?php 
    $nome = isset($_POST['nome']) ? trim($_POST['nome']) : "";

    $partes = explode(" ", $nome);
    $iniciais = [];

    foreach ($partes as $parte){
        if (strlen($parte) > 0){
            $iniciais[] = strtoupper($parte[0]);
        }
    }

    echo "Iniciais: ".implode(".", $iniciais);
