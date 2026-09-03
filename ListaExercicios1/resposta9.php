<?php 
    $largura = isset($_POST['largura']) ? $_POST['largura'] : 0;
        $altura = isset($_POST['altura']) ? $_POST['altura'] : 0;
        $perimetro = 2 * ($largura + $altura);
        echo "O perímetro do retângulo é: ".$perimetro;
?>