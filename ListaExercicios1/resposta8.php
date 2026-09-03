<?php 
    $raio = isset($_POST['raio']) ? $_POST['raio'] : 0;
        $area = pi() * pow($raio, 2);
        echo "A área do círculo é: ".$area;
?>