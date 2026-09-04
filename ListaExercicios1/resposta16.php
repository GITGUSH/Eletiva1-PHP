<?php 
    $capital = isset($_POST['capital']) ? $_POST['capital'] : 0;
        $taxa = isset($_POST['taxa']) ? $_POST['taxa'] : 0;
        $periodo = isset($_POST['periodo']) ? $_POST['periodo'] : 0;
        $juros = $capital * ($taxa / 100) * $periodo;
        echo "Os juros simples são: ".$juros;
?>