<?php 
    $metros = isset($_POST['metros']) ? $_POST['metros'] : 0;
        $centimetros = $metros * 100;
        echo "O valor em centímetros é: ".$centimetros;
?>