<?php 
    $email = isset($_POST['email']) ? trim($_POST['email']) : "";

    $partes = explode("@", $email);

    if (count($partes) == 2){
        echo "Domínio: ".$partes[1];
    }
    else echo "E-mail inválido.";
