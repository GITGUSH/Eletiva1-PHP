<?php 
    $capital = isset($_POST['capital']) ? $_POST['capital'] : 0;
        $taxa = isset($_POST['taxa']) ? $_POST['taxa'] : 0;
        $periodo = isset($_POST['periodo']) ? $_POST['periodo'] : 0;
        $montante = $capital * pow(1 + ($taxa / 100), $periodo);
        echo "O montante com juros compostos é: ".$montante;
?>