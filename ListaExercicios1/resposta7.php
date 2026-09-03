<?php 
    $largura = isset($_POST['largura']) ? $_POST['largura'] : 0;
        $altura = isset($_POST['altura']) ? $_POST['altura'] : 0;
        $area = $largura * $altura;
        echo "A área do retângulo é: ".$area;
?>