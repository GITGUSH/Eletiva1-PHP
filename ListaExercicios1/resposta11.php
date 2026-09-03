<?php 
    $base = isset($_POST['base']) ? $_POST['base'] : 0;
        $expoente = isset($_POST['expoente']) ? $_POST['expoente'] : 0;
        $resultado = pow($base, $expoente);
        echo "O resultado é: ".$resultado;
?>