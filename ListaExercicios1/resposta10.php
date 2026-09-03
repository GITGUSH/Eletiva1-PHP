<?php 
    $raio = isset($_POST['raio']) ? $_POST['raio'] : 0;
        $perimetro = 2 * pi() * $raio;
        echo "O perímetro do círculo é: ".$perimetro;
?>