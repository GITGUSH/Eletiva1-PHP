<?php 
    $quilometros = isset($_POST['quilometros']) ? $_POST['quilometros'] : 0;
        $milhas = $quilometros * 0.621371;
        echo "O valor em milhas é: ".$milhas;
?>