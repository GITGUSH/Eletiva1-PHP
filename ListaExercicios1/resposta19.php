<?php 
    $distancia = isset($_POST['distancia']) ? $_POST['distancia'] : 0;
        $tempo = isset($_POST['tempo']) ? $_POST['tempo'] : 0;
        $velocidade = $distancia / $tempo;
        echo "A velocidade média é: ".$velocidade;
?>