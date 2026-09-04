<?php 
    $peso = isset($_POST['peso']) ? $_POST['peso'] : 0;
        $altura = isset($_POST['altura']) ? $_POST['altura'] : 0;
        $imc = $peso / pow($altura, 2);
        echo "O seu IMC é: ".$imc;
?>